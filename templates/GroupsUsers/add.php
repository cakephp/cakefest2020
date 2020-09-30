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
            <?= $this->Html->link(__('List Groups Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="groupsUsers form content">
            <?= $this->Form->create($groupsUser) ?>
            <fieldset>
                <legend><?= __('Add Groups User') ?></legend>
                <?php
                    echo $this->Form->control('group_id', ['options' => $groups]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
