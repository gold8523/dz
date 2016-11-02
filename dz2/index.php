<?php
function anyStr ($arrStr) {
    var_dump($arrStr);
    foreach ($arrStr as $item) {
        echo "<p>". $item ."</p>";
    }
};
$a = ["Привет мир", "Hello world", "any string", "good day"];
anyStr($a);