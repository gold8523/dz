<?php

class Route
{

    public function start()
    {

        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $controller_name = $url[0];


        if (empty($url[0]) || $url[0] == 'index.php' || $url[0] == 'index.html') {
            $controller_dir = 'controllers/main.php';
                include $controller_dir;
        } else {
//            $controller_dir = 'controllers/' . $controller_name;
            if (file_exists($controller_name)) {
                include $controller_name;
            } else {
                $controller_name = 'controller_404.php';
                $controller_dir = 'controllers/' . $controller_name;
                include $controller_dir;
            }
        }
    }
}
