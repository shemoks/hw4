<?php

use Layer\App\framework\Controller;

class User extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = null)
    {
        if (!empty($id)) {
            $this->view->data = $this->model->findUserById($id);
        } else {
            $this->view->data = $this->model->findAllUsers();
        }

        $this->view->render('user/index');
    }

    public function addUser()
    {
        $data = $_POST['user'];
        /** @var \Layer\App\models\UserModel $model */
        $model = $this->model;
        $model->addUser($data);
        $this->view->redirect('user');
    }

    public function delete($id)
    {
        /** @var \Layer\App\models\UserModel $model */
        $model = $this->model;
        $model->deleteUser($id);
        $this->view->redirect('user');
    }

    public function update($id)
    {
        if (empty($_POST)) {
            $this->view->data = $this->model->findUserById($id);
            $this->view->render('user/edit');
        } else {
            $data = array_diff($_POST['user'], $_POST['oldAttributes']);
            if (!empty($data)) {
                $data['id'] = $id;
                $result = $this->model->updateUser($data);
                $this->view->data = $result;
            }
            $this->view->redirect('user');
        }
    }

    public function getByCondition()
    {
        if (isset($_POST)) {
            $data = array_filter($_POST['user']);
            $result = $this->model->selectByCondition($data, $_POST['selected']);
            $this->view->data = $result;
            $this->view->render('user/index');
        } else {
            $this->view->redirect('user');
        }
    }
}
