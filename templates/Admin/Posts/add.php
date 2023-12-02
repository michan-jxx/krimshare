<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('') ?></h4>
            <?= $this->Html->link(__('投稿一覧'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('新規投稿') ?></legend>
                <?php
                    echo $this->Form->hidden('user_id',['value' => $user->id]);
                    echo $this->Form->control('title', ['label' => ['text' => 'タイトル']]);
                    echo $this->Form->control('discription', ['label' => ['text' => '概要']]);
                    echo $this->Form->control('body', ['label' => ['text' => '本文']]);
                    echo $this->Form->control('created_at', ['empty' => true, 'label' => ['text' => '投稿日']]);
                    echo $this->Form->control('modified_at', ['empty' => true, 'label' => ['text' => '更新日']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('投稿する')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
