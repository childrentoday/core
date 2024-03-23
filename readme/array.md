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
$students = [
    ['id' => '1001', 'name' => 'Oleg'],
    ['id', '1002', 'name' => 'Ivan'],
    ['id', '1003', 'name' => 'Vlad']
];
```


### 4. Выведем значения массива используя альтернативный синтаксис php `foreach`
```php
<?php foreach ($students as $key => $value): ?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value?></td>
            </tr>
   <?php endforeach; ?>
```
