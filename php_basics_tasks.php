<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Домашка 1. Основы PHP </title>
  </head>
  <body>

 <?php
// Задача 1  ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 1 ▼</p>';

$x = 'Vitaliy';
echo $x;

echo '<br><br>';
// Задача 2 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 2 ▼</p>';

$age = 25; 
echo $age;

echo '<br><br>'; 
// Задача 3 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 3 ▼</p>';

$x = 'Vitaliy';
echo "Меня зовут: $x";

echo '<br><br>';
// Задача 4 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 4 ▼</p>';

$age = 25; 
echo "Мне $age лет";

echo '<br><br>';	
// Задача 5 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 5 ▼</p>';

$age = 25; 
if ($age < 18) {   
} elseif ($age > 59) { 
} else {
    echo "Вам еще работать и работать";
}
	
echo '<br><br>';
// Задача 6 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 6 ▼</p>';

$age = 23; 
if ($age < 18) {
} elseif ($age > 59) {
	echo "Вам пора на пенсию";
} else {
    echo "Вам еще работать и работать";
}

echo '<br><br>';
// Задача 7 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 7 ▼</p>';

$age = 19; 
if ($age < 18) {
	echo "Вам еще рано работать";
} elseif ($age > 59) {
	echo "Вам пора на пенсию";
} else {
    echo "Вам еще работать и работать";
}

echo '<br><br>';
// Задача 8 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 8 ▼</p>';

$age = 0;

if ($age < 1 ) {	
	echo "Неизвестный возраст";
}  
elseif (!is_numeric($age)) {
	echo "Неизвестный возраст";
}
elseif ($age < 18) {
	echo "Вам еще рано работать";
}

elseif ($age > 59) {
	echo "Вам пора на пенсию";
} 
else {
    echo "Вам еще работать и работать";
}

echo '<br><br>';
// Задача 9 ============================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 9 ▼</p>';

$day = rand(0,30);
echo "$day";

echo '<br><br>';
// Задача 10 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 10 ▼</p>';

$day = 5;
switch ($day) {
case 1:
case 2:
case 3:
case 4:
case 5:
  echo "Это рабочий день";
  break;
}
echo '<br><br>';
// Задача 11 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 11 ▼</p>';

$day = 7;
switch ($day) {
case 1:
case 2:
case 3:
case 4:
case 5:
  echo "Это рабочий день";
  break;
case 6:
case 7:
  echo "Это выходной день";
  break;
}

echo '<br><br>';
// Задача 12 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 12 ▼</p>';

$day = 5;
switch ($day) {
case 1:
case 2:
case 3:
case 4:
case 5:
  echo "Это рабочий день";
  break;
case 6:
case 7:
  echo "Это выходной день";
  break; 
  default: echo "Неизвестный день!"; 
  break;
}

echo '<br><br>';
// Задача 13 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 13 ▼</p>';

$s = 120; // Растояние (км)
$t = 2; // Время (ч)

$v = $s / $t;
echo "{$v} км/ч &nbsp;&nbsp;&nbsp;";

$m_s = $v * 1000/3600;
echo "({$m_s} м/с)";

echo '<br><br>';
// Задача 14 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 14 ▼</p>';

$foo = 'bar';
$bar = 10;

echo "bar = {${$foo}}";

echo '<br><br>';
// Задача 15 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 15 ▼</p>';


if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
    $a = filter_var($_GET['a'], FILTER_VALIDATE_FLOAT);
    $b = filter_var($_GET['b'], FILTER_VALIDATE_FLOAT);
    $operator = filter_var($_GET['operator'], FILTER_SANITIZE_STRING);
    if ($a === false || $b === false || !$operator) {
        $result = '<font color=\"ff0000\">Ошибка. Введите данные.</font>';
    } else {
        switch ($operator) {
            case '+':
                $result = "{$a} {$operator} {$b} = " . ($a + $b);
                break;
            case '-':
                $result = "{$a} {$operator} {$b} = " . ($a - $b);
                break;
            case '*':
                $result = "{$a} {$operator} {$b} = " . ($a * $b);
                break;
            case '/':
                if (!$b) {
                    $result = '<font color=\"ff0000\">Ошибка. Деление на ноль</font>';
                } else {
                    $result = "{$a} {$operator} {$b} = " . ($a / $b);
                }
                break;
            case '%':
                if (!$b) {
                    $result = '<font color=\"ff0000\">Ошибка. Деление на ноль</font>';
                } else {
                    $result = "{$a} {$operator} {$b} = " . ($a % $b);
                }
                break;
            default:
                $result = 'Ошибка';
        }
    }
}
if (isset($result)) {
    echo "<font color=\"3d6e07\"><b>$result</b></font>";
}
?>
<form>
    <input type="hidden" name="hw" value="15">
    <div><input type="text" name="a" maxlength="15">&nbsp; Введите число<br>
    <input type="text" name="b" maxlength="15">&nbsp; Введите число</div>
	    <select name="operator"">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <input  type="submit" value="Посчитать ►">
</form>

<?php
echo '<br><br>';
// Задача 16 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 16 ▼</p>';

$a = 3;
$b = 63;

echo $a > $b ? $a : $b;

echo '<br><br>';
// Задача 17 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 17 ▼</p>';

$a = '78';
$b = 78;
if ($a == $b) {
echo 'равны';
} 
else {
echo 'не равны';
}

echo '<br><br>';
// Задача 18 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 18 ▼</p>';

$a = '78';
$b = 78;
if ($a === $b) {
echo 'эквивалентны';
} 
else {
echo 'не эквивалентны';
}

echo '<br><br>';
// Задача 19 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 19 ▼</p>';

$a = '78';
$b = 78;
var_dump($a == $b);

echo '<br><br>';
// Задача 20 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 20 ▼</p>';

var_dump((bool)20); // Любое положительное число, больше нуля, будет отображаться как boolean true.

echo '<br><br>';
// Задача 21 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 21 ▼</p>';

var_dump((bool)0); // Отрицательные числа включая ноль, будут отображаться как boolean false.

echo '<br><br>';
// Задача 22 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 22 ▼</p>';

var_dump((bool)-20); // Отрицательные числа включая ноль (нулевые), будут отображаться как boolean false.

echo '<br><br>';
// Задача 23 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 23 ▼</p>';

echo '...текст... <br>' ;
print '...текст... <br>';
printf ('...текст...', 'printf');

echo '<br><br>';
// Задача 24 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 24 ▼</p>';

echo 'Ответ в файле';
// Коммент на одну строку.
# Коммент на одну строку, используется редко.
/*
Многострочный 
коммент.
*/

echo '<br><br>';
// Задача 25 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 25 ▼</p>';

echo 'Ответ в файле';
/* 
   При использовании <?php - страница будет пустая, пока не вывести что либо на экран функцией echo.
   При использовании <?= - на экране будет видна операция в которой используется данная функция.
*/

echo '<br><br>';
// Задача 26 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 26 ▼</p>';

echo 'Вариант 1<br>';
define("DAYS_COUNT", "7");
define("MONTH_COUNT", "12");

echo 'Вариант 2';
const DAYS_COUNT2 = 7;
const MONTH_COUNT2 = 12;

echo '<br><br>';
// Задача 27 ===========================================================================
echo '<p style="color:#8e1717; text-transform: uppercase;">Задача 27 ▼</p>';

echo 'Сделано, нужна проверка';

?>
  </body>
</html>