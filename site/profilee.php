<?php
session_start();
if(!$_SESSION['user']){
    header('Location: profilee.php');
}
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACC-ORD - сайт учета заказов</title>
    <meta name="description" content="Сайт- визитка и немного учета заказов">
    <meta name="keywords" content="order,учет заказов,система,">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="shortcut icon" href="assets/img/iconlogo.png" type="image/png">
    <script src="assets/js/main.js"></script>
</head>
<body class="bb">
<div class="wrapper">
    <header>
        <div class="logo">
            <div class="logo_text">
                <h1><a href="index.php"><img src="assets/img/logonew.png"></a></h1>
            </div>
        </div>

        <div class="btn_menu">
            <ul class="header_list">
                <form class="fuser">
                    <a class="a_img" href="upprofile.php?id=<?=$_SESSION['user']['id'] ?>"><img src="<?=$_SESSION['user']['avatar'] ?>" alt=""></a>
                    <div class="con">
                    <p class="fullnameus"><?=$_SESSION['user']['full_name'] ?></p>
                    <a href="vendor/logout.php" class="sill">Выход</a>
                    </div>


                </form>
                <li> <a href="#“second-a”" class="a_header">Возможности</a></li>
                <li><a href="#“second-d”" class="a_header">О нас</a></li>
                <li> <a href="#“feedback_c”" class="a_header">Отзывы</a></li>
                <form class="f_user">
                    <a class="a_img" href="upprofile.php?id=<?=$_SESSION['user']['id'] ?>"><img src="<?=$_SESSION['user']['avatar'] ?>" alt=""></a>
                    <p class="fullname_user"><?=$_SESSION['user']['full_name'] ?></p>
                    <a href="vendor/logout.php" class="logoutt">Выход</a>
                </form>
        </div>
        <div class="header_burger">
            <span></span>
        </div>
    </header>

    <div class="main_block">
        <!-- Главное часть сайта-->
        <div class="block_hhh">
            <div class="block_header">
                <h1>Хотите оптимизировать
                    <br>работу вашего предприятия?<br><p class="main_txt">ACC-OPD поможет!</p></h1>
                <a href="register.php"> <button class="section_btn" >Начать</button></a>
            </div>
        </div>

        <img class="main_illustration" src="assets/img/illustration_main.png">

    </div>
    <!-- Вторичная часть сайта-->
    <div class="section">
        <h2 id=“second-a”  class="h2indvid header_h2">Начните пользоваться<br>
            прямо сейчас</h2>
        <div class="feather">
            <img class="ill_serves" src="assets/img/Coming Soon.png">
            <div class="text_serves">
                <h2>Настройте сервис под себя</h2>
                <ul>
                    <li>Настройка под любые процессы</li>
                    <li>Легко и без программирования</li>
                    <li>Интерфейс на русском</li>
                </ul>
            </div>
        </div>
        <div class="block">
            <div class="block_info">
                <img class="img_block_info" src="assets/img/illustration_secondblock_1.png">
                <h2 >Оптимизация процессов<br><span>тем самым способоствуя<br>
                            увеличению конверсии.</span></h2>
            </div>
            <div class="block_info">
                <img class="img_block_info" src="assets/img/illustration_secondblock_2.png">
                <h2>Без сложного внедрения<br><span>Легко и быстро<br> встройте ваш бизнес
                            </span></h2>

            </div>
            <div class="block_info">
                <img class="img_block_info" src="assets/img/illustration_secondblock_3.png">
                <h2>Обработка заказов<br><span>Легко сверяйте комплектацию<br>при сборе заказов на складе.
                           </span></h2>
            </div>
        </div>
    </div>
    <h2 id=“second-d” class="header_h2">О нас</h2>

</div>
<div class="nowrap">
    <div class="wrapper">
        <div class="section2">


            <div class="owl">
                <div class="aboutus">
                    <h2 class="header_aboutus">О проекте</h2>
                    <p class="txt_aboutus">В 2021 запустился сервис <strong>ACC-ORD</strong> для того,
                        чтобы дать возможность
                        малому и среднему бизнесу вывести свой сервис на новый качественный уровень.
                        Для этого использовали опыт в сфере автоматизации ИТ-подразделений.
                        Выстроив уникальную бизнес модель и максимально снизив издержки,
                        сервис заслужил доверие клиентов по всей стране и выросли.
                    </p>
                </div>
                <hr class="line32">
                <div class="profile">
                    <hr class="line">
                    <div class="prof_main">
                        <img src="assets/img/AVATARnewppапа.png" alt="">
                        <h2>Нуриддин Хаитов</h2>
                        <h3>Разработчик,студент ЧРТ</h3>
                        <p>Этот сайт разработан для курсовой работы.
                        </p>
                    </div>
                </div>
            </div>
            <div class="abb">
                <div class="block_aboutus">
                    <div class="block_aut">
                        <img src="assets/img/ic1.png" alt="">
                        <p>Учет заказов</p>
                    </div>
                    <div class="block_aut">
                        <img src="assets/img/ic2.png" alt="">
                        <p>Адаптивность</p>
                    </div>
                    <div class="block_aut">
                        <img src="assets/img/ic3.png" alt="">
                        <p>Отправка отчетов</p>
                    </div>
                    <div class="block_aut">
                        <img src="assets/img/ic4.png" alt="">
                        <p>Быстрое внедрение</p>
                    </div>
                </div>
                <h1 class="header_auts">Система отлично подходит для</h1>
                <div class="block_aboutus">
                    <div class="block_aut">
                        <img src="assets/img/iconmonstr-shopping-bag-7-64.png" alt="">
                        <p>Интернет-магазинов</p>
                    </div>
                    <div class="block_aut">
                        <img src="assets/img/iconmonstr-shop-13-64.png" alt="">
                        <p>Розничной торговли</p>
                    </div>
                    <div class="block_aut">
                        <img src="assets/img/iconmonstr-cube-1-64.png" alt="">
                        <p>Оптовой торговли</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="wrapper">




    <div class="vozmoj">
    </div>

    <div class="section"> <div class="feedback">
            <div class="container">
                <div class="selection-header">
                    <h2 id=“feedback_c”  class="header_h2">Отзывы</h2>
                </div>
                <div class="block-feed">
                    <div class="feedback-slider">
                        <div class="card">
                            <div class="front">
                                <p class="p_feed">«Сервис очень хороший»</p>
                            </div>
                            <div class="back">
                                <div class="picture">
                                    <img src="uploads/1610651858AVATARnew.png">
                                    <p>Евгений Молчанов</p>
                                    <div class="feedback-text">
                                        <p class="p_text">Пользуюсь сервисом уже давно,всем доволен</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback-slider">
                        <div class="card">
                            <div class="front">
                                <p class="p_feed">«Не зря выбрала этот  сервис»</p>
                            </div>
                            <div class="back">
                                <div class="picture">
                                    <img src="assets/img/feedback-picture.png">
                                    <p>Лина Шакалина</p>
                                    <div class="feedback-text">
                                        <p class="p_text">Пользуюсь сервисом не так давно, пока сайт работает </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback-slider">
                        <div class="card">
                            <div class="front">
                                <p class="p_feed">«Долго выберал сервис»</p>
                            </div>
                            <div class="back">
                                <div class="picture">
                                    <img src="uploads/1610651858AVATARnew.png">
                                    <p >Артур Абдулин</p>
                                    <div class="feedback-text">
                                        <p class="p_text">Оцениваю этот сайт на 6.5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback-slider">
                        <div class="card">
                            <div class="front">
                                <p class="p_feed">«Сайт не плохой»</p>
                            </div>
                            <div class="back">
                                <div class="picture">
                                    <img src="uploads/1610651858AVATARnew.png">
                                    <p>Иван Поспелов</p>
                                    <div class="feedback-text">
                                        <p class="p_text">Сайт прикольный, всем доволен</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <a class="slide_top"  href="#top"><img src="assets/img/ico_top.png"></a>
                </div>
            </div>
        </div>

    </div>






</div>
<div class="nowrap fot">
    <div class="wrapper">
        <footer>
            <div class="footer_info">
                <div class="logo_footer">
                    <img src="assets/img/iconlogo.png" alt="">
                </div>
                <div class="block_media">
                    <div class="infor">
                        <h2>Информация</h2>
                        <a href="#“second-a”">Возможности</a><br>
                        <a href="#“second-d”">О проекте</a><br>
                        <a href="#“feedback_c”">Отзывы</a>
                    </div>
                    <hr class="line2">
                    <div class="infor2">
                        <h2>Кабинет</h2>
                        <a href="auth.php">Войти в учетную запись</a>
                        <a href="register.php">Создать учетную запись</a>
                    </div>
                    <hr class="line2">
                    <div class="infor3">
                        <div class="txtxinfor3">
                            <h2>8 (999) 582-87-54</h2>
                            <p>пн-пт 09:00 до 18:00 </p>
                            <p>сб-вс 10:00 до 18:00</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="social">
                <a href="#"><img src="assets/img/socvk.png" alt=""></a>
                <a href="#"><img src="assets/img/socfc.png" alt=""></a>
                <a href="#"><img src="assets/img/socyou.png" alt=""></a>
                <a href="#"><img src="assets/img/socmai.png" alt=""></a>
            </div>
        </footer>>
    </div>
</div>
<script src="assets/js/script.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>


