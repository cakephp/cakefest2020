<?php

declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use SplFileObject;

/**
 * LoadUsers command.
 */
class LoadUsersCommand extends Command
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

        $users = new SplFileObject($csv);
        /** @var \App\Model\Table\UsersTable $usersTable */
        $usersTable = $this->loadModel('Users');
        $connection = $usersTable->getConnection();

        collection((function () use ($users) {
            while ($line = $users->fgetcsv()) {
                if (empty($line[0])) {
                    break;
                }
                yield $line;
            }
        })())
            ->map(function ($line) {
                return [
                    'first_name' => $line[0],
                    'last_name' => $line[1],
                    'email' => $line[2],
                    'password' => 'hunter2',
                    'created' => new \DateTime(),
                    'modified' => new \DateTime(),
                ];
            })
            ->chunk(1000)
            ->each(function ($chunk, $i) use ($usersTable, $connection, $io) {
                $io->info("Loading chunk $i");

                $insert = $connection->newQuery()->insert(
                    ['first_name', 'last_name', 'email', 'password', 'created', 'modified'],
                    $usersTable->getSchema()->typeMap()
                );

                $insert->into($usersTable->getTable());

                foreach ($chunk as $row) {
                    $insert->values($row);
                }

                $statement = $insert->execute();
                $statement->closeCursor();
            });
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function slow(Arguments $args, ConsoleIo $io)
    {
        $csv = $args->getArgument('file');
        $io->info("You are about to load the $csv file");

        $users = new SplFileObject($csv);
        /** @var \App\Model\Table\UsersTable $usersTable */
        $usersTable = $this->loadModel('Users');

        collection((function () use ($users) {
            while ($line = $users->fgetcsv()) {
                yield $line;
            }
        })())
            ->map(function ($line) use ($usersTable) {
                return $usersTable->newEntity([
                    'first_name' => $line[0],
                    'last_name' => $line[1],
                    'email' => $line[2],
                    'password' => 'hunter2',
                ], ['markNew' => true, 'useSetters' => false, 'markClean' => true]);
            })
            ->chunk(1000)
            ->each(function ($chunk, $i) use ($usersTable, $io) {
                $io->info("Loading chunk $i");
                $usersTable->saveMany($chunk);
            });
    }
}
