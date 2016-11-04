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
//Задание 4
multiTable(4, 5);