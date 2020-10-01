<?php
declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

/**
 * FileShareLinkCleanup command.
 */
class FileShareLinkCleanupCommand extends Command
{
    /**
     * @var \App\Model\Table\FileShareLinksTable
     */
    protected $FileShareLinks;

    /**
     * Hook methrod for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);
        $parser
            ->addOption('format', [
                'help' => 'How to format results',
                'choices' => ['table', 'list'],
                'default' => 'list',
            ])
            ->addOption('exec', [
                'help' => 'Actually purge tokens',
                'boolean' => true,
                'default' => false,
            ]);

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
        $this->loadModel('FileShareLinks');

        $results = $this->FileShareLinks->find('expired');
        if (!$args->getOption('quiet')) {
            if ($args->getOption('format') === 'list') {
                foreach ($results as $result) {
                    $io->out(" - id:{$result->id} fileId:{$result->file_id} expires:{$result->expires_at}");
                }
            }
            if ($args->getOption('format') === 'table') {
                $table = $io->helper('Table');
                $out = [
                    ['Id', 'Token', 'Expired At'],
                ];
                foreach ($results as $result) {
                    $out[] = [$result->id, $result->token, $result->expires_at];
                }
                $table->output($out);
            }
        }
        if ($args->getOption('exec')) {
            $io->out('Deleting expired tokens...');
            $this->FileShareLinks->deleteExpired();
        }
        $io->out('<success>All done!</success>');
    }
}
