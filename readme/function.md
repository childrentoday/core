
## Работа с функциями


Функции сокращают код и упрощают его использование.
Соберём обёртку подключения и отключения от базы данных. 

### `function.php`


функция `connect()` - выполняет подключение к базе

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


функция `close()` - закрывает открытое содинение с базой

```php
function close($connect) {
    mysqli_close($connect);
}

```
