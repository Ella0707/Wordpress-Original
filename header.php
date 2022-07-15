<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <link rel="stylesheet" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/assets/fonts/fonts.css" />
    <title>Original Marines</title>

    <?php wp_head(); ?>
</head>

<body>


    <!-- HEADER  -->
    <header class="header">
        <div class="container">
            <div class="header__inner">

                <a href="" class="header__logo">
                    <img class="header__logo-img" src="<?php echo IMG_DIR; ?>logo.svg" alt="">
                </a>

                <button class="header__btn menu-btn">
                </button>

                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#about">О нас</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#support">Поддержка франчайзи</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#plan">Кейсы</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#format">Формат магазина</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#faq">FAQ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>