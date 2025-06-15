<?php
    /**
     * @var object $data
     * @property string $guestId id гостя
     */
?>

<div class="form">
    <?php render('title', ['value' => 'АНКЕТА ГОСТЯ', 'invertColor' => true]); ?>
    <div class="form__wrapper">
        <div class="form__title">Пожалуйста, подтвердите своё присутствие на мероприятии до:</div>
        <div class="form__date"><span>22</span> <span>/</span> <span>06</span> <span>/</span> <span>25</span></div>
        <form id="form" class="form__items" action="components/form/form-handler.php" method="post">
            <input type="hidden" name="guest_id" value="<?= $data->guestId ?>">
            <label class="form__checkbox-item">
                <input class="form__checkbox-input" type="radio" name="answer" value="ceremony" required checked>
                Хочу послушать про корабль любви! Ждите в ЗАГСе к 16:20
            </label>
            <label class="form__checkbox-item">
                <input class="form__checkbox-input" type="radio" name="answer" value="banquet">
                Приступлю сразу к алкоголю и конкурсам, приду в «РАУТ» к 17:20
            </label>
            <label class="form__checkbox-item">
                <input class="form__checkbox-input" type="radio" name="answer" value="no">
                Не смогу прийти :(
            </label>
            <button class="form__button" type="submit">ПОДТВЕРДИТЬ</button>
        </form>
    </div>
</div>