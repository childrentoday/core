<?
/*
    Telegram bot
    FASTHOMEWORK_BOT
    Для быстрого решения школьных домашних задач
    0. Что такое URL простыми словами? URL обозначает Uniform Resource Locator.
    URL это лишь адрес, который выдан уникальному ресурсу в интернете.
    В теории, каждый корректный URL ведёт на уникальный ресурс
    1. API (Application Programming Interface) — это набор способов и правил,
    по которым различные программы общаются между собой и обмениваются данными.
    2. Метод API — это определённое действие, которое должно выполнить приложение
    основываясь на полученных данных (отправить сообщение, вернуть список чатов, отправить картинку и т.д.)
    3. Token (токен) — это уникальный ключ бота, необходимый для отправки запросов.
*/

$botname = "FASTHOMEWORK_BOT";
$token   = "   "; // token to access the HTTP API:

$text = "Подключись к моей программе";

// генератор ссылки под конкретного пользователя
$url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&text='.$text;
// echo $url;
// https://api.telegram.org/bot<token>/METHOD_NAME
/*
{
    "ok":false,
    "error_code":404,
    "description":"Not Found"
}


*/

/*


https://api.telegram.org/<token>/sendMessage?chat_id=<id>&text=Подключись к программе
*/

?>
