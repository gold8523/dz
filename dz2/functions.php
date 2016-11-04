<?php
// Задание 1
function anyStr ($arrStr, $b)
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
function anyMath ($arr, $n)
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
        for ($a = 1; $a <= $tr; $a++) {
            echo "<table border = '1px'>";
            echo "<tr>";
            for ($b = 1; $b <= $td; $b++) {
                $result = $a * $b;
                echo "<td width='50px'>$result</td>" . PHP_EOL;
            }
            echo "</tr>" . PHP_EOL;
            echo "</table>";
        }
    }
};