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
            <?= $this->Html->link(__('Edit Tagged'), ['action' => 'edit', $tagged->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tagged'), ['action' => 'delete', $tagged->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagged->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tagged'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tagged'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tagged view content">
            <h3><?= h($tagged->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Table Alias') ?></th>
                    <td><?= h($tagged->table_alias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tag') ?></th>
                    <td><?= $tagged->has('tag') ? $this->Html->link($tagged->tag->name, ['controller' => 'Tags', 'action' => 'view', $tagged->tag->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tagged->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $this->Number->format($tagged->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tagged->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tagged->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
