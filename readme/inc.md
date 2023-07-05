### Подключение внешних файлов

```html
/host/mysite/
    - index.php
      /template/
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
require $_SERVER['DOCUMENT_ROOT'] . '/template/config.php';

// Чтобы путь был правильным на любой платформе (Linux или Windows) следует использовать DIRECTORY_SEPARATOR:
require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'config.php';


```
