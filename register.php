<?php
    session_start();
    if($_SESSION['user']){
        header('Location: profilee.php');
    }
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
</head>
<body>
<!--Форма регистрации-->
<div class="wrapper">
        <form class="form_reg" action="vendor/signup.php" method="post" enctype="multipart/form-data">
            <div class="block">
                <div class="log">
                    <div class="logog">
                        <a href="index.php">
                        <img src="assets/img/logonewchb.png" alt="">
                        </a>
                    </div>
                        <label>ФИО</label>
                        <input type="text" name="full_name" >
                        <label>Логин</label>
                        <input type="text" name="login" >
                        <label>Почта</label>
                        <input type="email"  name="email" >
                        <label>Изображение профиля</label>
                        <input class="in_file" type="file" name="avatar">
                        <label>Пароль</label>
                        <input type="password" name="password" >
                        <label>Подтверждение пороля</label>
                        <input type="password" name="password_confirm">
                    <div class="btn_block">
                        <button type="submit">Зарегистрироваться</button>
                    </div>
                        <p>
                            <a href="auth.php">Авторезиризоваться!</a>
                        </p>
                        <?php
                            if($_SESSION['message']){
                                echo '<p class="msg">'. $_SESSION['message'] .' </p>';
                            }
                        unset ($_SESSION['message']);
                        ?>
                </div>

                    <img class="main_ill" src="assets/img/PleaseWait.png" alt="">

            </div>
        </form>
</div>
</body>
</html>