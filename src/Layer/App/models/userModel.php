<?php
namespace Layer\App\models;

use Layer\Models\Model;

class UserModel extends Model
{
    public $table = 'books';

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function findAllUsers()
    {
        return $this->findAll();
    }

    public function findUserById($id)
    {
        return $this->find('*', $id);
    }

    public function addUser($data)
    {
        return $this->insert($data);
    }

    public function deleteUser($id)
    {
        return $this->remove($id);
    }

    public function updateUser($data)
    {
        $this->id = $data['id'];
        return $this->update($data);
    }

    public function selectByCondition($data, $selected = '')
    {
        $rows = empty($selected) ? '*' : array_keys($selected);
        return $this->findBy($rows, $data);
    }
}
