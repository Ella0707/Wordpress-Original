<!-- footer -->

<footer class="footer">
        <div class="container">

            <div class="footer__inner">
                <div class="footer__top">
                    <div class="footer__left-block">
                        <nav class="footer__nav-left">
                            <ul class="footer__list-left">
                                <li class="footer__item-left">
                                    <a class="footer__link-left" href="">Главная</a>
                                </li>
                                <li class="footer__item-left">
                                    <a class="footer__link-left" href="">О нас</a>
                                </li>
                                <li class="footer__item-left">
                                    <a class="footer__link-left" href="">Поддержка франчайзи</a>
                                </li>
                            </ul>
                        </nav>

                        <nav class="footer__nav-left-mob">
                            <ul class="footer__list-left-mob">
                                <li class="footer__item-left">
                                    <a class="footer__link-left" href="">Главная</a>
                                </li>
                                <li class="footer__item-left">
                                    <a class="footer__link-left" href="">О нас</a>
                                </li>
                                <li class="footer__item-right">
                                    <a class="footer__link-right" href="">FAQ</a>
                                </li>
                                <li class="footer__item-right">
                                    <a class="footer__link-right" href="">Кейсы</a>
                                </li>
                                <li class="footer__item-left">
                                    <a class="footer__link-left" href="">Поддержка франчайзи</a>
                                </li>
                                <li class="footer__item-right">
                                    <a class="footer__link-right" href="">Формат магазина</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <a class="footer__logo" href="">
                        <img class="footer__logo-img" src="<?php echo IMG_DIR; ?>logo.svg" alt="">
                    </a>

                    <div class="footer__right-block">
                        <nav class="footer__nav-right">
                            <ul class="footer__list-right">
                                <li class="footer__item-right">
                                    <a class="footer__link-right" href="">Кейсы</a>
                                </li>
                                <li class="footer__item-right">
                                    <a class="footer__link-right" href="">Формат магазина</a>
                                </li>
                                <li class="footer__item-right">
                                    <a class="footer__link-right" href="">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="footer__down">

                    <div class="footer__privacy-policy">
                        <a class="footer__privacy-policy-link" href="">политика конфиденциальности</a>
                    </div>


                    <div class="footer__social">
                        <div class="footer__social-item">
                            <a href="" class="footer__social-link">Instagram</a>
                        </div>
                        <div class="footer__social-item">
                            <a href="" class="footer__social-link">Youtube</a>
                        </div>
                        <div class="footer__social-item">
                            <a href="" class="footer__social-link">Facebook</a>
                        </div>
                        <div class="footer__social-item">
                            <a href="" class="footer__social-link">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>




    <!-- POPAP  -->
    <div class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close close-popup">
                    <img class="popup__close-img" src="<?php echo IMG_DIR; ?>popap-close.svg" alt="">
                </a>
                <div class="popup__content-wrap">
                    <div class="popup__content-wrap-left">
                        <a href="" class="popup__logo">
                            <img class="popup__logo-img" src="<?php echo IMG_DIR; ?>logo.svg" alt="">
                        </a>

                        <form class="popup__form" action="">
                            <div class="popup__title">Оставить заявку</div>
                            <div class="popup__input-wrap">
                                <input class="popup__input" type="text" placeholder="Введите имя*" name="" id="">
                                <input class="popup__input" type="email" placeholder="Введите e-mail**" name="" id="">
                                <input class="popup__input" type="tel" placeholder="Введите телефон*" name="" id="">
                                <input class="popup__input" type="text" placeholder="Дополнительная информация" name=""
                                    id="">
                            </div>
                            <div class="popup__select-title">Выберите наиболее удобный для Вас вариант связи:</div>
                            <div class="popup__select">
                                <div class="popup__select-item">
                                    <label class="popup__select-label">Электронная почта
                                        <input class="popup__select-input" type="radio" name="select" id="">
                                    </label>
                                </div>
                                <div class="popup__select-item">
                                    <label class="popup__select-label">Звонок
                                        <input class="popup__select-input" type="radio" name="select" id="">
                                    </label>
                                </div>
                                <div class="popup__select-item">
                                    <label class="popup__select-label">WhatsApp
                                        <input class="popup__select-input" type="radio" name="select" id="">
                                    </label>
                                </div>
                            </div>
                            <a href="" class="popup__link btn popup-accepted">Отправить запрос</a>
                        </form>
                    </div>
                    <div class="popup__content-wrap-right">
                        <img class="popup__img" src="<?php echo IMG_DIR; ?>popap__img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POPAP-ACCEPTED ACCEPTED -->
    <div class="accepted">
        <div class="accepted__body">
            <div class="accepted__content">
                <a href="##" class="accepted__close close-popup">
                    <img class="accepted__close-img" src="<?php echo IMG_DIR; ?>popap-close.svg" alt="">
                </a>
                <a href="" class="accepted__logo">
                    <img class="accepted__logo-img" src="<?php echo IMG_DIR; ?>logo.svg" alt="">
                </a>
                <div class="accepted__title">Ваша заявка принята</div>
                <div class="accepted__subtitle">Мы свяжемся с вами в ближайшее время</div>
            </div>
        </div>
    </div>




    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


    <!-- <script src="./assets/js/script.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>