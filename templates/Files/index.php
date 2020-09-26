<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $files
 */
?>
<div class="files index content">
    <?= $this->Html->link(__('New File'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Files') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('group_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('metadata') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($files as $file): ?>
                <tr>
                    <td><?= $this->Number->format($file->id) ?></td>
                    <td><?= $file->has('group') ? $this->Html->link($file->group->name, ['controller' => 'Groups', 'action' => 'view', $file->group->id]) : '' ?></td>
                    <td><?= h($file->name) ?></td>
                    <td><?= h($file->type) ?></td>
                    <td><?= h($file->path) ?></td>
                    <td><?= h($file->metadata) ?></td>
                    <td><?= h($file->created) ?></td>
                    <td><?= h($file->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $file->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $file->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]) ?>
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
