<?php
namespace App\StateMachine\Command;

use Cake\Datasource\ModelAwareTrait;
use StateMachine\Dependency\StateMachineCommandInterface;
use StateMachine\Dto\StateMachine\ItemDto;

/**
 * @property \App\Model\Table\FilesTable $Files
 */
class PublishCommand implements StateMachineCommandInterface
{
    use ModelAwareTrait;

    /**
     * @param \StateMachine\Dto\StateMachine\ItemDto $itemDto
     *
     * @return void
     */
    public function run(ItemDto $itemDto): void
    {
        //throw new \RuntimeException('Not with me');
        $fileId = $itemDto->getIdentifier();
        $this->loadModel('Files');

        $file = $this->Files->get($fileId);
        $file->processed = true;
        $this->Files->saveOrFail($file);
    }
}
