<?php
if (!empty($_POST)) {
    $sqlUsers = 'insert into `users` (`username`, `age`, `info`) value (?, ?, ?)';
    $sqlLogin = 'insert into `login` (`login`, `pass`) value (?, ?)';

    $stmt = $connection->prepare($sqlUsers);

    $username = strip_tags($_POST['name']);
    $age = strip_tags($_POST['age']);
    $info = strip_tags($_POST['info']);

    $stmt->bind_param('ssi', $username, $age, $info);
    $stmt->execute();

    $stmt = $connection->prepare($sqlLogin);

    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);

    $stmt->bind_param('ss', $login, $pass);
    $stmt->execute();

    header('Location: .');
    exit();
}