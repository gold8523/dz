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
echo $paints;

echo "<br>";
echo "<br>";

// Задание 3
define ("const1",'Hello World!',true) ;
echo defined('const1') . "<br>";
echo  const1;

echo "<br>";
echo "<br>";

// Задание 4
$age = 34;
if (18 <= $age and $age <= 65) {
    echo 'Вам   еще работать   и   работать';
} elseif ($age > 65 ) {
    echo 'Вам   пора   на   пенсию';
} else {
    echo 'Вам   ещё   рано   работать';
}
?>