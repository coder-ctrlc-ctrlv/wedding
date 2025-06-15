<?php
    $weekdays = ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС']
?>

<div class="wedding-date">
    <?php render('title', ['value' => 'МЫ ЖДЁМ ВАС']); ?>
    <div class="wedding-date__content">
        <div class="wedding-date__text-wrapper">
            <div class="wedding-date__text">Не пропустите важное событие этого лета - день нашей свадьбы</div>
            <div class="wedding-date__date"><span>01</span> <span>/</span> <span>08</span> <span>/</span> <span>25</span></div>
        </div>
        <div class="wedding-date__calendar-wrapper">
            <div class="wedding-date__calendar-title">АВГУСТ</div>
            <div class="wedding-date__calendar">
                <?php foreach ($weekdays as $day) {
                    echo "<span class='wedding-date__calendar-weekday'>$day</span>";
                }?>
                <?php foreach (range(1, 4) as $number) {
                    echo '<span></span>';
                }?>
                <?php foreach (range(1, 31) as $day) {
                    $classes = 'wedding-date__calendar-monthday' . ($day === 1 ? ' wedding-date__calendar-monthday--active' : '');
                    echo "<span class='$classes'>$day</span>";
                }?>
            </div>
        </div>
    </div>
</div>