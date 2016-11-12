<?php
echo 'Any picture';
$arrPic = scandir('photos');
foreach ($arrPic as $item) {
    echo $item;
}