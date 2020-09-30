<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupsUser[]|\Cake\Collection\CollectionInterface $groupsUsers
 */
?>
<div class="groupsUsers index content">
    <?= $this->Html->link(__('New Groups User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Groups Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('group_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groupsUsers as $groupsUser): ?>
                <tr>
                    <td><?= $this->Number->format($groupsUser->id) ?></td>
                    <td><?= $groupsUser->has('group') ? $this->Html->link($groupsUser->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsUser->group->id]) : '' ?></td>
                    <td><?= $groupsUser->has('user') ? $this->Html->link($groupsUser->user->id, ['controller' => 'Users', 'action' => 'view', $groupsUser->user->id]) : '' ?></td>
                    <td><?= h($groupsUser->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $groupsUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupsUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsUser->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
