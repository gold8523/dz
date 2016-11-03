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
    switch ($n) {
        case '+':
            for ($i = 0; $i < $len; $i++) {
                $res = $arr[$i] + $res;
            }
            echo $res;
            break;
        default;
            echo 'D';
    }
};