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
$len = count($arrPic);
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
<?php /** @var TYPE_NAME $arrId */
foreach ($arrId as $row) : ?>
    <?php $id = $row; ?>
    <form action="functions.php" method="post">
        <label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="edit" value="<?php ?>">
        </label>
        <input type="submit" name="action" value="Переименовать">
        <input type="submit" name="action" value="Удалить">
    </form>
<?php endforeach; ?>
<a href="index.php">Вернуться на главную</a>
</body>
</html>
