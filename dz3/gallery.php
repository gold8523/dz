<?php
$arrPic = scandir('photos');
$len = count($arrPic);
echo "<form action='functions.php' method='post'>";
for ($i = 2; $i < $len; $i++) {
    echo "<p>" . $arrPic[$i] . "<label><input type='hidden' name='$arrPic[$i]'></label>
        <label><input type='text' name='rename'><input type='submit' name='action' value='Переименовать'></label>
        <label><input type='submit' name='action' value='Удалить'></label></p>";
}
echo "</form>";

