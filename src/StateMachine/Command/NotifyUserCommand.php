<?php
namespace App\StateMachine\Command;

use StateMachine\Dependency\StateMachineCommandInterface;
use StateMachine\Dto\StateMachine\ItemDto;

class NotifyUserCommand implements StateMachineCommandInterface
{
    /**
     * @param \StateMachine\Dto\StateMachine\ItemDto $itemDto
     *
     * @return void
     */
    public function run(ItemDto $itemDto): void
    {
        // TODO: Implement run() method.
    }
}
