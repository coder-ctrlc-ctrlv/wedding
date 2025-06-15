<?php
    /**
     * @var object $data
     * @property array{title: string, text: string} $greeting Заголовок приглашения
     */
    $title = $data->greeting['title'] ?? 'Обращение';
    $text = $data->greeting['text'] ?? 'Текст обращения';
?>

<div class="invite">
    <?php render('title', ['value' => 'ПРИГЛАШЕНИЕ']); ?>
    <div class="invite__wrapper">
        <div class="invite__title"><?= $title ?></div>
        <img class="invite__separator" src="../../images/line.webp" alt="">
        <div class="invite__text"><?= $text ?></div>
    </div>
</div>


