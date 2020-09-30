<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags view content">
            <h3><?= h($tag->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tag->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occurrence') ?></th>
                    <td><?= $this->Number->format($tag->occurrence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tag->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tagged') ?></h4>
                <?php if (!empty($tag->tagged)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Table Alias') ?></th>
                            <th><?= __('Foreign Key') ?></th>
                            <th><?= __('Tag Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tag->tagged as $tagged) : ?>
                        <tr>
                            <td><?= h($tagged->id) ?></td>
                            <td><?= h($tagged->table_alias) ?></td>
                            <td><?= h($tagged->foreign_key) ?></td>
                            <td><?= h($tagged->tag_id) ?></td>
                            <td><?= h($tagged->created) ?></td>
                            <td><?= h($tagged->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tagged', 'action' => 'view', $tagged->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tagged', 'action' => 'edit', $tagged->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tagged', 'action' => 'delete', $tagged->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagged->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
