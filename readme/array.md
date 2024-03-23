### 1. Создадим массив
```php
$arr = ['id' => '123456789', 'name' => 'Oleg'];
```

### 2. Выведем значение массива в браузер
```php
echo $arr[id]."\n";
echo $arr[name];
```




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
