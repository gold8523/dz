<?php
// Задание 1
function anyStr ($arrStr, $b) {
    if ($b == true) {
        $ret = join(' ', $arrStr);
        return $ret;
    } else {
        foreach ($arrStr as $item) {
            echo "<p>". $item ."</p>";
        }
    }
};

//Задание 2
function anyMath ($arr, $n) {
    $len = count($arr);
    $res = $arr[0];
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
            echo 'D';
    }
};