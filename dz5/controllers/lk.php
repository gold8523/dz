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

    $resMod = [];
    foreach ($sel as $item) {
        $resMod [] = $item;
    }
    $images = $resMod[0];
    $arrAge = $resMod[1];
    $userName = $resMod[2];
    $userAge = $resMod[3];
    $userInfo = $resMod[4];

    $userIm = 'images/' . $images[0];

    $img = [];
    $id = [];
    $len = count($images);
    while ($len > -1) {
        if (!empty($images[$len])) {
            $gt = gettype($images[$len]);
            if ($gt == 'integer') {
                $id [] = $images[$len];
            } else {
                $img [] = $images[$len];
            }
        }
        $len--;
    }

    $i = 0;

    $ageUsers = [];
    $len = count($arrAge);
    while ($len > 0) {
        if (($arrAge[$len - 1]) > 18) {
            $ageUsers [] = $arrAge[$len - 2] . ' ' . $arrAge[$len - 1] . '- совершеннолетний';
        } else {
            $ageUsers [] = $arrAge[$len - 2] . ' ' . $arrAge[$len - 1] . '- не совершеннолетний';
        }
        $len = $len-2;
    }

    include dirname(__DIR__) . '\views\lk.php';

} else {
    header("Location: login.php");
    exit();
}
