<?php
include 'mainControl.php';
include 'models\modLogin.php';
include 'models\modForm.php';
include 'models\modLK.php';

$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/', $url);
$cont = new controllers();

if (empty($url[0]) || $url[0] == 'index.php' || $url[0] == 'index.html') {
    include 'views/index.html';
} else {
    switch ($url[0]) {
        case 'login.html' :
        case 'form.html' :
            $contName = 'views/' . $url[0];
            $cont->control($contName);
            break;
        case 'login.php' :
        case 'form.php' :
        case 'lk.php' :
        case 'addImg.php' :
        case 'mailer.php' :
        case 'renameImg.php' :
            $contName = 'controllers/' . $url[0];
            $cont->control($contName);
            break;
        default :
            $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
            header('HTTP/1.1 404 Not Found');
            header('Status: 404 Not Found');
//            header('Location:'.$host.'404');
            header('Location: 404.html');
            break;
        }
//    $dir = explode('.', $url[2]);

}
//    if ($dir[1] == 'html') {
//        $contName = 'views/' . $url[2];
//        $cont->control($contName);
//    } elseif ($dir[1] == 'php') {
//        $contName = 'controllers/' . $url[2];
//        $cont->control($contName);
//    } else {
//
//    }
//}
