<?php
$xml = simplexml_load_file('data.xml');
echo 'Номер заказа: ' . $xml["PurchaseOrderNumber"] . "<br>";
echo 'Дата заказа: ' . $xml["OrderDate"] . "<br>";
echo "<br>";


$addr = ['Имя: ', 'Улица: ', 'Город: ', 'Штат: ', 'Индекс: ', 'Страна: '];
$a =0;
foreach ($xml->Address as $address) {
    echo 'Тип: ' . $xml->Address[$a]["Type"] . "<br>";
    $i = 0;
    foreach ($address as $item) {
        echo $addr[$i] . $item . "<br>";
        $i++;
    }
    $a++;
    echo "<br>";
}

echo 'Комментарий к заказу: ' . $xml->DeliveryNotes[0] . "<br>";
echo "<br>";

$product = ['Название товара: ', 'Количество: ', 'Цена: ', 'Комментарий: '];
$n = 0;
foreach ($xml->Items->Item as $value) {
    echo 'Номер: ' . $xml->Items->Item[$n]["PartNumber"] . "<br>";
    $i = 0;
    foreach ($value as $item) {
        echo $product[$i] . $item . "<br>";
        $i++;
    }
    $n++;
    echo "<br>";
}