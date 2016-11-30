<?php
session_start();
require dirname(__DIR__) . '/controller.php';
require dirname(__DIR__) . '/models/model_lk.php';

$selUser = new Model_Lk();

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

    $resMod[0] = $img;
    $resMod[5] = $id;

    $ageUsers = [];
    $len = count($arrAge);
    while ($len > 0) {
        if (($arrAge[$len - 1]) > 18) {
            $ageUsers [] = $arrAge[$len - 2] . ' ' . $arrAge[$len - 1] . '- совершеннолетний';
        } else {
            $ageUsers [] = $arrAge[$len - 2] . ' ' . $arrAge[$len - 1] . '- не совершеннолетний';
        }
        $len = $len - 2;
    }

    $resMod[1] = $ageUsers;

    $control = new Controller();
    $content_view = 'lk_view.php';
    $name = 'template_view.php';
    $data = $resMod;
    $control->render($content_view, $name, $data);

} else {
    header("Location: login.php");
    exit();
}
