<?php
//include dirname(__DIR__) . '\mainControl.php';
//include dirname(__DIR__) . '\views\login.html';

$selLog = new modLogin();
$logId = $selLog ->selectLog1();
$log = $selLog ->selectLog2();
$logPass = $selLog ->selectLog3();
if (!empty($_POST['log'])) {

    $len = count($logId);
    while ($len > -1) {
        if ($log[$len] == strip_tags($_POST['log']) && $logPass[$len] == strip_tags($_POST['password'])) {
            header('HTTP/1.1 404 Not Found');
            header('Location: lk.html');
            exit();
        }
        $len--;
    }
    echo 'Неверный логин или пароль!';
} else {
    echo 'Введите логин и пароль!';
}


