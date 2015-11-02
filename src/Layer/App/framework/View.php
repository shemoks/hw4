<?php
namespace Layer\App\framework;

class View
{
    public $data = [];

    public function render($name, $noInclude = false)
    {
        $dir = __DIR__;
        if ($noInclude == true) {
            require $dir . '/../views/' . $name . '.php';
        } else {
            require $dir . '/../views/layout.php';
            require $dir . '/../views/header.php';
            require $dir . '/../views/' . $name . '.php';
        }
    }

    public function redirect($name)
    {
        header('Location: /' . $name);
    }
}
