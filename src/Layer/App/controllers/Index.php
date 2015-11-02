<?php
namespace Layer\App\controllers;

use Layer\App\framework\Controller;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('index/index');
    }
}
