<?php
    $photos = [
        '../../images/candles.webp',
        '../../images/rings.webp',
        '../../images/hands.webp',
        '../../images/flowers.webp',
        '../../images/textile.webp'
    ];
    $extraPhotos = [
        '../../images/textile.webp',
        '../../images/flowers.webp',
        '../../images/candles.webp',
        '../../images/rings.webp',
        '../../images/hands.webp',
    ];
?>

<div class="wedding-day">
    <?php render('title', ['value' => 'THE WEDDING DAY', 'showDate' => true, 'onlyPC' => true]); ?>
    <div class="wedding-day__header">THE WEDDING DAY</div>
    <div class="wedding-day__names"><span>СЕРГЕЙ</span> <span>+</span> <span>АЛЁНА</span></div>
    <div class="wedding-day__photos">
        <div class="wedding-day__photos-inner">
            <?php foreach ($photos as $src) { ?>
                <div class="wedding-day__photo">
                    <img src="<?= $src ?>" alt="">
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="wedding-day__photos wedding-day__photos--extra">
        <div class="wedding-day__photos-inner">
            <?php foreach ($extraPhotos as $src) { ?>
                <div class="wedding-day__photo">
                    <img src="<?= $src ?>" alt="">
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="wedding-day__date">
        <span>01</span> <span>/</span> <span>08</span> <span>/</span> <span>25</span>
    </div>
</div>