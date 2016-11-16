<?php
$host = 'localhost';
$base = 'phpkurs';
$user = 'root';
$pass = '';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
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
<?php $sqlImgId = 'SELECT `img_id` FROM `images` WHERE `img_name` = ?'; ?>
<?php $stmt = $connection->prepare($sqlImgId); ?>
<?php for ($i = 0; $i < $len; $i++): ?>
    <form action="action.php" method="post">
        <?php if (isset($arrPic[$i])) : ?>
            <?php $imgName = $arrPic[$i]; ?>
            <?php $stmt->bind_param('s', $imgName); ?>
            <?php $stmt->execute(); ?>
            <?php $stmt->bind_result($imgName); ?>
            <?php $id =  mysqli_stmt_fetch($stmt); ?>
            <label><?php echo $arrPic[$i]; ?>
                <input type="hidden" name="id" value="<?php echo $imgName; ?>">
                <input type="hidden" name="old" value="<?php echo $arrPic[$i]; ?>">
                <input type="text" name="edit" value="<?php echo $arrPic[$i]; ?>">
            </label>
            <input type="submit" name="action" value="Переименовать">
            <input type="submit" name="action" value="Удалить"><br>
        <?php endif; ?>
    </form>
<?php endfor; ?>
<a href="index.php">Вернуться на главную</a>
</body>
</html>