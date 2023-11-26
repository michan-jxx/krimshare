<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<h1><?= h($post->title) ?></h1>
<p><?= $this->Text->autoParagraph(h($post->body)) ?></p>
<p>更新日時：<?= $post->modified_at->i18nFormat('YYYY年MM月dd日 HH:MM') ?></p>
