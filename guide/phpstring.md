
### Демонстрация всех возможных значений формата: `printf`

```php
<?php
$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2

// Примечание: Значение формата "%%" возвращает следующий результат
printf("%%b = %b <br>",$num1); // Двоичное число
printf("%%c = %c <br>",$char); // Символы ASCII 
printf("%%d = %d <br>",$num1); // Десятичное число со знаком
printf("%%d = %d <br>",$num2); // Десятичное число со знаком
printf("%%e = %e <br>",$num1); // Экспоненциальное представление чисел (в нижнем регистре)
printf("%%E = %E <br>",$num1); // Экспоненциальное представление чисел (в верхнем регистре)
printf("%%u = %u <br>",$num1); // Unsigned decimal number (positive)
printf("%%u = %u <br>",$num2); // Unsigned decimal number (negative)
printf("%%f = %f <br>",$num1); // Floating-point number (local settings aware)
printf("%%F = %F <br>",$num1); // Floating-point number (not local settings aware)
printf("%%g = %g <br>",$num1); // Shorter of %e and %f
printf("%%G = %G <br>",$num1); // Shorter of %E and %f
printf("%%o = %o <br>",$num1); // Octal number
printf("%%s = %s <br>",$num1); // Строка
printf("%%x = %x <br>",$num1); // Шестнадцатеричное число (в нижнем регистре)
printf("%%X = %X <br>",$num1); // Шестнадцатеричное число (в верхнем регистре)
printf("%%+d = %+d <br>",$num1); // Спецификатор знака (положительный)
printf("%%+d = %+d <br>",$num2); // Спецификатор знака (отрицательный)
?>
```
