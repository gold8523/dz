<?php
// Задание 1
/** @noinspection PhpInconsistentReturnPointsInspection
 * @param $arrStr
 * @param $b
 * @return string
 */
function anyStr($arrStr, $b)
{
    if ($b == true) {
        $ret = join(' ', $arrStr);
        return $ret;
    } else {
        foreach ($arrStr as $item) {
            echo "<p>" . $item . "</p>";
        }
    }
};
//Задание 2
function anyMath($arr, $n)
{
    $len = count($arr);
    $res = $arr[0];
    for ($i = 0; $i < $len; $i++) {
        $in = $arr[$i];
        $gt = gettype($in);
        if ($gt != 'integer' && $gt != 'double') {
            echo 'Должны быть только числа ';
            return;
        }
    }
    switch ($n) {
        case '+':
            for ($i = 1; $i < $len; $i++) {
                $res = $res + $arr[$i];
            }
            echo $res;
            break;
        case '-':
            for ($i = 1; $i < $len; $i++) {
                $res = $res - $arr[$i];
            }
            echo $res;
            break;
        case '*':
            for ($i = 1; $i < $len; $i++) {
                $res = $res * $arr[$i];
            }
            echo $res;
            break;
        case '/':
            for ($i = 1; $i < $len; $i++) {
                $res = $res / $arr[$i];
            }
            echo $res;
            break;
        default;
            echo 'Должен быть указан знак математической операции ';

    }
};
//Задание 3
function calcEverything()
{
    $one = func_get_arg(0);
    $arrAgr = func_get_args();
    $len = count($arrAgr);
    $res = func_get_arg(1);
    switch ($one) {
        case '+':
            for ($i = 2; $i < $len; $i++) {
                $res = $res + $arrAgr[$i];
            }
            echo $res;
            break;
        case '-':
            for ($i = 2; $i < $len; $i++) {
                $res = $res - $arrAgr[$i];
            }
            echo $res;
            break;
        case '*':
            for ($i = 2; $i < $len; $i++) {
                $res = $res * $arrAgr[$i];
            }
            echo $res;
            break;
        case '/':
            for ($i = 2; $i < $len; $i++) {
                $res = $res / $arrAgr[$i];
            }
            echo $res;
            break;
        default;
            echo 'Сначала укажите знак математической операции';

    }
}
//Задание 4
function multiTable($tr, $td) {
    if (gettype($tr) != 'integer' || gettype($td) != 'integer') {
        echo 'Error';
    } else {
        echo "<table border = '1px'>";
        for ($a = 1; $a <= $tr; $a++) {
            echo "<tr>";
            for ($b = 1; $b <= $td; $b++) {
                $result = $a * $b;
                echo "<td width='50px'>$result</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
};
//Задание 5
function pal($str) {
    $str = strtolower($str);
    //$arrStr = explode(' ', $str);
    //$newStr = join('', $arrStr);
    //$strRev = strrev($newStr);
    $arrStr =  preg_split('//u', $str);
    $len = count($arrStr);
    $arrRew = [];
    while ($len > -1) {
        $arrRew [] = $arrStr[$len];
        $len--;
    };
    $newStr = join('', $arrRew);
    if ($newStr != $str) {
        return false;
    } else {
        return true;
    }
};
function result($d) {
    if ($d == true) {
        echo 'Строка, одинаково читающаяся в обоих направлениях.';
    } else {
        echo 'Строка, одинаково не читающаяся в обоих направлениях.';
    }
};
//Задание 6
function myTime() {
    echo date('d.m.Y H:i'). "<br>";
    echo mktime(0, 0, 0, 02, 24, 16);
}
//Задание 7
function anyString($any) {
    $newAny = str_replace('К', '', $any);
    echo $newAny . "<br>";
}
function anyStrin($one) {
    $newOne = str_replace('Две', 'Три', $one);
    echo $newOne;
}
//Задание 8
function sm() {
    $smile = "████████████████████████████████████████<br>
█████████████▀▀░░░░░░░░░░▀▀▀████████████<br>
█████████▀▀░░░░░░░░░░░░░░░░░░░▀█████████<br>
███████▀░░░░░░░░░░░░░░░░░░░░░░░░▀███████<br>
█████▀░▄▄▄░░░░░░░░░░░░░░▄▄▄▄░░░░░░▀█████<br>
████▀▄▀░░░██▄░░░░░░░░░▄▀░░░▄██▄░░░░░████<br>
███▀█░░░░█████░░░░░░░█░░░░░█████░░░░░███<br>
██▀░█░░░░░░░░█░░░░░░▄░░░░░░░░░░█░░░░░▀██<br>
██░░█░░░░░░░░█░░░░░░▀▄░░░░░░░░░█░░░░░░██<br>
██░░▀▀▀▀▀▀▀▀▀▀░░░░░░░▀▀▀▀▀▀▀▀▀▀▀░░░░░░██<br>
██░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░██<br>
██░░░▀█████████████████████████▄░░░░░░██<br>
██▄░░░▀█████████████████████████░░░░░▄██<br>
███▄░░░█████████████████████████░░░░░███<br>
████▄░░░███████████▀▀▀▀▀▀██████░░░░░████<br>
█████▄░░░▀███████▀░░░░░░░░░▀██░░░░▄█████<br>
███████▄░░░▀████░░░░░░░░░░▄█▀░░░▄███████<br>
█████████▄░░░▀▀█▄▄▄▄▄▄▄▄▀▀░░░░▄█████████<br>
████████████▄▄▄░░░░░░░░░░▄▄▄████████████<br>
████████████████████████████████████████";
    echo $smile;
}
function reG($st) {
    preg_match('/[0-9]+\s/', $st, $resReg);
    $newRes = $resReg[0];
    $regTwo = preg_match('/:\)/', $st);
    if ($regTwo == true) {
        echo sm();
    } elseif ($newRes > 1000) {
        echo 'Сеть есть';
    }
}
//Задание 9
function openFile() {
    $fop = fopen('text.txt', 'r');
    if (!empty($fop)) {
        $fre = fread($fop, filesize('text.txt'));
    }
    echo $fre;
}
//Задание 10
function newFile() {
    $anytext = 'Hello again!!';
    $newf = fopen('newtext.txt', 'w+');
    fwrite($newf, $anytext);
    readfile('newtext.txt');
}