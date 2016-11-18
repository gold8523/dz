<?php
$arr = [
    'one' => [
        'two' => [
            'three' => 123
        ]
    ]
];
$newArr = json_encode($arr);
file_put_contents('output.json', $newArr);

if (rand(0, 1) == 1) {
    $arr ['four'] = 1234;
    $secondArr = json_encode($arr);
    file_put_contents('output2.json', $secondArr);
} else {
    file_put_contents('output2.json', $newArr);
}
fopen('output.json', 'r');
fopen('output2.json', 'r');

$output = file_get_contents('output.json');
$output2 = file_get_contents('output2.json');
$json = json_decode($output, true);
$json2 = json_decode($output2, true);

if (($json === $json2) == 0) {
    echo 'Файлы отличаются';
} else {
    echo 'Файлы не отличаются';
}

