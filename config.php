<?php

const SERVER = "localhost";
const DB = "db1";
const LOGIN = "root";
const PASS = "root";

//$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных");

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);  

if (!$connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    die("Ошибка соединения с базой данных"); 
}
