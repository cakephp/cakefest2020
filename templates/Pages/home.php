<?= $this->Html->tag('h1', __('Our homepage!')) ?>
<?php if (!$identity = $this->request->getAttribute('identity')) : ?>
    <?php
    $this->Html->script('login', ['block' => 'footerScript']);
    ?>
    <?= $this->Form->create(null, ['id' => 'login']) ?>
<fieldset>
    <legend><?= __('Please enter your credentials') ?></legend>
    <?= $this->Form->control('email', ['required' => true]) ?>
    <?= $this->Form->control('password', ['required' => true]) ?>
    <?= $this->Form->submit(__('Login')) ?>
</fieldset>
    <?= $this->Form->end() ?>
<?php else : ?>
    <?= $this->Html->tag('blockquote', __('Welcome back {0}', $identity->get('first_name'))) ?>
<?php endif; ?>
<br/>
<?= $this->Html->link(__('logout'), [
    'controller' => 'Users',
    'action' => 'logout',
]) ?>
