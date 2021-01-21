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
</head>
<body>


<!--Форма авторизации-->
        <form class="form_reg2" action="vendor/signin.php" method="post">
            <div class="block2">
                <div class="log">
                    <div class="logog">
                        <a href="index.php">
                        <img src="assets/img/logonewchb.png" alt="">
                        </a>
                    </div>
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Введите свой логн">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите свой пароль">
                    <div class="btn_block">
                        <button type="submit">Войти</button>
                    </div>
                    <p>
                        <a href="register.php">Зарегистрироваться!</a>
                    </p>
                    <?php
                        if($_SESSION['message']){
                            echo '<p class="msg">'. $_SESSION['message'] .' </p>';
                        }
                        unset ($_SESSION['message']);
                    ?>

                </div>
                <img class="main_il2" src="assets/img/Coming%20Soon.png" alt="">
            </div>

        </form>
</body>
</html>
