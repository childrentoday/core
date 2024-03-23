### 1. Создадим ассоциативный массив
```php
// первый вариант
$user = ['id' => '123456789', 'name' => 'Oleg'];

// второй вариант
$user = array('id' => '123456789', 'name' => 'Oleg');
```
### 2. Выведем значение массива в браузер
```php
echo $user[id];
echo $user[name];
```

### 3. Создадим еще один массив

```php
$arr = [["name", "Viktor"], ["game", "home"]];
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
