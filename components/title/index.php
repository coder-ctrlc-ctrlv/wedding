<?php
    /**
     * @var object $data
     * @property string $value Заголовок
     * @property bool $showDate Флаг для показа даты
     * @property bool $onlyPC Флаг для скрытия на мобилке
     * @property bool $invertColor Флаг для инвертирования цвета
    */

    $classes = ['title'];
    if (isset($data->onlyPC) && $data->onlyPC === true) {
        $classes[] = 'only-pc';
    }

    if (isset($data->invertColor) && $data->invertColor === true) {
        $classes[] = 'title--color-invert';
    }

    $showDate = function ($data): bool {
        return isset($data->showDate) && $data->showDate === true;
    };
?>
<div class="<?= implode(' ', $classes) ?>">
    <div class="title__circle"></div>
    <h1 class="title__value"><?= $data->value ?></h1>
    <?= $showDate($data) ? '<div class="title__date"><span>01</span> <span>/</span> <span>08</span> <span>/</span> <span>25</span></div>' : '' ?>
</div>
