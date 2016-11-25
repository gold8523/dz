<?php
session_start();
$selUser = new modLk();

if (!empty($_COOKIE['auth'])) {
    $_SESSION['auth'] = true;
}

$isAuth = !empty($_SESSION['auth']);

if ($isAuth) {
    $userId = $_SESSION['user_id'];
    $sel = $selUser->selectUser($userId);

} else {
    header("Location: login.php");
    exit();
}
