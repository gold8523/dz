<?php
include dirname(__DIR__) . 'mainControl.php';
include  dirname(__DIR__) . '\views\login.html';
include  dirname(__DIR__) . '\models\modLogin.php';

$selLog = new modLogin();
$log = $selLog ->selectLog1();
$log2 = $selLog ->selectLog2();
$log3 = $selLog ->selectLog3();

$len = count($log);

if (!empty($_POST['log'])) {
    while ($len > -1) {
        if ($log2[$len] == strip_tags($_POST['log']) && $log3[$len] == strip_tags($_POST['password'])) {
            header('Location: message.html');
            $mes = 'good';
            exit();
        }
        $len--;
    }
    $mes = 'Неверный логин или пароль!';
    include dirname(__DIR__) . '\views\message.html';
} else {
    $mes = 'Введите логин и пароль!';
    include dirname(__DIR__) . '\views\message.html';
}