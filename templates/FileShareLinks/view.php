<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FileShareLink $fileShareLink
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit File Share Link'), ['action' => 'edit', $fileShareLink->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete File Share Link'), ['action' => 'delete', $fileShareLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileShareLink->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List File Share Links'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New File Share Link'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fileShareLinks view content">
            <h3><?= h($fileShareLink->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= $fileShareLink->has('file') ? $this->Html->link($fileShareLink->file->name, ['controller' => 'Files', 'action' => 'view', $fileShareLink->file->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($fileShareLink->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fileShareLink->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expires At') ?></th>
                    <td><?= h($fileShareLink->expires_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($fileShareLink->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($fileShareLink->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
