<?php
    include "db.php";
?>
<header class="header" id="js-header">
    <div class="header__row _content">
        <div class="header__row-content">
            <a href="index.php" class="logo _desktop">
                <svg class="_icon-logo-desktop"><use xlink:href="./i/sprite.svg#logo-desktop"></use></svg>

                <b>Бизнес делают люди</b>
            </a>

            <div class="header__menu-wrap">
                <nav class="header__menu" id="js-header-menu">
                <?php
                    $header_items = mysqli_query($connection, "SELECT * FROM `header_menu_items`");
                    while($header_item = mysqli_fetch_assoc($header_items))
                    {

                        echo "<a href='" . $header_item["ENG"].".php' id='" . $header_item["id_html"] . "' >". $header_item["RUS"] . "</a>";
                    }
                    ?>
                    <a href="#" class="_subscribe js-popup-open" data-popup="#subscription">Подписаться</a>
                </nav>

                <button type="button" id="js-lang-btn" class="header__lang">RUS/ENG</button>

                <button type="button" id="js-search-btn" class="header__search-btn"><svg class="_icon-search"><use xlink:href="./i/sprite.svg#search"></use></svg>
</button>
<?php
        if (isset($_SESSION["admin"]))
        {
            echo "<a href='../logout.php'>    выйти</a>";
        }
        else {echo "<a href='../login.php'>    войти</a>";}
    ?>
            </div>
        </div>
    </div>
</header>
<?php
        if (isset($_SESSION["admin"]))
        {
            echo "<a href='../add_services.php'>Добавить услугу</a>";
            echo "<a href='../add_solution.php'>Добавить предложение</a>";
            echo "<a href='../addarticle.php'>Добавить инсайт</a>";
        }
    ?>


<div class="header-mobile" id="js-header-mobile">
    <button type="button" id="js-mobile-search-btn" class="header-mobile__search-btn"><svg class="_icon-search"><use xlink:href="./i/sprite.svg#search"></use></svg>
</button>
    <a href="/index.html" class="header-mobile__logo">
        <svg class="_icon-logo-mobile"><use xlink:href="./i/sprite.svg#logo-mobile"></use></svg>

        <svg class="_icon-logo-desktop"><use xlink:href="./i/sprite.svg#logo-desktop"></use></svg>

    </a>
    <button type="button" class="header-mobile__menu-btn" id="js-mobile-menu-btn"><span class="crosshair"><i></i><i></i><i></i><i></i></span></button>
</div>

<div class="mobile-menu-wrap" id="js-mobile-menu">
    <div class="mobile-menu">
        <div class="mobile-menu__header">
            <a href="/index.html" class="mobile-menu__logo"><svg class="_icon-logo-desktop"><use xlink:href="./i/sprite.svg#logo-desktop"></use></svg>
</a>
            <button type="button" class="mobile-menu__goto-general-menu _back-btn _menu-arrow-left">Главное меню</button>
        </div>
        <div class="mobile-menu__content">
            <div class="mobile-menu__list-wrap">
                <div class="mobile-menu__sub-header">
                    <button type="button" class="mobile-menu__goto-services _back-btn _menu-arrow-left">Услуги</button>
                    <a href="services-hr.html" class="mobile-menu__goto-services-page _back-btn">Общая услуг</a>
                </div>
                <nav class="mobile-menu__list">
                    <a href="services.html" class="_services _menu-arrow-right ">Услуги</a>
                    <a href="insights.html">Инсайты</a>
                    <a href="events.html">Мероприятия</a>
                    <a href="about.html">О компании</a>
                    <a href="career.html">Карьера</a>
                    <a href="contacts.html">Контакты</a>
                    <button type="button" class="_subscribe js-popup-open" data-popup="#subscription">Подписаться на новости</button>
                    <button type="button" class="_search">Поиск <svg class="_icon-search"><use xlink:href="./i/sprite.svg#search"></use></svg>
</button>
                </nav>
            </div>
            <button type="button" id="js-mobile-lang-btn" class="mobile-menu__lang">RUS/ENG</button>

            <div class='mobile-menu__margin'>
                <span>aaa</span>
            </div>
        </div>
    </div>
    <button type="button" class="mobile-menu-wrap__close"><i class="btn _close"></i></button>
</div>


<div class="search-wrap" id="js-search">
    <form action="search.php" method="get" class="search" data-hints-url="./ajax/getSearchHints.php">
        <div class="search__field-wrap">
            <div class="search__field-content">
                <div class="search__field js-field">
                    <label>Введите для поиска...</label>
                    <input type="text" name="search" minlength="2" required />
                </div>
                <div class="search__controls">
                    <button type="button" class="search__close btn _close js-search-close"></button>
                    <button type="submit" class="search__submit"><svg class="_icon-search"><use xlink:href="./i/sprite.svg#search"></use></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="search__relative-results">
            <a href="#">культурная революция</a>
            <a href="#">тренды и технологии</a>
            <a href="#">оценка людей</a>
            <a href="#">новое поколение</a>
            <a href="#">культурная революция</a>
            <a href="#">тренды и технологии</a>
            <a href="#">оценка людей</a>
            <a href="#">новое поколение</a>
        </div>
    </form>
</div>
<div>


</div>
<div class="menu-wrap" id="js-menu-services">
    <div class="menu">


        <div class="menu__lists">
            <?php
            $menu_lists_items_parants = mysqli_query($connection, "SELECT * FROM `menu__lists` WHERE `parant_id` LIKE 0");//Тут нужно сделать бы алгоритм, который один раз заходит в бд, а потом уже из массива доставать элементы
            while($menu_lists_items_parant = mysqli_fetch_assoc($menu_lists_items_parants))
            {
                ?>
                <div class="menu__list-wrap">
                    <a href="<?php if(empty($menu_lists_items_parant["ENG"]))
                                    echo "#";
                                else if (isset($_SESSION["admin"]))
                                {
                                    echo "change_service.php?id=" . $menu_lists_items_parant["id"];
                                }
                                else {echo $menu_lists_items_parant["ENG"] . ".php";}
                                ?>" class="<?php echo $menu_lists_items_parant["html_class"];?>"><?php echo $menu_lists_items_parant["RUS"];?></a>
                    <ul class="menu__list">
                        <?php
                        $menu_lists_items_children = mysqli_query($connection, "SELECT * FROM `menu__lists` WHERE `parant_id` LIKE " . $menu_lists_items_parant["id"]);
                        while($menu_lists_items_child = mysqli_fetch_assoc($menu_lists_items_children))
                        {
                            ?>
                            <li>
                                <a href="<?php
                                if(empty($menu_lists_items_child["ENG"]))
                                    echo "#";
                                else if (isset($_SESSION["admin"]))
                                {
                                    echo "change_service.php?id=" . $menu_lists_items_child["id"];
                                }
                                else {echo $menu_lists_items_child["ENG"] . ".php";}
                                    ?>"><?php echo $menu_lists_items_child["RUS"];?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>

<div class="lang-wrap" id="js-lang">
    <div class="lang">
        <div class="lang__content">
            <div class="lang__title">Выберите язык</div>

            <ul class="lang__list">
                <li><a href="#" class="_ru">Россия (Русский)</a></li>
                <li><a href="#">Global (English)</a></li>
            </ul>
        </div>
    </div>
</div>