<?php

$url = $_GET['url'];

$url = explode('/', $url);

if (empty($url[0])) {

    require 'controllers/main.php';;
    $controller = new Main();
    $controller->loadModel('main');
} else {
    if (isset($url[0])) {

        $path = 'controllers/' . $url[0] . '.php';
        if (file_exists($path)) {
            require $path;
            $controller = new $url[0];
            $controller->loadModel($url[0]);


        } else {
            require 'controllers/main.php';;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->index();
        }
    }

    if (!empty($url[2])){

        if (method_exists($controller, $url[1])){
            $controller->{$url[1]}($url[2]);
        } else {
            $controller->index();
        }
    } else {
        if (!empty($url[1])){

            if (method_exists($controller, $url[1])){
                $controller->{$url[1]}();
            } else {
                $controller->index();
            }
    } else {
            $controller->index();
        }
    }
}

