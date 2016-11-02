<?php
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
$a = ["Привет мир", "Hello world", "any string", "good day"];
$c = true;
echo anyStr($a, $c);
