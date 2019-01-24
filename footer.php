<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Obeo
 */
global $out_settings;
//print_r($out_settings);
?>

<footer>
    <section class="footer">
        <section>
            <h3>У Вас остались вопросы?</h3>
            <p>Оставьте заявку</p>
            <p>и мы перезвоним Вам в течение 10 минут!</p>
        </section>
        <section>
            <form name="application" action="" method="post">
                <p><label for="name"></label><input class="input" type="text" placeholder="Введите Ваше   имя" id="name"></p>
                <p><label for="tel"></label><input class="input" type="tel" placeholder="Введите номер телефона" id="tel"></p>
                <p><input class="submit" type="submit" value="ОСТАВИТЬ ЗАЯВКУ"></p>
            </form>
        </section>
    </section>
    <?php ($out_settings['copy-background']['background-color']); ?>

    <?php if($out_settings['footer-copy'] != ''): ?>
    <section class="copyright">

       <p><?php echo esc_html($out_settings['footer-copy'])?></p>

    </section>
    <?php endif; ?>
</footer>
<script src="<?php bloginfo('template_directory')?>/js/slider.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</body>
</html>