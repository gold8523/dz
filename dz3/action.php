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
//    $stmt->bind_param('sis', $username, $age, $info);
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
    if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg"
        && $_FILES['picture']['type'] != "image/png") {
        echo  'error';
    } else {
        $uploads_dir = 'C:/OpenServer/domains/dz/dz3/photos';
        $tmp_name = $_FILES['picture']['tmp_name'];
        $name = $_POST['login'] . $_FILES['picture']['name'];
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
