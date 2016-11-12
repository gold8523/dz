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
//    $sqlUsers = 'insert into `users` (`username`, `age`, `info`) value (?, ?, ?)';
//    $sqlLogin = 'insert into `login` (`login`, `pass`) value (?, ?)';
//
//    $stmt = $connection->prepare($sqlUsers);
//
//    $username = strip_tags($_POST['name']);
//    $age = strip_tags($_POST['age']);
//    $info = strip_tags($_POST['info']);
//
//    $stmt->bind_param('ssi', $username, $age, $info);
//    $stmt->execute();
//
//    $stmt = $connection->prepare($sqlLogin);
//
//    $login = strip_tags($_POST['login']);
//    $pass = strip_tags($_POST['pass']);
//
//    $stmt->bind_param('ss', $login, $pass);
//    $stmt->execute();
//
//    header('Location: .');
//    exit();
//    print_r($_POST['picture']);

    $f = move_uploaded_file($_FILES['picture']['name'], '/photos');
    var_dump($f);
}
