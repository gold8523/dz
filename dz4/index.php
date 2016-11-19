<?php
$xml = simplexml_load_file('data.xml');
echo "<h3>" . 'Номер заказа: ' . $xml["PurchaseOrderNumber"] . "</h3>";
echo "<h4>" . 'Дата заказа: ' . $xml["OrderDate"] . "</h4>";
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

echo "<p><strong>Комментарий к заказу: </strong>" . $xml->DeliveryNotes[0] ."</p>";


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