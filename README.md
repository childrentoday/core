# core [ЯДРО]

Частенько бывают случайи когда появляется какого-нибудь проект и возникает необходимость быстро собрать рабочую модель сайта с минимальным функционалом. Учитывая практический опыт мне удалось собрать интересную структуру шаблона модели сайта. 

Примечание: <i>По мере возможности, при возникновении желания вы можете вносите свои правки и предложения в имещуюся структуру кода. </i>

Шаг первый - устанавливаем [инструменты разработчика][childrentoday]

[childrentoday]: https://github.com/childrentoday/registration/blob/master/install/MyTools.md


## Структута core

* [core][core]

* [config.php][#config.php]



[mydomain][mydomain.local]

[|---/css][css]

[|---/img][img]

[|---/js][js]

### Описание 
* 1 Подключение к серверу БД
* 2 база
* 3 каркас
* 4 конфигурация
* -- ОФОРМЛЕНИЕ ТЕМЫ
* 5 навигация

## Подключение к серверу БД


Для работы с базой данных требуется установить правильные параметры подключения к серверу MySql. 
В моём примере: localhost - сервер, root - пользователь, dbtest - база данных.

### `config.php`

файл `config.php`

```php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'dbtest');
```


## Работа с функциями


Функции сокращают код.

### function.php


файл `function.php`

```php
function connect() {
    // --выполняем подключение к серверу MySQL и выбираем с какой базой будем работать
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // --проверяем рабочее состояние подключения к серверу
    if(!$connect) {
        echo "Ошибка подключения к серверу:".mysqli_connect_error();
        echo "Код ошибки:".mysqli_connect_errno();
        exit();
    }
    return $connect;
}
```

