<?php
const HOST = 'localhost';
const USER = 'id_227_20';
const PASS = 'id_227_20';
const BASE = 'id_227_20';

$connect = mysqli_connect(HOST, USER, PASS,  BASE);
if(!$connect){
    die('error connect to DateBase');
}

?>
