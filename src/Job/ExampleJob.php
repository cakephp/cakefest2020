<?php
declare(strict_types=1);

namespace App\Job;

use Cake\Error\Debugger;
use Cake\Log\Log;
use Cake\Queue\Job\Message;
use Interop\Queue\Processor;

/**
 * Example job
 */
class ExampleJob
{
    /**
     * Executes logic for ExampleJob
     *
     * @param \Cake\Queue\Job\Message $message job message
     * @return string
     */
    public function execute(Message $message): string
    {
        $data = $message->getArgument('data');

        // do some long operation with data
        Debugger::log($data);
        sleep(2);

        return Processor::ACK;
    }
}
