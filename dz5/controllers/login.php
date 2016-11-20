<?php
include dirname(__DIR__) . 'mainControl.php';
include  dirname(__DIR__) . '\views\login.html';
include  dirname(__DIR__) . '\models\modLogin.php';


print_r($_POST);

if (!empty($_POST['log'])) {
    $selLog = new modLogin();
    $selLog ->selectLog();
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