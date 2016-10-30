<?php
// Задание 1
$name = 'Денис';
$age = 26;
echo 'Меня зовут: ' . $name . "<br>";
print "Мне $age лет" . "<br>";
echo '"!|\\/\'"\\' . "<br>";
echo "<br>";

// Задание 2
$pictures = 80;
$felt = 23;
$pencil = 40;

$paints = $pictures - ($felt + $pencil);
echo "На школьной выставке $pictures рисунков. $felt из них выполнены фломастерами, $pencil карандашами, а остальные — красками. 
Сколько рисунков, выполненные красками, на школьной выставке?"."<br>";
echo 'Решение: '.$pictures.' - '."($felt + $pencil)".' = '.$paints;

echo "<br>";
echo "<br>";

// Задание 3
define ("const1",'Hello World!',true) ;
echo defined('const1') . "<br>";
echo  const1;

echo "<br>";
echo "<br>";

// Задание 4
$age = '34';
echo $age . "<br>";
if (18 <= $age and $age <= 65) {
    echo 'Вам   еще работать   и   работать';
} elseif ($age > 65 ) {
    echo 'Вам   пора   на   пенсию';
} elseif (1 <= $age and $age <= 17) {
    echo 'Вам   ещё   рано   работать';
} else {
    echo 'Неизвестный   возраст';
}

echo "<br>";
echo "<br>";

// Задание 5
$day = 7;
echo $day . "<br>";
switch ($day) {
    case (1);
        echo 'Это рабочий день';
        break;
    case (2);
        echo 'Это рабочий день';
        break;
    case (3);
        echo 'Это рабочий день';
        break;
    case (4);
        echo 'Это рабочий день';
        break;
    case(5);
        echo 'Это рабочий день';
        break;
    case (6);
        echo 'Это выходной день';
        break;
    case (7);
        echo 'Это выходной день';
        break;
    default;
        echo 'Неизвестный день';
}
?>