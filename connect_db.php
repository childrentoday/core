<?php
//подключим файл с настройками
include('config.php');

// стыковка с сервером 
$connect = mysqli_connect($server, $user, $pass);
if(!$connect) {
	print("Ошибка соединения с сервером".mysqli_connect_error());
	print("<br>Код ошибки:".mysqli_connect_errno());
	exit();
} /* else print("Есть коннект"); */
// выбираем с какой базой будем работать
mysqli_select_db($connect, $db);
mysqli_set_charset($connect, $utf);
