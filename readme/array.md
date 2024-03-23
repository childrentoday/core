
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
