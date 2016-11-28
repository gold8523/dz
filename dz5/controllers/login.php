<?php
//include dirname(__DIR__) . '\mainControl.php';
//include dirname(__DIR__) . '\views\login.html';
session_start();
require dirname(__DIR__) . '/vendor/autoload.php';

if (!empty($_COOKIE['auth'])) {
    $_SESSION['auth'] = true;
}

$isAuth = !empty($_SESSION['auth']);

$selLog = new modLogin();
$logId = $selLog ->selectLog1();
$log = $selLog ->selectLog2();
$logPass = $selLog ->selectLog3();

if ($isAuth) {
    header("Location: lk.php");
    exit();
} else {
    if (!empty($_POST['log'])) {

//        $remoteIp = $_SERVER['REMOTE_ADDR'];
//        $gRecaptchaResponse = $_REQUEST['g-recaptcha-response'];
//        $secret ='6LfMIQ0UAAAAALN5yv0aY6kYwiNRZpI_yV75FCAB';
//
//        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
//        $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
//        if ($resp->isSuccess()) {
//            // verified!
//        } else {
//            $errors = $resp->getErrorCodes();
//        }

        $len = count($logId);
        while ($len > -1) {
            if ($log[$len] == strip_tags($_POST['log']) && $logPass[$len] == strip_tags($_POST['password'])) {
                if (!empty($_POST['remem'])) {
                    setcookie('auth', '1', time() + 1800, '/');
                }
                $_SESSION['auth'] = true;
                $_SESSION['user_id'] = $logId[$len];
                $_SESSION['login'] = $log[$len];
                $isAuth = $_SESSION['auth'];
                header('HTTP/1.1 404 Not Found');
                header('Location: lk.php');
                exit();
            }
            $len--;
        }
    }
}

