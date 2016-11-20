<?php
include 'mainControl.php';
include  dirname(__FILE__) . '\models\modLogin.php';
include  'mainModel.php';
//$selLog = new modLogin();
//$selLog ->selectLog();
$con = new Mymodel();
$con->dbConnection();
var_dump($con);
//$url = explode('/', $_SERVER['REQUEST_URI']);
//if (empty($url[2]) || $url[2] == 'index.php') {
//    include 'views/index.html';
//} elseif (!empty($url[2])) {
//    $cont = new controllers();
//    $contName = $url[2];
//    $dir = explode('.', $url[2]);
//    if ($dir[1] == 'html') {
//        $contName = 'views/' . $url[2];
//    } else {
//        $contName = 'controllers/' . $url[2];
//    }
//    $cont->control($contName);
//} else {
//    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
//    header('HTTP/1.1 404 Not Found');
//    header('Status: 404 Not Found');
////    header('Location:'.$host.'404');
//    header('Location: 404.html');
//}

