<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/repository/GuestRepository.php';
require_once __DIR__ . '/repository/GreetingRepository.php';

$guestId = $_GET['id'] ?? null;
$guestExists = GuestRepository::checkGuest($guestId);
?>

<!DOCTYPE html>
<html lang="">
<head>
    <title>Приглашение</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <div class="section">
            <div class="section__inner-wrapper section__inner-wrapper--padding-none">
                <?php render('wedding-day'); ?>
            </div>
        </div>
        <?php if ($guestExists === true): ?>
            <div class="section">
                <div class="section__inner-wrapper">
                    <?php render('invite', [
                        'greeting' => GreetingRepository::getByGuestId($guestId)
                    ]); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="section">
            <div class="section__inner-wrapper">
                <?php render('wedding-date'); ?>
            </div>
        </div>
        <div class="section">
            <div class="section__inner-wrapper">
                <?php render('timing'); ?>
            </div>
        </div>
        <div class="section">
            <div class="section__inner-wrapper">
                <?php render('ceremony'); ?>
            </div>
        </div>
        <div class="section">
            <div class="section__inner-wrapper">
                <?php render('banquet'); ?>
            </div>
        </div>
        <div class="section section--dark">
            <div class="section__inner-wrapper">
                <?php render('clothes'); ?>
            </div>
        </div>
        <div class="section">
            <div class="section__inner-wrapper">
                <?php render('counter') ?>
            </div>
        </div>
        <div class="section section--wishes">
            <div class="section__inner-wrapper">
                <?php render('wishes') ?>
            </div>
        </div>
        <?php if ($guestExists === true): ?>
            <div class="section section--dark">
                <div class="section__inner-wrapper">
                    <?php render('form', ['guestId' => $guestId]); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php render('footer') ?>
        <?php render('modal') ?>
    </div>
    <script type="module" src="js/script.js"></script>
    <script type="module" src="components/form/script.js"></script>
</body>
</html>