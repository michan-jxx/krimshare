<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('') ?></h4>
            <?= $this->Html->link(__('ユーザー一覧'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('新規登録') ?></legend>
                <?php
                    echo $this->Form->control('user_name', ['label' => ['text' => 'ユーザー名']]);
                    echo $this->Form->control('email', ['label' => ['text' => 'メールアドレス']]);
                    echo $this->Form->control('password', ['label' => ['text' => 'パスワード']]);
                    echo $this->Form->control('created_at', ['empty' => true, 'label' => ['text' => '登録日']]);
                    echo $this->Form->control('modified_at', ['empty' => true, 'label' => ['text' => '更新日']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('登録する')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
