<?php
session_start();
    require_once 'vendor/connect.php';
    $prof_id = $_GET['id'];
    $profile_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = '$prof_id'");
    $profile_user =mysqli_fetch_assoc($profile_user);

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
<!--Форма регистрации-->
<div class="wrapper">
        <form class="form_reg3" action="vendor/upload.php" method="post" enctype="multipart/form-data">
            <div class="block">
                <div class="logee">
                    <div class="up_picuser">
                    <img class="pic_user" src="<?=$_SESSION['user']['avatar']?>"  alt="">
                    </div>
                    <label>Изображение профиля</label>
                    <input type="hidden" name="id" value="<?=$profile_user['id']?>">
                    <input class="avatar_btn" type="file" name="avatar">
                    <label>ФИО</label>
                    <input type="text" name="full_name" value="<?=$profile_user['full_name']?>">
                    <label>Логин</label>
                    <input type="text" name="login" value="<?=$profile_user['login']?>">
                    <label>Почта</label>
                    <input type="email"  name="email" value="<?=$profile_user['email']?>">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите новый пароль">
                    <label>Подтверждение пороля</label>
                    <input type="password" name="password_confirm" placeholder="Подтвердите новый пароль">
                    <button type="submit">Изменить</button>
                    <?php
                        if($_SESSION['message']){
                            echo '<p class="msg">'. $_SESSION['message'] .' </p>';
                        }
                    unset ($_SESSION['message']);
                    ?>
                </div>

            </div>
        </form>
</div>
</body>
</html>

