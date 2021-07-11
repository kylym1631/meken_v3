<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst(substr($_SERVER['REQUEST_URI'],1)); ?></title>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/slick/slick.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/slick/slick-theme.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/icons.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

</head>
<body>
<header >
    <nav id="nav">
        <div class="menu">
            <h1 class="menu__left"> <a href="<?php echo URLROOT ;?>"><?php echo SITENAME; ?></a></h1>
            <div class="menu__right">
                <div class="menu__right__item">
                    <ul class="menu__right__upper">
                        <li class="menu__right__item__link"><a href="<?=URLROOT;?>/orders">Проверка заказа</a></li>
                        <li class="menu__right__item__link"><a  href="<?=URLROOT;?>/infos#airports">Статус рейсов</a></li>
                        <li class="menu__right__item__link"><a  href="<?=URLROOT;?>/shops">Покупки</a></li>
                        <li class="menu__right__item__link"><a  href="<?=URLROOT;?>/contacts">Адреса</a></li>
                    </ul>

                    <div class="burger">
                        <span></span>
                        <span class="faded"></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="second__menu">
        <div class="container">
            <?php
            for ($i =0;$i < count(MENU);$i++)
            {
                echo "<a href=\"" .MENU[$i]['link'] . "\" class=\"second__menu__item\">
            <span class=\"" .MENU[$i]['icon'] . "\"></span>
            <h2 class=\"second__menu__item_descr\">" .MENU[$i]['descr'] . "</h2>
            </a>" ;
            }
            ?>
        </div>
    </div>
</header>