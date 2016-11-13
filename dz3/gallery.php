<?php
$arrPic = scandir('photos');
$len = count($arrPic);
for ($i = 2; $i < $len; $i++) {
    echo "<p>" . $arrPic[$i] . "<label><input type='hidden' name='$item'></label>
        <label><input type='text' name='rename'><input type='submit' name='action' value='Переименовать'></label>
        <label><input type='submit' name='action' value='Удалить'></label></p>";
}

