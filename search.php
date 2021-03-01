<?php session_start()?>
<!DOCTYPE html>
<html lang="ru">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <meta charset="UTF-8">

    <title>Поиск</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <meta property="og:title" content="Инсайты">
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
    <div class="page">
        <header class="page__header _inline">
            <div class="page__header-content">
                <h1 class="page__title">Результат поиска<br></h1>
            </div>
        </header>

        <div class="container">
            <div class="container__content js-apply-filter">


                <div class="cards _articles _less-4-3">


    <?php
        $search_items = mysqli_query($connection, "SELECT * FROM `articles` WHERE `title` LIKE '%".$_GET["search"]."%'");
        /*$categories_t = mysqli_query($connection, "SELECT * FROM `categorie`");
        $categories = array();
        while($categories_item = mysqli_fetch_assoc($categories_q))
        {

            $categories[] = $categories_item;
        }*/

        while($search_item = mysqli_fetch_assoc($search_items))
        {
        ?>
            <a href="<?php if (isset($_SESSION["admin"]))
                {
                    echo "change_article.php?id=" . $search_item["id"];
                }
                else {echo "article.php?id=" . $search_item["id"];}
            ?>" class="card-article">
        <span class="card-article__wrap-img">
            <img src="<?php echo $search_item["img"];//нужно добавить альт в дб?>">
        </span>
        <span class="card-article__info">
            <span class="card-article__info-top">
                <?php $categories = mysqli_query($connection, "SELECT * FROM `categorie` WHERE `id` LIKE " . $search_item["categorie"]);
                $categories_name = mysqli_fetch_assoc($categories);//кривой костыль?>
                <span><?php echo $categories_name["name"]?></span>
                <span><?php echo $search_item["date"];?></span>
            </span>
            <h4><?php echo $search_item["title"];?></h4>
            <p><?php echo $search_item["text"];?></p>
        </span>
        <span class="card-article__bottom-line">
            <span><span class="btn _link-arrow">Читать</span></span>
        </span>
        <span class="card-article__icon ">
            <svg class="_icon-article-type-text"><use xlink:href="./i/sprite.svg#article-type-text"></use></svg>
        </span>
    </a>
        <?php
        }
        ?>
        <a href="#"class="card-article">
        <span class="card-article__wrap-img">
            <img src="./i/c/hero-slide-1.jpg" alt="Даниил Мартыненко">
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
    </a>






<div class="card-article sidebar__themes">
    <p class="sidebar__themes-title">Интересные темы</p>

    <div class="sidebar__theme">
        <div class="sidebar__theme-top">
            <span>описание подхода</span>
            <span>18.06.19</span>
        </div>
        <a class="sidebar__theme-title">Switch — тесты способностей нового поколения</a>


            <a href="#" class="sidebar__theme-link">Даниил Мартыненко</a>

    </div>

    <div class="sidebar__theme">
        <div class="sidebar__theme-top">
            <span>hrtimes</span>
            <span>№23 март 2018</span>
        </div>
        <a class="sidebar__theme-title">Культурная эволюция</a>


            <a href="#" class="btn _link-arrow sidebar__theme-link">Читать</a>

    </div>

    <div class="sidebar__theme">
        <div class="sidebar__theme-top">
            <span>статья</span>
            <span>18.06.19</span>
        </div>
        <a class="sidebar__theme-title">Как развивать
и укреплять культуру ответственности в своей команде?</a>


            <a href="#" class="sidebar__theme-link">Даниил Мартыненко</a>

    </div>

</div>




    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/hero-slide-1.jpg" alt="Даниил Мартыненко">
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
            <span><span class="btn _link-arrow">Читать</span></span>
        </span>

        <span class="card-article__icon ">
            <svg class="_icon-article-type-text"><use xlink:href="./i/sprite.svg#article-type-text"></use></svg>


        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/11.jpg" alt="Даниил Мартыненко">
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

        <div class="container _wrap-form" style="background-image: linear-gradient(248.95deg, #7998B4 0%, #17416E 100%);">

            <div class="container__head">
                <h3 class="container__title">Желаете продолжить общение?</h3>
                <p>Мы помогаем HR-специалистам и владельцам бизнеса подбирать только лучшие решения</p>
            </div>

            <div class="container__content">

<form action="ajax/form.php" method="get" class="form js-form" data-form-name="default">
    <div class="form__top">
        <div class="field ">
            <input type="email" name="email" required><label>E-mail*</label>
        </div>
        <div class="field ">
            <input type="text" name="tel" required><label>Телефон</label>
        </div>
        <div class="field ">
            <input type="text" name="name" required><label>Имя</label>
        </div>
        <div class="field ">
            <input type="text" name="surname" required><label>Фамилия</label>
        </div>
        <div class="field  _textarea">
            <textarea name="message" required></textarea><label>Ваше сообщение</label>
        </div>
        <div class="form__errors"></div>
    </div>
    <div class="form__bottom">
        <button type="submit" class="btn _default _primary" name="do_post">Связаться с нами</button>
        <div class="checkbox">
            <input id="subscribe-check-form" type="checkbox" name="rules" required checked />
            <label for="subscribe-check-form">Ваше согласие с <a href="#" target="_blank">Политикой конфиденциальности</a></label>
        </div>
    </div>
    <div class="form__hidden-inputs">
    </div>
</form>


</div>
        </div>

        <div class="container">
            <div class="container__content js-apply-filter">


                <div class="cards _articles _less-4-3">


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
            <img src="./i/c/hero-slide-1.jpg" alt="Всеволод Иоффе">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Статья</span>
                <span> 18.06.19 </span>
            </span>
            <h4>Как развивать и&nbsp;укреплять культуру ответственности в&nbsp;своей команде?</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span>Всеволод Иоффе</span>
        </span>

    </a>



    <a href="#"
       class="card-article"


    >

        <span class="card-article__wrap-img">
            <img src="./i/c/cards/1.jpg" alt="Даниил Мартыненко">
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
            <img src="./i/c/hero-slide-1.jpg" alt="Всеволод Иоффе">
        </span>

        <span class="card-article__info">
            <span class="card-article__info-top">
                <span>Статья</span>
                <span> 18.06.19 </span>
            </span>
            <h4>Как развивать и&nbsp;укреплять культуру ответственности в&nbsp;своей команде?</h4>
            <p>Российские и зарубежные компании ценят в менеджерах совершенно разные качества</p>
        </span>
        <span class="card-article__bottom-line">
            <span>Всеволод Иоффе</span>
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
            <span><span class="btn _link-arrow">Читать</span></span>
        </span>

        <span class="card-article__icon ">
            <svg class="_icon-article-type-text"><use xlink:href="./i/sprite.svg#article-type-text"></use></svg>


        </span>

    </a>



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



                </div>

                <div class="container__show-more-cards">
                    <a href="/ajax/articles.php?PAGEN_1=0" class="btn _default _primary _insights js-show-more-cards">Показать еще</a>
                </div>
            </div>
        </div>

        <div class="container _background _without-margin _insights" style="background-image: url('/i/c/bg/journal-bg.jpg')">
            <div class="container__content">
                <p>статья <span>18.06.19</span></p>
                <h2>Как сократить трудоемкость работы с&nbsp;отчетностью?
                    Расскажем</h2>

                <div class="container__content-bottom">
                    <a href="#" class="btn _link-arrow">Читать</a>
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

    <div class="footer__nav-wrap">
        <div class="footer__nav-content">
            <div class="footer__nav-column">
                <div class="footer__nav-list">
                    <a href="#" class="footer__nav-large-link">Услуги</a>

                    <nav>
                        <a href="http://localhost:3000/services-learning-first.html#container-4">Обучение и развитие людей</a>
                        <a href="#">Оценка людей</a>
                        <a href="#">Разработка HR-систем</a>
                        <a href="#">Бизнес-консалтинг</a>
                        <a href="#">SuccessFactors</a>
                        <a href="#">Работа с мнениями и&nbsp;отношениями людей </a>
                    </nav>
                </div>
            </div>

            <div class="footer__nav-column">
                <div class="footer__nav-list">
                    <a href="#" class="footer__nav-large-link">Инсайты</a>

                    <nav>
                        <a href="#">Описание подхода</a>
                        <a href="#">Кейс</a>
                        <a href="#">Обзорная статья</a>
                        <a href="#">HRTimes</a>
                    </nav>
                </div>
            </div>

            <div class="footer__nav-column">
                <div class="footer__nav-list">
                    <a href="#" class="footer__nav-large-link">О компании</a>

                    <nav>
                        <a href="#">ЭКОПСИ. Цифры и факты</a>
                        <a href="#">Клиенты</a>
                        <a href="#">О компании</a>
                        <a href="#">Партнеры</a>
                        <a href="#">Управленческая команда</a>
                        <a href="#">Библиотека ЭКОПСИ</a>
                    </nav>
                </div>
            </div>

            <div class="footer__nav-column">
                <div class="footer__nav-list">
                    <a href="#" class="footer__nav-large-link">Карьера</a>

                    <nav>
                        <a href="#">Карьера в ЭКОПСИ</a>
                        <a href="#">Интервью с сотрудниками</a>
                        <a href="#">Как стать сотрудником</a>
                        <a href="#">Вакансии</a>
                    </nav>
                </div>
            </div>
        </div>

        <nav class="footer__large-navs">
            <a href="#" class="footer__nav-large-link">Мероприятия</a>
            <a href="#" class="footer__nav-large-link">Контакты</a>
            <a href="#" class="footer__nav-large-link js-popup-open" data-popup="#subscription">Подписаться на новости</a>
        </nav>
    </div>

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

