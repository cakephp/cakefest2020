<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit File'), ['action' => 'edit', $file->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete File'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Files'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New File'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="files view content">
            <h3><?= h($file->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= $file->has('group') ? $this->Html->link($file->group->name, ['controller' => 'Groups', 'action' => 'view', $file->group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($file->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($file->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($file->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metadata') ?></th>
                    <td><?= h($file->metadata) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($file->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($file->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($file->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related File Share Links') ?></h4>
                <?= $this->Form->postButton(
                    'Create Share Link',
                    ['controller' => 'FileShareLinks', 'action' => 'add'],
                    ['data' => ['file_id' => $file->id]]
                ) ?>
                <?php if (!empty($file->file_share_links)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Expires At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($file->file_share_links as $fileShareLinks) : ?>
                        <tr>
                            <td><?= h($fileShareLinks->token) ?></td>
                            <td><?= h($fileShareLinks->expires_at) ?></td>
                            <td class="actions">
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FileShareLinks', 'action' => 'delete', $fileShareLinks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileShareLinks->id)]) ?>
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
