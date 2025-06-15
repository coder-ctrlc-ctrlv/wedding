<?php
    /**
     * @var object $data
     * @property string $title Заголовок
     * @property string $address Адрес
     * @property string $time Время
     * @property string $mapLink Ссылка на карты
     * @property string $img Картинка
     * @property bool $reverse Флаг для реверса контента
     */

    $classes = ['location'];
    if (isset($data->reverse) && $data->reverse === true) {
        $classes[] = 'location--reverse';
    }
?>

<div class="<?= implode(' ', $classes) ?>">
    <div class="location__wrapper">
        <div class="location__image">
            <img src="<?= $data->img ?>" alt="">
        </div>
        <div class="location__info">
            <p class="location__info-title"><?= $data->title ?></p>
            <p class="location__info-address"><?= $data->address ?></p>
            <div class="location__info-time">
                <p>Сбор гостей</p>
                <p>-</p>
                <p><?= $data->time ?></p>
            </div>
            <a class="location__info-map" href="<?= $data->mapLink ?>" target="_blank">КАК ДОБРАТЬСЯ</a>
        </div>
    </div>
</div>