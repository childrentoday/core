# [ЯДРО] - |CORE|

Частенько бывают случай когда появляется какой-нибудь проект и возникает необходимость быстро собрать рабочую модель сайта с минимальным функционалом. Учитывая практический опыт мне удалось подготовить интересную структуру шаблона модели сайта. 

Примечание: <i>По мере возможности, при возникновении желания вы можете вносите свои правки и предложения в имещуюся структуру кода. </i>

Шаг первый - устанавливаем [инструменты разработчика][childrentoday]

[childrentoday]: https://github.com/childrentoday/registration/blob/master/install/MyTools.md


### Содержание 
* 1 Подключение к серверу БД


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

работа с функциями [описание][functioninfo]

[functioninfo]: https://github.com/childrentoday/core/blob//install/MyTools.md


работа с формой [описание][functioninfo]

[forminfo]: https://github.com/childrentoday/core/blob//install/MyTools.md



