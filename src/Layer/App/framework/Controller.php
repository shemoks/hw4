<?php
namespace Layer\App\framework;

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($name, $config)
    {
        $dir = __DIR__;
        $path = $dir . '/../models/' . $name . 'Model.php';
        if (file_exists($path)) {
            $modelName = '\Layer\App\models\\' . $name . 'Model';
            $this->model = new $modelName($config);
        }
    }
}
