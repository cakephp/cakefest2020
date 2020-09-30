<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tagged $tagged
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tagged'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tagged form content">
            <?= $this->Form->create($tagged) ?>
            <fieldset>
                <legend><?= __('Add Tagged') ?></legend>
                <?php
                    echo $this->Form->control('table_alias');
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('tag_id', ['options' => $tags]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
