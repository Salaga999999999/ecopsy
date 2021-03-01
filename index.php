<?php session_start()?>
<!DOCTYPE html>
<html lang="ru">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <meta charset="UTF-8">

    <title>Главная</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <meta property="og:title" content="Главная">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">

    <!--<link rel="shortcut icon" href="./favicon.png">-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!--<link rel="preload" href="/fonts/.woff2" as="font" crossorigin type="font/woff2">-->
    <link rel="stylesheet" href="./css/vendor.css?v=1607584161661">
    <link rel="stylesheet" href="./css/app.css?v=1607584161661">
</head>
<body>



<?php include "includes/header.php"?>


<!--<div class="authors-wrap" id="js-authors">-->
<!--    <div class="authors">-->
<!--        <div class="authors__items">-->
<!--            -->
<!--        </div>-->
<!--        <button class="authors__close btn _close" type="button"></button>-->
<!--    </div>-->
<!--</div>-->


    <main class="main" id="js-main">
        <div class="hero-banner">
            <div class="hero-slider" id="js-hero-slider">


                    <article class="hero-slider__slide">
                        <picture class="hero-slider__img">
                            <source srcset="./i/c/hero-slide-1.jpg" media="(min-width: 768px)">
                            <img src="./i/c/hero-slide-mobile-1.jpg" alt="">
                        </picture>
                        <div class="hero-slider__content">
                            <div class="hero-slider__text-wrap">
                                <h2 class="hero-slider__title">Оцените уровень регулярного&nbsp;<br>
 менеджмента&nbsp;и вовлеченность&nbsp;<br>
 руководителей&nbsp;в развитие&nbsp;<br>
 бизнес-системы</h2>
                                <div class="hero-slider__text">
                                    <p>Первое всероссийское исследование</p>
                                </div>
                            </div>
                            <a href="#" class="btn _link-arrow _white">Читать</a>
                        </div>
                    </article>

                    <article class="hero-slider__slide">
                        <picture class="hero-slider__img">
                            <source srcset="./i/c/hero-slide-1.jpg" media="(min-width: 768px)">
                            <img src="./i/c/hero-slide-mobile-1.jpg" alt="">
                        </picture>
                        <div class="hero-slider__content">
                            <div class="hero-slider__text-wrap">
                                <h2 class="hero-slider__title">Оцените уровень регулярного&nbsp;<br>
 менеджмента&nbsp;и вовлеченность&nbsp;<br>
</h2>
                                <div class="hero-slider__text">
                                    <p>Первое всероссийское исследование</p>
                                </div>
                            </div>
                            <a href="#" class="btn _link-arrow _white">Читать</a>
                        </div>
                    </article>

                    <article class="hero-slider__slide">
                        <picture class="hero-slider__img">
                            <source srcset="./i/c/hero-slide-1.jpg" media="(min-width: 768px)">
                            <img src="./i/c/hero-slide-mobile-1.jpg" alt="">
                        </picture>
                        <div class="hero-slider__content">
                            <div class="hero-slider__text-wrap">
                                <h2 class="hero-slider__title">Оцените уровень регулярного&nbsp;<br>
</h2>
                                <div class="hero-slider__text">
                                    <p>Первое всероссийское исследование</p>
                                </div>
                            </div>
                            <a href="#" class="btn _link-arrow _white">Читать</a>
                        </div>
                    </article>

            </div>

            <div class="ecopsy-numbers">
                <span class="ecopsy-numbers__title">Экопси в цифрах</span>

                <div class="slider-controls _white">
                    <button type="button" class="slider-controls__prev"></button>
                    <button type="button" class="slider-controls__next"></button>
                </div>

                <div class="ecopsy-numbers__items" id="js-ecopsy-numbers">
                    <div class="ecopsy-numbers__item"><b>1</b> место в&nbsp;рейтинге</div>
                    <div class="ecopsy-numbers__item"><b>120</b> консультантов</div>
                    <div class="ecopsy-numbers__item"><b>30</b> лет на&nbsp;рынке</div>
                    <div class="ecopsy-numbers__item"><b>498</b> проектов в&nbsp;год</div>
                </div>

                <a href="about.html" class="btn _link-arrow _white">Подробнее о компании</a>
            </div>
        </div>

        <div class="container">
            <div class="decisions" id="js-decisions">
                <div class="decisions__text">
                    <h3>Подберем оптимальное решение для вашего бизнеса</h3>
                </div>

                <form action="/ajax/decisions.php" method="get" class="decisions__test">


                    <div class="decisions__test-step _active">
                        <div class="decisions__test-title">
                            Какую задачу вы хотите решить?
<!--                            <span class="_count">Вопрос</span>-->
                        </div>

                        <div class="decisions__test-questions">

                                <input type="radio" class="decisions__test-question-btn" value="0" name="decision-question-1"><label class="btn _transparent">Обучение и развитие людей</label>

                                <input type="radio" class="decisions__test-question-btn" value="1" name="decision-question-1"><label class="btn _transparent">Оценка людей</label>

                                <input type="radio" class="decisions__test-question-btn" value="2" name="decision-question-1"><label class="btn _transparent">Разработка HR-систем</label>

                                <input type="radio" class="decisions__test-question-btn" value="3" name="decision-question-1"><label class="btn _transparent">Работа с мнениями и отношениями людей</label>

                                <input type="radio" class="decisions__test-question-btn" value="4" name="decision-question-1"><label class="btn _transparent">Разработка HR-систем</label>

                                <input type="radio" class="decisions__test-question-btn" value="5" name="decision-question-1"><label class="btn _transparent">Оценка людей</label>

                                <input type="radio" class="decisions__test-question-btn" value="6" name="decision-question-1"><label class="btn _transparent">Бизнес-консалтинг</label>

                                <input type="radio" class="decisions__test-question-btn" value="7" name="decision-question-1"><label class="btn _transparent">SuccessFactors</label>

                                <input type="radio" class="decisions__test-question-btn" value="8" name="decision-question-1"><label class="btn _transparent">Обучение и развитие людей</label>

                                <input type="radio" class="decisions__test-question-btn" value="9" name="decision-question-1"><label class="btn _transparent">Оценка людей</label>

                                <input type="radio" class="decisions__test-question-btn" value="10" name="decision-question-1"><label class="btn _transparent">Разработка HR-систем</label>

                        </div>
                    </div>

<!--                    <div class="decisions__test-step">-->
<!--                        <div class="decisions__test-title">-->
<!--                            Что нужно вашему бизнесу?-->
<!--                            <span class="_count">Вопрос 2 из 2</span>-->
<!--                        </div>-->

<!--                        <div class="decisions__test-questions">-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="0" name="decision-question-2"><label class="btn _transparent">Обучение и развитие людей</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="1" name="decision-question-2"><label class="btn _transparent">Оценка людей</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="2" name="decision-question-2"><label class="btn _transparent">Разработка HR-систем</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="3" name="decision-question-2"><label class="btn _transparent">Работа с мнениями и отношениями людей</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="4" name="decision-question-2"><label class="btn _transparent">Разработка HR-систем</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="5" name="decision-question-2"><label class="btn _transparent">Оценка людей</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="6" name="decision-question-2"><label class="btn _transparent">Бизнес-консалтинг</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="7" name="decision-question-2"><label class="btn _transparent">SuccessFactors</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="8" name="decision-question-2"><label class="btn _transparent">Обучение и развитие людей</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="9" name="decision-question-2"><label class="btn _transparent">Оценка людей</label>-->
<!--                            -->
<!--                                <input type="radio" class="decisions__test-question-btn" value="10" name="decision-question-2"><label class="btn _transparent">Разработка HR-систем</label>-->
<!--                            -->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="decisions__test-answer">
                        <div class="decisions__test-title">
                            Вам подходят следующие предложения:

                            <button type="button" class="decisions__test-back btn _link-arrow _back">Назад</button>
                        </div>

                        <div class="decisions__test-answer-items"></div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="container__head">
                <h3 class="container__title">Популярные инсайты</h3>

                <div class="container__links">
                    <a href="insights.html" class="btn _link-arrow">Все инсайты</a>
                </div>

                <div class="slider-controls _tablet-only _grey">
                    <button type="button" class="slider-controls__prev"></button>
                    <button type="button" class="slider-controls__next"></button>
                </div>
            </div>
            <div class="container__content">
                <div class="cards js-mobile-cards">



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/11.jpg" alt="Даниил Мартыненко">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>описание подхода</span>
                <span> 18.06.19 </span>
            </span>
            <h4>Switch — тесты способностей нового поколения</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span>Даниил Мартыненко</span>
        </span>

        <span class="card-article__icon ">
            <svg class="_icon-article-type-video"><use xlink:href="./i/sprite.svg#article-type-video"></use></svg>


        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/12.jpg" alt="Даниил Мартыненко">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>HRtimes</span>
                <span> №23 март 2018 </span>
            </span>
            <h4>Культурная эволюция</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span><span class="btn _link-arrow">Читать</span></span>
        </span>

        <span class="card-article__icon ">
            <svg class="_icon-article-type-text"><use xlink:href="./i/sprite.svg#article-type-text"></use></svg>


        </span>

    </a>



    <a href="#"
       class="card-article"

        style="background-image: url(./i/c/cards/13.jpg)"
    >

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Вебинар</span>

            </span>
            <h4>Меньше временных затрат — больше результат: как сократить трудоемкось работы с отчетностью. Методика TIME</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span>Даниил Мартыненко</span><span>Ирина Самойлова (Сироткина)</span>
        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/12.jpg" alt="Даниил Мартыненко">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>HRtimes</span>
                <span> №23 март 2018 </span>
            </span>
            <h4>Культурная эволюция</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span>Даниил Мартыненко</span>
        </span>

        <span class="card-article__icon ">
            <svg class="_icon-article-type-video"><use xlink:href="./i/sprite.svg#article-type-video"></use></svg>


        </span>

    </a>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="container__head">
                <h3 class="container__title">Мероприятия</h3>

                <div class="container__links">
                    <a href="events.html" class="btn _link-arrow">Все мероприятия</a>
                </div>

                <div class="slider-controls _tablet-only _grey">
                    <button type="button" class="slider-controls__prev"></button>
                    <button type="button" class="slider-controls__next"></button>
                </div>
            </div>

            <div class="container__content">
                <div class="cards js-mobile-cards">



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/2.jpg" alt="Вебинар">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Вебинар</span>

            </span>
            <h4>Switch — тесты способностей нового поколения</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span><span class="btn _link-arrow">Регистрация</span></span>
        </span>

        <span class="card-article__icon  _date ">

            <span>09</span><span>авг</span>
        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/22.jpg" alt="Мастер-класс">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Мастер-класс</span>

            </span>
            <h4>Культурная эволюция</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span><span class="btn _link-arrow">Регистрация</span></span>
        </span>

        <span class="card-article__icon  _date ">

            <span>13</span><span>авг</span>
        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/23.jpg" alt="Даниил Мартыненко">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Вебинар</span>

            </span>
            <h4>Switch — тесты способностей нового поколения</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span><span class="btn _link-arrow">Регистрация</span></span>
        </span>

        <span class="card-article__icon  _date ">

            <span>22</span><span>авг</span>
        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/24.jpg" alt="Даниил Мартыненко">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Вебинар</span>

            </span>
            <h4>Switch — тесты способностей нового поколения</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span><span class="btn _link-arrow">Регистрация</span></span>
        </span>

        <span class="card-article__icon  _date ">

            <span>18</span><span>сен</span>
        </span>

    </a>



                </div>
            </div>
        </div>

        <div class="container _mobile-full-width">
            <div class="container__content">
                <div class="cards">
                    <div class="card-contact">
    <div class="card-contact__info">
        <h3>Карьера</h3>
        <p>Мы даём возможность самореализоваться самым ярким и нестандартно мыслящим людям</p>
    </div>
    <a href="career.html" class="btn _default _primary">Открытые вакансии</a>
</div>
<div class="card-contact" style="background-image: linear-gradient(243.37deg, #7998B4 0%, #17416E 100%);">
    <div class="card-contact__info">
        <h3>Мы на связи</h3>
        <p>Мы будем рады помочь вам с решением любого вопроса</p>
    </div>
    <a href="contacts.html" class="btn _default _primary">Связаться с нами</a>
</div>

                </div>
            </div>
        </div>

    </main>

    <footer class="footer _dark-bg" id="js-footer">
    <div class="footer__subscribe-wrap">
        <div class="footer__subscribe-content">
            <div class="subscribe" id="js-subscribe">
                <div class="subscribe__text">
                    <p>Дайджест инсайтов. Подпишитесь и получайте рекомендации самых интересных материалов еженедельно.</p>
                </div>

                <form action="/" method="get" class="subscribe__form js-form" data-form-name="subscribe1">
                    <div class="subscribe__form-controls">

                        <div class="field ">
    <input type="email" name="email" required><label>E-mail*</label>



</div>

                        <button type="submit" class="btn _default _primary">Подписаться на новости</button>
                    </div>

                    <div class="checkbox">
                        <input id="subscribe-check" type="checkbox" name="rules" required checked />
                        <label for="subscribe-check">Ваше согласие с <a href="#" target="_blank">Политикой обработки персональных данных</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include "includes/footer-nav.php"?>

    <div class="footer__info-wrap">
        <div class="footer__info-content">
            <div class="footer__partner">
                <span>Резидент</span>
                <a href="#" target="_blank"><svg class="_icon-skolkovo"><use xlink:href="./i/sprite.svg#skolkovo"></use></svg>
</a>
            </div>

            <div class="footer__info">
                <div class="footer__contacts">
                    <address>127015, Москва, ул. Новодмитровская, 2к1,  17 этаж, БЦ "Савеловский Сити"</address>

                    <div class="footer__tel">
                        <a href="tel:+74956452115">+7 (495) 645-21-15</a>,
                        <a href="tel:+74956450040">+7 (495) 645-00-40</a>
                    </div>

                    <a href="mailto:info@ecopsy.ru" class="footer__email">info@ecopsy.ru</a>
                </div>

                <div class="footer__policy-copyright _desktop-only">
                    <a href="policy.pdf" target="_blank" class="footer__policy">Политика конфиденциальности</a>
                    <span class="footer__copyright">© 2019 Экопси Консалтинг</span>
                </div>
            </div>

            <div class="footer__soc">
                <a href="#" target="_blank" class="_fb">
                    <svg class="_icon-footer-fb"><use xlink:href="./i/sprite.svg#footer-fb"></use></svg>

                </a>
                <a href="#" target="_blank" class="_in">
                    <svg class="_icon-footer-in"><use xlink:href="./i/sprite.svg#footer-in"></use></svg>

                </a>
                <a href="#" target="_blank" class="_yt">
                    <svg class="_icon-footer-yt"><use xlink:href="./i/sprite.svg#footer-yt"></use></svg>

                </a>
                <a href="#" target="_blank" class="_vk">
                    <svg class="_icon-footer-vk"><use xlink:href="./i/sprite.svg#footer-vk"></use></svg>

                </a>
            </div>

            <div class="footer__policy-copyright _tablet-only">
                <a href="policy.pdf" target="_blank" class="footer__policy">Политика конфиденциальности</a>
                <span class="footer__copyright">© 2019 Экопси Консалтинг</span>
            </div>

            <div class="footer__pinkman"><a href="https://pinkman.ru/" target="_blank">Сделано в PINKMAN <svg class="_icon-pinkman"><use xlink:href="./i/sprite.svg#pinkman"></use></svg>
</a></div>
        </div>
    </div>
</footer>



<div class="popup _subscribe" id="subscribe">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Подписка на рассылку</h3>
                <span class="popup__info">Выберите темы и напрвления деятельности, чтобы получать уведомелния о новых инсайтах ЭКОПСИ.</span>
            </div>

<form action="./ajax/form.php" method="get" class="form js-form" data-form-name="subscribe2">
    <div class="form__top">

        <div class="field  _select2">




        <select name="tema[]" class="js-multiselect" multiple placeholder="Тема" required>

            <option value="1">Обучение и развитие людейОбучение и развитие людейОбучение и развитие людей</option>

            <option value="2">Обучение и развитие людей</option>

            <option value="3">Обучение и развитие людей</option>

            <option value="4">Обучение и развитие людей</option>

        </select>

</div>


        <div class="field  _select2">




        <select name="tema[]" class="js-multiselect" multiple placeholder="Ваше направление деятельности" required>

            <option value="1">Обучение и развитие людей</option>

            <option value="2">Обучение и развитие людей</option>

            <option value="3">Обучение и развитие людей</option>

            <option value="4">Обучение и развитие людей</option>

        </select>

</div>


        <div class="form__errors"></div>
    </div>
    <div class="form__bottom">
        <button type="submit" class="btn _default _primary">Подписаться</button>

        <div class="checkbox">
            <input id="subscribe-check0" type="checkbox" name="rules" required checked />
            <label for="subscribe-check0">Ваше согласие с <a href="#" target="_blank">Политикой конфиденциальности</a></label>
        </div>


    </div>
    <div class="form__hidden-inputs">

    </div>
</form>

        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>


<div class="popup _thank" id="thank">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Спасибо!</h3>
                <span class="popup__info">Наши специалисты свяжутся с вами при первой возможности</span>
            </div>

        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>


<div class="popup _services" id="services">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Связаться с нами</h3>

            </div>

<form action="./ajax/form.php" method="get" class="form js-form" data-form-name="services">
    <div class="form__top">

        <div class="field ">
    <input type="text" name="name" required><label>Имя</label>



</div>


        <div class="field ">
    <input type="text" name="surname" required><label>Фамилия</label>



</div>


        <div class="field ">
    <input type="text" name="company" required><label>Компания</label>



</div>


        <div class="field ">
    <input type="text" name="position" required><label>Должность</label>



</div>


        <div class="field ">
    <input type="text" name="tel" required><label>Телефон</label>



</div>


        <div class="field ">
    <input type="email" name="e-mail" required><label>E-mail</label>



</div>


        <div class="field  _select">



    <select name="tema" id="" required>
        <option value="" placeholder>Тема сообщения</option>

            <option value="1">Обучение и развитие людей</option>

            <option value="2">Обучение и развитие людей</option>

            <option value="3">Обучение и развитие людей</option>

            <option value="4">Обучение и развитие людей</option>

    </select>


</div>


        <div class="field  _textarea">

    <textarea name="message" required></textarea><label>Ваше сообщение</label>


</div>


        <div class="form__errors"></div>
    </div>
    <div class="form__bottom">
        <button type="submit" class="btn _default _primary">Связаться</button>

        <div class="checkbox">
            <input id="subscribe-check1" type="checkbox" name="rules" required checked />
            <label for="subscribe-check1">Ваше согласие с <a href="#" target="_blank">Политикой конфиденциальности</a></label>
        </div>


    </div>
    <div class="form__hidden-inputs">

    </div>
</form>

        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>


<div class="popup _save-release" id="save-release">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Cкачать выпуск HRTimes</h3>

            </div>

<form action="./ajax/form.php" method="get" class="form js-form" data-form-name="save-release">
    <div class="form__top">

        <div class="field ">
    <input type="text" name="name" required><label>Имя</label>



</div>


        <div class="field ">
    <input type="text" name="surname" required><label>Фамилия</label>



</div>


        <div class="field ">
    <input type="text" name="company" required><label>Компания</label>



</div>


        <div class="field ">
    <input type="text" name="position" required><label>Должность</label>



</div>


        <div class="field ">
    <input type="email" name="e-mail" required><label>E-mail</label>



</div>


        <div class="field ">
    <input type="text" name="tel" required><label>Телефон</label>



</div>


        <div class="form__errors"></div>
    </div>
    <div class="form__bottom">
        <button type="submit" class="btn _default _primary">Скачать выпуск HRTimes</button>

        <div class="checkbox">
            <input id="subscribe-check2" type="checkbox" name="rules" required checked />
            <label for="subscribe-check2">Подписаться на рассылку ЭКОПСИ</label>
        </div>

        <div class="checkbox">
            <input id="subscribe-check3" type="checkbox" name="rules" required checked />
            <label for="subscribe-check3">Ваше согласие с <a href="#" target="_blank">Политикой конфиденциальности</a></label>
        </div>


    </div>
    <div class="form__hidden-inputs">

            <input type="hidden" name="hrtimes-id" class="">

    </div>
</form>

        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>


<div class="popup _event-reg" id="event-reg">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Регистрация на мероприятие</h3>

            </div>

<form action="./ajax/form.php" method="get" class="form js-form" data-form-name="event-reg">
    <div class="form__top">

        <div class="field ">
    <input type="text" name="name" required><label>Имя</label>



</div>


        <div class="field ">
    <input type="text" name="surname" required><label>Фамилия</label>



</div>


        <div class="field ">
    <input type="text" name="company" required><label>Компания</label>



</div>


        <div class="field ">
    <input type="text" name="position" required><label>Должность</label>



</div>


        <div class="field ">
    <input type="email" name="e-mail" required><label>E-mail</label>



</div>


        <div class="field ">
    <input type="text" name="tel" required><label>Телефон</label>



</div>


        <div class="form__errors"></div>
    </div>
    <div class="form__bottom">
        <button type="submit" class="btn _default _primary">Зарегистрироваться</button>

        <div class="checkbox">
            <input id="subscribe-check2" type="checkbox" name="rules" required checked />
            <label for="subscribe-check2">Подписаться на рассылку ЭКОПСИ</label>
        </div>

        <div class="checkbox">
            <input id="subscribe-check3" type="checkbox" name="rules" required checked />
            <label for="subscribe-check3">Ваше согласие с <a href="#" target="_blank">Политикой конфиденциальности</a></label>
        </div>


    </div>
    <div class="form__hidden-inputs">

            <input type="hidden" name="id-event" class="data-id">

            <input type="hidden" name="title-event" class="data-title">

    </div>
</form>

        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>


<div class="popup _consultation" id="consultation">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Консультант / Менеджер проектов в области HR&#8209;маркетинга</h3>

            </div>

<form action="./ajax/form.php" method="get" class="form js-form" data-form-name="consultation">
    <div class="form__top">

        <div class="field ">
    <input type="text" name="surname" required><label>Фамилия</label>



</div>


        <div class="field ">
    <input type="text" name="name" required><label>Имя</label>



</div>


        <div class="field ">
    <input type="text" name="tel" required><label>Телефон</label>



</div>


        <div class="field ">
    <input type="email" name="e-mail" required><label>E-mail</label>



</div>


        <div class="field  _textarea">

    <textarea name="message" required></textarea><label>Сопроводительное письмо</label>


</div>


        <div class="form__errors"></div>
    </div>
    <div class="form__bottom">
        <button type="submit" class="btn _default _primary">Отправить</button>

        <div class="checkbox">
            <input id="subscribe-check5" type="checkbox" name="rules" required checked />
            <label for="subscribe-check5">Ваше согласие<br/> с <a href="#" target="_blank">Политикой конфиденциальности</a></label>
        </div>

        <div class="file js-file">
    <input type="file" name="file" id="file-1" required>
    <label for="file-1">Прикрепить резюме</label>
    <svg class="_icon-clip"><use xlink:href="./i/sprite.svg#clip"></use></svg>

    <a href="#" class="btn _clear"></a>
</div>

    </div>
    <div class="form__hidden-inputs">

            <input type="hidden" name="title-vacancy" class="">

    </div>
</form>

        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>



<div class="popup _subscription" id="subscription">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__head">
                <h3 class="popup__title">Подписка на рассылку</h3>
                <span class="popup__info">Введите ваш E-mail, чтобы начать получать уведомления о новых инсайтах ЭКОПСИ.</span>
            </div>
            <form action="./ajax/form.php" class="form js-form" data-form-name="subscription">
                <div class="form__top">
                    <span>Шаг 1: Контактные данные</span>

                    <div class="field ">
    <input type="email" name="e-mail" required><label>E-mail</label>



</div>

                    <button type="submit" class="btn _default _primary">Далее</button>
                </div>
            </form>
        </div>
        <div class="popup__content">
            <div class="popup__head">
                <span class="popup__info">Выберите темы и направления деятельности</span>
            </div>
            <form action="./ajax/form.php" class="form js-form" data-form-name="subscription2">
                <div class="form__top">
                    <span>Шаг 2:  Темы и направления</span>

                    <div class="field  _select2">




        <select name="tema1[]" class="js-multiselect" multiple placeholder="Тема" required>

            <option value="1">Обучение и развитие людейОбучение и развитие людейОбучение и развитие людей</option>

            <option value="2">Обучение и развитие людей</option>

            <option value="3">Обучение и развитие людей</option>

            <option value="4">Обучение и развитие людей</option>

        </select>

</div>

                    <div class="field  _select2">




        <select name="tema2[]" class="js-multiselect" multiple placeholder="Ваше направление деятельности" required>

            <option value="1">Обучение и развитие людей</option>

            <option value="2">Обучение и развитие людей</option>

            <option value="3">Обучение и развитие людей</option>

            <option value="4">Обучение и развитие людей</option>

        </select>

</div>

                </div>
                <div class="form__bottom">
                    <button type="submit" class="btn _default _primary">Подписаться</button>
                        <div class="checkbox">
                            <input id="subscribe-check12" type="checkbox" name="rules" required checked />
                            <label for="subscribe-check12">Ваше согласие с <a href="#" target="_blank">Политикой обработки персональных данных</a></label>
                        </div>
                </div>
                <div class="form__hidden-inputs"></div>
            </form>
        </div>
        <div class="popup__content _info" data-index="info">
            <div class="popup__head">
                <h3 class="popup__title"></h3>
                <span class="popup__info"></span>
            </div>
        </div>
        <button type="button" class="btn _close"></button>
    </div>
</div>

<script src="./js/vendor.js?v=1607584161661"></script>
<script src="./js/svg4everybody.min.js"></script>
<script>svg4everybody();</script>
<script src="./js/app.js?v=1607584161661"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcDfMIUAAAAAC9Xc7rTpiuQ3YdHwOb2qq-_5YuW"></script>
<script>
    var action = 'homepage';
    var forms = document.getElementsByClassName('js-form');
    var updateHiddenInputs = function(form, inputs) {
        inputs.forEach(function (inputObject) {
            var hiddenRecaptchaInput = form.querySelector('[name="' + inputObject.name + '"]')

            if (hiddenRecaptchaInput !== null && hiddenRecaptchaInput.parentElement !== null) {
                hiddenRecaptchaInput.value = inputObject.value;
            } else {
                hiddenRecaptchaInput = document.createElement('input')
                hiddenRecaptchaInput.type = 'hidden';
                hiddenRecaptchaInput.name = inputObject.name;
                hiddenRecaptchaInput.value = inputObject.value;
                form.appendChild(hiddenRecaptchaInput);
            }
        });
    }

    window.updateRecaptcha = function() {
        grecaptcha.execute('6LcDfMIUAAAAAC9Xc7rTpiuQ3YdHwOb2qq-_5YuW', { action: action }).then(function(token) {
            [].forEach.call(forms, function (form) {
                updateHiddenInputs(form, [
                    {
                        name: 'recaptcha_token',
                        value: token
                    },
                    {
                        name: 'recaptcha_action',
                        value: action
                    }
                ])
            })
        });
    }

    grecaptcha.ready(window.updateRecaptcha);
</script>


</body>
</html>

