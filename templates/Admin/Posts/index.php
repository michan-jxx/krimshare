<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Post> $posts
 */
?>
<div class="posts index content">
    <?= $this->Html->link(__('投稿する'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('投稿一覧') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('投稿ID') ?></th>
                    <th><?= $this->Paginator->sort('ユーザーID') ?></th>
                    <th><?= $this->Paginator->sort('タイトル') ?></th>
                    <th><?= $this->Paginator->sort('投稿日') ?></th>
                    <th><?= $this->Paginator->sort('更新日') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $this->Number->format($post->id) ?></td>
                    <td><?= h($post->user_id) ?></td>
                    <td><?= h($post->title) ?></td>
                    <td><?= h($post->created_at->i18nFormat('yyyy/MM/dd HH:mm')) ?></td>
                    <td><?= h($post->modified_at->i18nFormat('yyyy/MM/dd HH:mm')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('詳細'), ['action' => 'view', $post->id]) ?>
                        <?= $this->Html->link(__('編集'), ['action' => 'edit', $post->id]) ?>
                        <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $post->id], ['confirm' => __('本当に削除してもよろしいでしょうか？ # {0}?', $post->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('最初')) ?>
            <?= $this->Paginator->prev('< ' . __('前へ')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
