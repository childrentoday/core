## Подключение к серверу БД

Для работы с базой данных требуется установить правильные параметры подключения к серверу MySql. 
В моём примере я буду использовать: localhost - сервер, root - пользователь, dbtest - база данных.

### `config.php`


```php
    define('DB_HOST', 'localhost'); // сервер
    define('DB_USER', 'root');      // пользователь
    define('DB_PASS', '');          // пароль
    define('DB_NAME', 'dbtest');    // база данных
```

### `examle1.php`

```php
// -- выполняем подключение к серверу MySQL и выбираем с какой базой будем работать
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
```
