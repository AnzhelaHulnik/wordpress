<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сайт по макету</title>
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
               <ul>
                    <li><a href="">РЕМОНТ</a></li>
                    <li><a href="">ПЕЧИ</a></li>
                    <li><a href="">ЛАНДШАФТНЫЙ ДИЗАЙН</a></li> 
                    <li><a href="">БАНИ</a></li>
                    <li><a href="">СТРОИТЕЛЬНЫЙ МАГАЗИН</a></li>
                    <li><a href="">ЗАКАЗАТЬ ДИЗАЙН</a></li>
                    <li><a href="">КАНАЛ НА YouTube</a></li>
               </ul>
             <div>
                <p>+375(29)677-77-77</p>
                <p><a href="bell">ЗАКАЗАТЬ ЗВОНОК</a></p>
             </div>
           </nav>
        </div>
        <article>
            <section id=banner>
               <h1>Ошибка 404</h1>
               <h1>Такой страницы не существует</h1>
               
            </section>   
            
       </article>
    </header> 
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
    </footer>
</body>
</html>