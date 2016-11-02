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