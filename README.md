# core [ЯДРО]

Частенько бывает, для каких-нибудь проектов, возникает необходимость быстро собрать рабочую модель сайта с минимальным функционалом. Учитывая практический опыт я собрал свою интересную конструкцию. 
По мере возможности, при возникновении желания, вносите свои правки и предложения в имещуюся структуру кода.

Первым шагом устанавливаем [Инструменты разработчика][childrentoday]

[childrentoday]: https://github.com/childrentoday/registration/blob/master/install/MyTools.md

## Структута

mydomain.local
|---/css
|---/img
|---/js

### Описание 
* 1 
* 2 база
* 3 каркас
* 4 конфигурация
* -- ОФОРМЛЕНИЕ ТЕМЫ
* 5 навигация

# Установливаю параметры подключения к серверу

Для работы с базой данных требуется для начала установить правильные параметры подключения к серверу MySql. 
В моём примере: localhost - сервер, root - пользователь без пароля, dbtest - база данных, 

```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbtest";
```
> Данный текст будет заключен в HTML-теги <html>html</html>
> Данный текст будет заключен в HTML-теги <p>параграф</p>
> Данный текст будет заключен в HTML-теги <h1>параграф</h1>




