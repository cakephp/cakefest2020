<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tagged[]|\Cake\Collection\CollectionInterface $tagged
 */
?>
<div class="tagged index content">
    <?= $this->Html->link(__('New Tagged'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tagged') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('table_alias') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('tag_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tagged as $tagged): ?>
                <tr>
                    <td><?= $this->Number->format($tagged->id) ?></td>
                    <td><?= h($tagged->table_alias) ?></td>
                    <td><?= $this->Number->format($tagged->foreign_key) ?></td>
                    <td><?= $tagged->has('tag') ? $this->Html->link($tagged->tag->name, ['controller' => 'Tags', 'action' => 'view', $tagged->tag->id]) : '' ?></td>
                    <td><?= h($tagged->created) ?></td>
                    <td><?= h($tagged->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tagged->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tagged->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tagged->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagged->id)]) ?>
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
