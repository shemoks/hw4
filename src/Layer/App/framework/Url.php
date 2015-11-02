<?php
namespace Layer\App\framework;

use Layer\App\controllers\Error;
use Layer\App\controllers\Index;

class Url
{
    public function __construct($config)
    {
        $dir = __DIR__;
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if (isset($url[0]) && $url[0] == 'public') {
            $file = $dir . '/../' . $url[0] . '/' . $url[1] . '/' . $url[2];
        } else {
            $file = $dir . '/../controllers/' . $url[0] . '.php';
        }
        if (empty($url[0])) {
            $controller = new Index();
            $controller->index();
            return false;
        }

        if (file_exists($file)) {
            require $file;
        } else {
            new Error();
            return false;
        }
        if (!(isset($url[0]) && $url[0] == 'public')) {
            $controller = new $url[0];
            $controller->loadModel($url[0], $config);
            if (isset($url[2]) || isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}($url[2]);
                } elseif (method_exists($controller, 'index')) {
                    $controller->index($url[1]);
                } else {
                    echo 'Error!';
                }
            } else {
                if (isset($url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $controller->index();
                }
            }
        }
    }
}
