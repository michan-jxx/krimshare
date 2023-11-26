<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>
<div class = "content">
    <?php foreach ($posts as $post): ?>
        <h3><?= h($post->title) ?></h3>
        <p>更新日時：<?= $post->modified_at->i18nFormat('YYYY年MM月dd日 HH:MM') ?></p>
        <p><?= $this->Text->autoParagraph(h($post->discription)) ?></p>
        <a href="/posts/view/<?= $post->id ?>" class="button">投稿を読む</a>
        <hr>
    <?php endforeach; ?>
    <?php if($this->Paginator->total() > 1): ?>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< 最初') ?>
                <?= $this->Paginator->prev('< 前へ') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('次へ >') ?>
                <?= $this->Paginator->last('最後 >>') ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

