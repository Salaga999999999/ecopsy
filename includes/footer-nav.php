<div class="footer__nav-wrap">
        <div class="footer__nav-content">
<?php
            $footer_nav_items = mysqli_query($connection, "SELECT * FROM `footer_nav` WHERE `parant_id` LIKE 0");//Тут нужно сделать бы алгоритм, который один раз заходит в бд, а потом уже из массива доставать элементы
            while($footer_nav_item = mysqli_fetch_assoc($footer_nav_items))
            {
                ?>
                <div class="footer__nav-column">
                    <div class="footer__nav-list">
                    <a href="<?php if(empty($footer_nav_item["ENG"]))
                                    echo "#";
                                else echo $footer_nav_item["ENG"];?>" class="footer__nav-large-link"><?php echo $footer_nav_item["RUS"];?></a>
                    <nav>
                        <?php
                        $footer_nav_items_children = mysqli_query($connection, "SELECT * FROM `footer_nav` WHERE `parant_id` LIKE " . $footer_nav_item["id"]);
                        while($footer_nav_items_child = mysqli_fetch_assoc($footer_nav_items_children))
                        {
                            ?>
                                <a href="<?php
                                if(empty($footer_nav_items_child["ENG"]))
                                    echo "#";
                                else echo $footer_nav_items_child["ENG"];
                                    ?>"><?php echo $footer_nav_items_child["RUS"];?></a>
                            <?php
                        }
                        ?>


                    </nav>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <nav class="footer__large-navs">
            <a href="#" class="footer__nav-large-link">Мероприятия</a>
            <a href="#" class="footer__nav-large-link">Контакты</a>
            <a href="#" class="footer__nav-large-link js-popup-open" data-popup="#subscription">Подписаться на новости</a>
        </nav>
    </div>