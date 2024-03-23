### 1. Создадим ассоциативный массив
```php
// первый вариант
$user = ['id' => '1001', 'name' => 'Oleg'];

// второй вариант
$user = array('id' => '1002', 'name' => 'Oleg');
```
### 2. Выведем значение массива в браузер
```php
echo $user[id];
echo $user[name];
```

### 3. Создадим многомерный массив

```php
$arr = [
    ['id', '1001'],
    ['id', '1002']\
];
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
