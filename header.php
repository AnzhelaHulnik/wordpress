<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Obeo
 */
 global $out_settings;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header, footer, nav, article, section, figure, figcaption {
            display: block;
        }
    </style>

</head>
<body>
<header>
    <div>
        <div id="dropdown"><a href="">МЕНЮ</a>
            <ul>
                <li><a href="">РЕМОНТ</a></li>
                <li><a href="">ПЕЧИ</a></li>
                <li><a href="">ЛАНДШАФТНЫЙ ДИЗАЙН</a></li>
                <li><a href="">БАНИ</a></li>
                <li><a href="">СТРОИТЕЛЬНЫЙ МАГАЗИН</a></li>
                <li><a href="">ЗАКАЗАТЬ ДИЗАЙН</a></li>
                <li><a href="">КАНАЛ НА YouTube</a></li>
            </ul>
        </div>

        <nav id="menu">
            <div></div>
            <?php
            $args = array(
                    'container' => 'ul',
                    'container_class' => '',


            );
            wp_nav_menu($args);
            ?>

            <div>
                <p><?php echo esc_html($out_settings['phone'])?></p>
                <p><a href="bell">ЗАКАЗАТЬ ЗВОНОК</a></p>
            </div>
        </nav>
    </div>
    <article>
        <section id=banner>
            <h1><?php bloginfo('description')?></h1>
            <ul>
                <li>ПРОДАЖА</li>
                <li>КЛАДКА</li>
                <li>ОТДЕЛКА</li>
                <li>РЕМОНТ</li>
                <li>ПРОЕКТИРОВАНИЕ</li>
                <li>СТРОИТЕЛЬСТВО ПОД КЛЮЧ</li>
            </ul>
        </section>
        <section>
            <form name="" action="" method="post">
                <div id="form">
                    <div><p>Закажите сейчас</p><span> и получите выезд печника,<br> замер и проект</span> <p>БЕСПЛАТНО</p></div>
                    <div><label for="name"></label><input type="text" placeholder="Введите Ваше   имя" id="name"></div>
                    <div><label for="tel"></label><input type="tel" placeholder="Введите номер телефона" id="tel"></div>
                    <div><input class="submit" type="submit" value="ВЫЗВАТЬ ЗАМЕРЩИКА"></div>
                </div>
            </form>
        </section>
    </article>
</header>
