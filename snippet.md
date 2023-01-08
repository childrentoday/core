
### Проверка что использутся метод POST
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // …
}
```

### Подсчет колличества записей в базе
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














|Функция|Описание|
|----|-----|
|`*mysqli_num_rows()*`|*подсчет количества строк*|
|`_斜体2_`| _подсчет количества строк_|
|`**mysqli_num_rows()**`|**подсчет количества строк**|
|`__mysqli_num_rows()__`|__подсчет количества строк__|
|`mysqli_num_rows() ~~параметр~~`|подсчет количество строк|
|`***mysqli_num_rows()***`|***подсчет количества строк***|
|`___mysqli_num_rows()___`|___подсчет количества строк___|
|`***~~mysqli_num_rows()~~***`|***~~подсчет количества строк~~***|
|`~~***mysqli_num_rows()***~~`|~~***подсчет количества строк***~~|
