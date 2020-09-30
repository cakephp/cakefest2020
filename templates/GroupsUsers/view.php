<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupsUser $groupsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Groups User'), ['action' => 'edit', $groupsUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Groups User'), ['action' => 'delete', $groupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Groups Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Groups User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="groupsUsers view content">
            <h3><?= h($groupsUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= $groupsUser->has('group') ? $this->Html->link($groupsUser->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsUser->group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $groupsUser->has('user') ? $this->Html->link($groupsUser->user->id, ['controller' => 'Users', 'action' => 'view', $groupsUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($groupsUser->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($groupsUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
