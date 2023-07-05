
Обработка формы через `button` 
```php
<?php
if ($_POST['button1'] == 'button3') {
    echo "<p>Нажата кнопка 3</p>";
    }
else    {
    echo "<p>Нажмите любую кнопку</p>";
}
?>
 
<form action="add.php" method="POST">
<button type="submit" name="button1" value="button3">Кнопка 3</button>
<br>
<button type="submit" name="button2" value="button4">Кнопка 4</button>
</form>
```
