<?php
include 'functions.php';
// Задание 1
$a = ["Привет мир", "Hello world", "any string", "good day"];
$c = true;
echo anyStr($a, $c);
echo "<br>";
//Задание 2
$v = [1000, 2, 4, 5, 5];
$d = '+';
anyMath($v, $d);
echo "<br>";
//Задание 3
calcEverything('+', 1, 2, 3, 5.2);
echo "<br>";
//Задание 4
multiTable(12, 10);
echo "<br>";
//Задание 5
//result(pal('Live not on evil'));
result(pal('Кони топот инок'));
echo "<br>";
//Задание 6
myTime();
echo "<br>";
//Задание 7
$str1 = 'Карл у Клары украл Кораллы';
$str2 = 'Две бутылки лимонада';
anyString($str1);
anyStrin($str2);
echo "<br>";
//Задание 8
reG('RX packets:950381 errors:0 dropped:0 overruns:0 frame:0. :)');
echo "<br>";
//Задание 9
openFile();
echo "<br>";
//Задание 10