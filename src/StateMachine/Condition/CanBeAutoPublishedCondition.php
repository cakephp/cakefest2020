<?php
namespace App\StateMachine\Condition;

use StateMachine\Dependency\StateMachineConditionInterface;
use StateMachine\Dto\StateMachine\ItemDto;

class CanBeAutoPublishedCondition implements StateMachineConditionInterface
{
    /**
     * @param \StateMachine\Dto\StateMachine\ItemDto $itemDto
     *
     * @return bool
     */
    public function check(ItemDto $itemDto): bool
    {
        return true;
    }
}
