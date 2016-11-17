<?php
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
$mercedes = [
    'model' => 'G500',
    'speed' => '200',
    'doors' => '5',
    'year' => '2002',
];
$car = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

file_put_contents('output.json', $car);

if (rand(0,1) == 1) {
    $car ['mercedes'] = $mercedes;
    file_put_contents('output2.json', $car);
}
print_r(json_encode($car));