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
            <?= $this->Html->link(__('編集'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $user->id], ['confirm' => __('本当に削除してもよろしいでしょうか # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('ユーザー一覧'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('登録する'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->user_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('ユーザー名') ?></th>
                    <td><?= h($user->user_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('メールアドレス') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('ユーザーID') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('ユーザー登録日') ?></th>
                    <td><?= h($user->created_at->i18nFormat('yyyy/MM/dd HH:mm')) ?></td>
                </tr>
                <tr>
                    <th><?= __('ユーザー更新日') ?></th>
                    <td><?= h($user->modified_at->i18nFormat('yyyy/MM/dd HH:mm')) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('投稿一覧') ?></h4>
                <?php if (!empty($user->posts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('投稿ID') ?></th>
                            <th><?= __('ユーザーID') ?></th>
                            <th><?= __('タイトル') ?></th>
                            <th><?= __('概要') ?></th>
                            <th><?= __('本文') ?></th>
                            <th><?= __('投稿日') ?></th>
                            <th><?= __('更新日') ?></th>
                            <th class="actions"><?= __('') ?></th>
                        </tr>
                        <?php foreach ($user->posts as $posts) : ?>
                        <tr>
                            <td><?= h($posts->id) ?></td>
                            <td><?= h($posts->user_id) ?></td>
                            <td><?= h($posts->title) ?></td>
                            <td><?= h($posts->discription) ?></td>
                            <td><?= h($posts->body) ?></td>
                            <td><?= h($posts->created_at) ?></td>
                            <td><?= h($posts->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('詳細'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                                <?= $this->Html->link(__('編集'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                                <?= $this->Form->postLink(__('削除'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('本当に削除してもよろしいでしょうか # {0}?', $posts->id)]) ?>
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
