<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('') ?></h4>
            <?= $this->Html->link(__('編集'), ['action' => 'edit', $post->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $post->id], ['confirm' => __('本当に削除してもよろしいでしょうか # {0}?', $post->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('投稿一覧'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('投稿する'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="posts view content">
            <h3><?= h($post->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('ユーザー名') ?></th>
                    <td><?= $post->hasValue('user') ? $this->Html->link($post->user->user_name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('タイトル') ?></th>
                    <td><?= h($post->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('投稿日') ?></th>
                    <td><?= h($post->created_at->i18nFormat('yyyy/MM/dd HH:mm')) ?></td>
                </tr>
                <tr>
                    <th><?= __('更新日') ?></th>
                    <td><?= h($post->modified_at->i18nFormat('yyyy/MM/dd HH:mm')) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('概要') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($post->discription)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('本文') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($post->body)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
