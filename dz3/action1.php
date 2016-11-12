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

if (!empty($_POST['log'])) {
    $sql = 'SELECT `user_id` FROM `login` ';
    $result = $connection->query($sql);
    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($loginAll as $value) {
        foreach ($value as $item) {
                $arrId [] = $item;
        }
    }
    $sql = 'SELECT `login` FROM `login` ';
    $result = $connection->query($sql);
    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($loginAll as $value) {
        foreach ($value as $item) {
            $arrLogin [] = $item;
        }
    }
    $sql = 'SELECT `pass` FROM `login` ';
    $result = $connection->query($sql);
    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($loginAll as $value) {
        foreach ($value as $item) {
            $arrPass [] = $item;
        }
    }
    $len = count($arrId);
    while ($len > -1) {
        if ($arrLogin[$len] == strip_tags($_POST['log']) && $arrPass[$len] == strip_tags($_POST['password'])) {
            header('Location: gallery.php');
            exit();
        }
        $len--;
    }
    echo 'Неверный логин или пароль!';
} else {
    echo 'Введите логин и пароль!';
}
