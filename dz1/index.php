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
define ("CONST1",'Hello World!',true) ;
echo defined('CONST1') . "<br>";
echo  CONST1;

echo "<br>";
echo "<br>";

// Задание 4
$age = '34';
echo $age . "<br>";
if ($age >= 18 and $age <= 65) {
    echo 'Вам   еще работать   и   работать';
} elseif ($age > 65 ) {
    echo 'Вам   пора   на   пенсию';
} elseif ($age >= 1 and $age <= 17) {
    echo 'Вам   ещё   рано   работать';
} else {
    echo 'Неизвестный   возраст';
}

echo "<br>";
echo "<br>";

// Задание 5
$day = 4;
echo $day . "<br>";
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default;
        echo 'Неизвестный день';
}

echo "<br>";
echo "<br>";

// Задание 6
$bmw =[
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015,
];
$toyota = [
    'model' => 'Camry',
    'speed' => 150,
    'doors' => 5,
    'year' => 2016,
];
$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 3,
    'year' => 2013
];
$car = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];
foreach ($car as $key => $value) {
    echo "<br>" . 'CAR ' . $key  . "<br>";
    foreach ($value as $item) {
        echo $item . ' ';
    }
}

echo "<br>";
echo "<br>";


// Задание 7
for ($a = 1; $a <= 10; $a++) {
    echo "<table border = '1px'>";
    echo "<tr>";
    for ($b = 1; $b <= 10; $b++) {
        $result = $a * $b;
        if ($a % 2 == 0 and $b % 2 == 0) {
            echo "<td width='50px'>( $result )</td>" . PHP_EOL;
        } elseif ($a % 2 == 1 and $b % 2 == 1 ) {
            echo "<td width='50px'>[ $result ]</td>" . PHP_EOL;
        } else {
            echo "<td width='50px'>$result</td>" . PHP_EOL;
        }
    }
    echo "</tr>" . PHP_EOL;
    echo "</table>";
};

echo "<br>";
echo "<br>";

// Задание 8
$str = 'Привет мир меня зовут Денис трава море солнце песок автомобиль';
echo $str . "<br>";

$arr = explode(' ', $str);
print_r($arr);
echo "<br>";

$len = count($arr);
$arrRew = [];
while ($len > -1) {
    if (!empty($arr[$len])) {
        $arrRew [] = $arr[$len];
    }
    $len--;
};
print_r($arrRew);
echo "<br>";

$strRew = join(' | ', $arrRew);
echo $strRew;

?>