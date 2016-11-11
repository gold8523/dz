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
    $sql = 'SELECT * FROM `login`';
    $result = $connection->query($sql);
    $loginAll = $result->fetch_all(MYSQLI_ASSOC);
    echo '<pre>' . print_r($loginAll, true). '</pre>';
}