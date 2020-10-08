<?php

declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

/**
 * LoadFiles command.
 */
class LoadFilesCommand extends Command
{
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);
        $parser->addArgument('file', ['required' => true]);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $csv = $args->getArgument('file');
        $io->info("You are about to load the $csv file");

        $files = new \SplFileObject($csv);
        /** @var \App\Model\Table\FilesTable $filesTable */
        $filesTable = $this->loadModel('Files');
        $connection = $filesTable->getConnection();

        collection((function () use ($files) {
            while ($line = $files->fgetcsv()) {
                if (empty($line[0])) {
                    break;
                }
                yield $line;
            }
        })())
            ->map(function ($line) {
                $metadata = json_decode($line[4]);
                $metadata->_tag = $line[5];

                return [
                    'group_id' => $line[0],
                    'name' => $line[1],
                    'type' => $line[2],
                    'path' => $line[3],
                    'metadata' => $metadata,
                    'created' => new \DateTime(),
                    'modified' => new \DateTime(),
                ];
            })
            ->chunk(5000)
            ->each(function ($chunk, $i) use ($filesTable, $connection, $io) {
                $io->info("Loading chunk $i");

                $insert = $connection->newQuery()->insert(
                    ['group_id', 'name', 'type', 'path', 'metadata', 'created', 'modified'],
                    $filesTable->getSchema()->typeMap()
                );

                $insert->into($filesTable->getTable());
                $insert->clause('values')->setValues($chunk);

                $statement = $insert->execute();
                $statement->closeCursor();
            });

        /** @var \App\Model\Table\TagsTable $tagsTable */
        $tagsTable = $this->loadModel('Tags');

        $query = $connection->newQuery();
        $query->select(
            [
                'name' => $query->newExpr("  metadata ->> '_tag' "),
                'created' => $query->func()->now(),
                'modified' => $query->func()->now(),
                'occurrence' => $query->newExpr(' 0::integer '),
            ]
        )
            ->from($filesTable->getTable());

        $connection->newQuery()
            ->insert(['name', 'created', 'modified', 'occurrence'])
            ->into($tagsTable->getTable())
            ->values($query)
            ->epilog('ON CONFLICT DO NOTHING')
            ->execute()
            ->closeCursor();

        $query = $connection->newQuery();
        $query->select(
            [
                'tag_id' => $query->identifier('tags.id'),
                'table_alias' => $query->newexpr(" 'Files' "),
                'foreign_key' => $query->identifier('files.id'),
                'created' => $query->func()->now(),
                'modified' => $query->func()->now(),
            ]
        )
            ->from(['files' => $filesTable->getTable()])
            ->innerJoin(['tags' => $tagsTable->getTable()], $query->newExpr()->eq(
                $query->identifier('tags.name'),
                $query->newExpr(" metadata ->> '_tag' ")
            ));


        /** @var \App\Model\Table\TaggedTable $taggedTable */
        $taggedTable = $this->loadModel('Tagged');
        $connection->newQuery()->insert([
            'tag_id',
            'table_alias',
            'foreign_key',
            'created',
            'modified',
        ])
            ->into($taggedTable->getTable())
            ->values($query)
            ->execute()
            ->closeCursor();
    }
}
