
### Подключение внешних файлов

```html
/host/mysite/
    - index.php
    - dir/
        - config.php
```
```
Абсолютный путь — это полный адрес файла начиная от корня диска.
Например: /host/mysite/template/config.php
Относительный путь - содержит адрес относительно текущей рабочей директории. 
Например: если файл лежит в папке /host/mysite,
то для подключения этого файла используется такой путь: template/config.php
```
```php
/*
 Полезно знать про две встроенные константы, обычно их используют определяя путь к подключаемым файлам.
*/
// __DIR__  — полный путь к директории с текущим сценарием.
// __FILE__ — полный путь к текущему сценарию.

// Указывать путь можно разными способами
// Например: относительно текущего файла (__DIR__):
require_once  __DIR__ . '/template/config.php';

// Или относительно корня сайта ($_SERVER['DOCUMENT_ROOT'])
require $_SERVER['DOCUMENT_ROOT'] . '/template/config.php'

// Чтобы путь был правильным на любой платформе (Linux или Windows) следует использовать DIRECTORY_SEPARATOR:
require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'config.php'


```

### Проверка что использутся метод POST
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // …
}
```

### Подсчет колличества записей в базе `mysqli_num_rows()`
```php

    define('DB_HOST', 'localhost'); // сервер
    define('DB_USER', 'root');      // пользователь
    define('DB_PASS', '');          // пароль
    define('DB_NAME', 'test');      // база данных

    // --выполняем подключение к серверу MySQL и выбираем с какой базой будем работать
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // --выполняем SQL запрос
    $result = mysqli_query($connect, "SELECT * FROM users ORDER BY name");
    // --Получение количества строк в наборе результатов
    $row_cnt = mysqli_num_rows($result);

    printf("Получено %d строк.\n", $row_cnt);
    /*
      Семейство функций printf() использует символ в качестве заполнителя.
      При обнаружении printf считывает следующие символы % %, чтобы определить что делать:
        %s - The next argument print as string
        %d - The next argument print as int
    */
    // -- закрываем текущее соединение с базой
    mysqli_close($connect);
```

### Альтернативный синтаксис php `foreach`
```php
<?php foreach ($arr as $key => $value): ?>
            <tr>
              <td><?=$value[id]?></td>
              <td><?=$value[name]?></td>
              <td><?=$value[date_birth]?></td>
              <td><?=$value[gender]?></td>
            </tr>
   <?php endforeach; ?>
```
