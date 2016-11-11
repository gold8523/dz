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
if (!empty($_POST)) {
    $sql = 'SELECT `login` FROM `login`';
    $result = $connection->query($sql);
    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($loginAll as $value) {
        foreach ($value as $item) {
            if ($item ==strip_tags($_POST['log'])) {
            $sql = 'SELECT `pass` FROM `login`';
            $newResult = $connection->query($sql);
            $newLoginAll = $newResult->fetch_all(MYSQLI_ASSOC);
                foreach ($newLoginAll as $value) {
                    foreach ($value as $item) {
                        if ($item == strip_tags($_POST['password'])) {
                            header('Location: gallery.php');
                            exit();
                        }
                    }
                }
            }
        }
    }
    echo 'Неверный логин или пароль!';
}