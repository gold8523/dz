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
    $sql = 'SELECT `user_id` FROM `login`';
    $result = $connection->query($sql);
    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($loginAll as $value) {
        foreach ($value as $item) {
            $sql = 'SELECT `login`, `pass` FROM `login`';
            $result = $connection->query($sql);
            $loginAll = $result->fetch_all(MYSQLI_ASSOC);
        }
    }
}
echo 'Неверный логин или пароль!';