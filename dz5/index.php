<?php
include 'mainControl.php';
include  'models\modLogin.php';

$url = explode('/', $_SERVER['REQUEST_URI']);
$cont = new controllers();
if (empty($url[2]) || $url[2] == 'index.php' || $url[2] == 'index.html') {
    include 'views/index.html';
} else {
    $dir = explode('.', $url[2]);
    switch ($dir[1] != '') {
        case  'login' :
        case 'form' :
        case 'lk' :
            $contName = $url[2];
            if ($dir[1] == 'html') {
                $contName = 'views/' . $url[2];
            } else {
                $contName = 'controllers/' . $url[2];
            }
            $cont->control($contName);
            break;
        default :
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header('Status: 404 Not Found');
//            header('Location:'.$host.'404');
            header('Location: 404.html');
    }
}
