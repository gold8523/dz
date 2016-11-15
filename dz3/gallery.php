<?php
$host = 'localhost';
$base = 'phpkurs';
$user = 'root';
$pass = '';

$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');

$sql = 'SELECT `img_id` FROM `images` ';
$result = $connection->query($sql);
$imgIdAll = $result->fetch_all(MYSQLI_ASSOC);
foreach ($imgIdAll as $value) {
    foreach ($value as $item) {
        $arrId [] = $item;
    }
}
$arrPic = scandir('photos');
array_shift($arrPic);
array_shift($arrPic);
$lenMax = max(count($arrPic), count($arrPic));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php for ($i = $lenMax; $i >= 0; $i--): ?>
    <form action="action.php" method="post">
        <?php if (isset($arrPic[$i])) : ?>
            <?php if (isset($arrId[$i])) : ?>
                <label><?php echo $arrPic[$i]; ?>
                    <input type="hidden" name="id" value="<?php echo $arrId[$i]; ?>">
                    <input type="hidden" name="old" value="<?php echo $arrPic[$i]; ?>">
                    <input type="text" name="edit" value="<?php echo $arrPic[$i]; ?>">
                </label>
                <input type="submit" name="action" value="Переименовать">
                <input type="submit" name="action" value="Удалить"><br>
            <?php endif; ?>
        <?php endif; ?>
    </form>
<?php endfor; ?>
<a href="index.php">Вернуться на главную</a>
</body>
</html>
<!--isset($arrId[$i]))$arrPic[$i]-->