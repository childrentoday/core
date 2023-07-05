# [ЯДРО] - |CORE|

Частенько бывают случайи когда появляется какого-нибудь проект и возникает необходимость быстро собрать рабочую модель сайта с минимальным функционалом. Учитывая практический опыт мне удалось собрать интересную структуру шаблона модели сайта. 

Примечание: <i>По мере возможности, при возникновении желания вы можете вносите свои правки и предложения в имещуюся структуру кода. </i>

Шаг первый - устанавливаем [инструменты разработчика][childrentoday]

[childrentoday]: https://github.com/childrentoday/registration/blob/master/install/MyTools.md


### Содержание 
* 1 Подключение к серверу БД
* 2 Работа с функциями

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

```php
// -- Сформируем SQL запрос к таблице `users` и выведем массив данных хранящися в поле `name` :
$result = $connect->query('SELECT * FROM users');
while ($row = $result->fetch_assoc()) {
	echo $row['name'] . '<br>';
}
```

```php
    // -- Выводим количество записей в таблице users
    echo $result->num_rows;
```

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

Обработка формы через `button` 
```php
<?php
if ($_POST['button1'] == 'button3') {
    echo "<p>Нажата кнопка 3</p>";
    }
else    {
    echo "<p>Нажмите любую кнопку</p>";
}
?>
 
<form action="add.php" method="POST">
<button type="submit" name="button1" value="button3">Кнопка 3</button>
<br>
<button type="submit" name="button2" value="button4">Кнопка 4</button>
</form>
```
