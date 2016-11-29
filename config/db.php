<?php
/**
 * Инициализация подключения к базе данных
 */

$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswrd = "";

// Подключение к MySQL
$db = mysql_connect($dblocation, $dbuser, $dbpasswrd);

// Проверка подключения
if(! $db){
    echo "Ошибка доступа к MySQL";
    exit();
}

// Устанавливает кодировку по умолчанию для текущего соединения
mysql_set_charset('utf8');

// Подключение к БД
if(! mysql_select_db($dbname, $db) ){
    echo "Ошибка доступа к базе данных {$dbname}";
    exit();
}