<?php
session_start();
require_once 'connect.php';
$avatar= $_POST['avatar'];
$id = $_POST['id'];
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$password_confirm = $_POST['password_confirm'];



$path ='uploads/' . time() .$_FILES['avatar']['name'];
if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)){
    $_SESSION['message']='Ошибра при загрузке изображения';
    header('Location: ../register.php');
}

mysqli_query($connect, "UPDATE `user` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `password` = '$password',`avatar` = '$path'  WHERE `user`.`id` = '$id'");
unset($_SESSION['user']);
$check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
$user = mysqli_fetch_assoc($check_user);
$_SESSION['user'] =[
    "id"=> $user['id'],
    "full_name"=>$user['full_name'],
    "avatar"=>$user['avatar'],
    "email"=>$user['email']
];
header('Location: ../profilee.php');
?>

