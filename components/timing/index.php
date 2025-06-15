<?php
    $timing = [
        [
            'image' => file_get_contents(__DIR__ . '/../../images/timing1.svg'),
            'time' => '16:20',
            'text' => 'Сбор гостей<br>(ЗАГС)'
        ],
        [
            'image' => file_get_contents(__DIR__ . '/../../images/timing2.svg'),
            'time' => '16:40',
            'text' => 'Церемония регистрации'
        ],
        [
            'image' => file_get_contents(__DIR__ . '/../../images/timing1.svg'),
            'time' => '17:20',
            'text' => 'Сбор гостей<br>(РАУТ)'
        ],
        [
            'image' => file_get_contents(__DIR__ . '/../../images/timing3.svg'),
            'time' => '17:45',
            'text' => 'Банкет'
        ],
        [
            'image' => file_get_contents(__DIR__ . '/../../images/timing4.svg'),
            'time' => '23:00',
            'text' => 'Завершение вечера'
        ],
    ];
?>

<div class="timing">
    <?php render('title', ['value' => 'ТАЙМИНГ']); ?>
    <div class="timing__items">
        <div class="timing__items-line"></div>
        <?php foreach ($timing as $item) { ?>
            <div class="timing__item">
                <div class="timing__item-wrapper">
                    <div class="timing__item-image">
                        <?= $item['image'] ?>
                    </div>
                    <div class="timing__item-time">
                        <p><?= $item['time']?></p>
                    </div>
                </div>
                <div class="timing__item-text">
                    <p><?= $item['text'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>