<?php
include 'mainControl.php';
include 'models\modLogin.php';
include 'models\modForm.php';
include 'models\modLK.php';

$url = explode('/', $_SERVER['REQUEST_URI']);
$cont = new controllers();
if (empty($url[2]) || $url[2] == 'index.php' || $url[2] == 'index.html') {
    include 'views/index.html';
} else {
    $dir = explode('.', $url[2]);
    $contName = $url[2];
    if ($dir[1] == 'html') {
        $contName = 'views/' . $url[2];
        $cont->control($contName);
    } elseif ($dir[1] == 'php') {
        $contName = 'controllers/' . $url[2];
        $cont->control($contName);
    } else {
        switch ($dir[0]) {
            case 'lk' :
                include 'views/login.html';
                break;
            case  'login' :
            case 'form' :
                include 'views/' . $dir[0] . '.html';
                break;
            default :
                $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
                header('HTTP/1.1 404 Not Found');
                header('Status: 404 Not Found');
//            header('Location:'.$host.'404');
                header('Location: 404.html');
        }
    }
}
