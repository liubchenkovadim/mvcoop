<?php

$url = $_GET['url'];

$url = explode('/', $url);

if (empty($url[0])) {

    require 'controllers/main.php';;
    $controller = new Main();
    $controller->index();
} else {
    if (isset($url[0])) {

        $path = 'controllers/' . $url[0] . '.php';
        if (file_exists($path)) {
            require $path;
            $controller = new $url[0];
            if (isset($url[1])){
                $controller->{$url[1]}();
            }else {

            $controller->index();
            }

        } else {
            require 'controllers/main.php';;
            $controller = new Main();
            $controller->index();
        }
    }
}

