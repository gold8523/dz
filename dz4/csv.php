<?php
$num = [];
for ($i = 0 ; $i <= 55; $i++) {
    $num [] = rand(1, 100);
}

$newCsv = fopen('num.csv', 'w+');
fputcsv($newCsv, $num);
fclose($newCsv);

$anyCsv = fopen('num.csv', 'r');
$csv1 = fgetcsv($anyCsv);

$sum = 0;
foreach ($csv1 as $item) {
    if (($item % 2) == 0) {
        $sum = $sum + $item;
    }
}

echo $sum;