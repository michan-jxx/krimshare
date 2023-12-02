<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('ユーザー名とパスワードを入力してください') ?></legend>
        <?= $this->Form->control('email', ['required' => true, 'label' => ['text' => 'メールアドレス']]) ?>
        <?= $this->Form->control('password', ['required' => true, 'label' => ['text' => 'パスワード']]) ?>
    </fieldset>
    <?= $this->Form->submit(('ログイン')); ?>
    <?= $this->Form->end() ?>
</div>
