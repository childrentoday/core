<?php

//-----------VERSION 2----------------------//
// --подключаем конфигурационные параметры
require_once 'config.php';

// ** Парамерты (файл config.php) для локального сервера   [СЕРВЕР] -> [ЮЗЕР] -> [ПАРОЛЬ] -> [БАЗА] -> [КОДИРОВКА]
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'phpconstructor');
// define('DB_CHAR', '');


// --выполняем подключение к серверу MySQL и выбираем с какой базой будем работать
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// --проверяем рабочее состояние подключения к серверу
if(!$connect) {
    echo "Ошибка подключения к серверу:".mysqli_connect_error();
    echo "Код ошибки:".mysqli_connect_errno();
    exit();
}

// --формируем запрос данных из конкретной таблицы
$sql = "SELECT * FROM " .DB_TABL ;
// -- вариант 1: $sql = "SELECT * FROM la_test WHERE ID > 1 ";
// -- вариант 2: $t = 2;
// -- вариант 2: $sql = "SELECT * FROM la_test WHERE ID > $t ";

// --
$result = mysqli_query($connect, $sql);

$arr = array();
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
} else {
  echo "0 result";
}

echo "<pre>";
print_r($arr);
echo "</pre>";
//var_dump(mysqli_num_rows($result));
// -- закрываем открытое соединение с сервером MySQL
mysqli_close($connect);
