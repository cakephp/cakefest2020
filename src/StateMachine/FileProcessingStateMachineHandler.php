<?php

namespace App\StateMachine;

use App\StateMachine\Command\NotifyUserCommand;
use App\StateMachine\Command\PublishCommand;
use App\StateMachine\Condition\CanBeAutoPublishedCondition;
use StateMachine\Dependency\StateMachineHandlerInterface;
use StateMachine\Dto\StateMachine\ItemDto;

class FileProcessingStateMachineHandler implements StateMachineHandlerInterface
{
    public const NAME = 'FileProcessing';

    public const STATE_INIT = 'init';

    /**
     * {@inheritDoc]
     *
     * @return string[]
     */
    public function getCommands(): array
    {
        return [
            'NotifyUser' => NotifyUserCommand::class,
            'Publish' => PublishCommand::class,
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @return string[]
     */
    public function getConditions(): array
    {
        return [
            'CanBeAutoPublished' => CanBeAutoPublishedCondition::class,
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @return string
     */
    public function getStateMachineName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @return string[]
     */
    public function getActiveProcesses(): array
    {
        return [
            'FileProcessing01',
        ];
    }

        /**
     * {@inheritDoc]
     *
     * @param string $processName
     *
     * @return string
     */
    public function getInitialStateForProcess($processName): string
    {
        return static::STATE_INIT;
    }

    /**
     * {@inheritDoc]
     *
     * @param \StateMachine\Dto\StateMachine\ItemDto $itemDto
     *
     * @return bool
     */
    public function itemStateUpdated(ItemDto $itemDto): bool
    {
        return true;
    }

    /**
     * {@inheritDoc]
     *
     * @param int[] $stateIds
     *
     * @return \StateMachine\Dto\StateMachine\ItemDto[]
     */
    public function getStateMachineItemsByStateIds(array $stateIds = []): array
    {
        return [];
    }
}
