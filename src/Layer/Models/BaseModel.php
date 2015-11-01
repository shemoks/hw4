<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 01.11.15
 * Time: 13:32
 */

namespace Layer\Models;

use Layer\Manager\ManagerInterface;

class BaseModel extends Database implements ManagerInterface
{
    public $id;
    public $table;

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function setTable($table)
    {
        $this->table=$table;
    }

    /**
     * @param mixed $entity
     * @return string
     */
    public function insert($entity)
    {
        $query = 'INSERT INTO ';
        $query .= $this->table;
        $query .= ' ( ';
        $query .= implode(',', array_keys($entity));
        $query .= ' )';
        $query .= ' VALUES (';
        $query .= '"' . implode('","', $entity) . '"';
        $query .= ')';

        return $query;
    }

    /**
     * @param $entity
     * @return string
     */
    public function update($entity)
    {
        $count = 0;
        $query = 'UPDATE ';
        $query .= $this->table;
        $query .= ' SET ';
        foreach ($entity as $row => $data) {
            $count++;
            $query .= $row;
            $query .= ' = ';
            $query .= '"' . $data . '"';
            if (count($entity) > $count) {
                $query .= ',';
            }
        }
        $query .= ' WHERE ';
        $query .= ' id ';
        $query .= ' = ' . $this->id . ';';

        return $query;
    }

    /**
     * @param $entity
     * @return string
     */
    public function remove($entity)
    {
        $query = 'DELETE FROM ';
        $query .= $this->table;
        $query .= ' WHERE ';
        $query .= ' id ';
        $query .= ' = ' . $entity;
        $query .= ';';

        return $query;
    }

    /**
     * Search entity data in the DB by Id
     * @param $entityName
     * @param $id
     * @return mixed
     */
    public function find($entityName, $id)
    {
        $query = $this->findBy($entityName, ['id' => $id]);

        return $query;
    }

    /**
     * @param $entityName
     * @return string
     */
    private function getSelect($entityName)
    {
        if (is_array($entityName)) {
            $select = implode(',', $entityName);
        } else {
            $select = $entityName;
        }

        return $select;
    }

    public function findAll($entityName)
    {
        $query = 'SELECT ';
        $query .= $this->getSelect($entityName);
        $query .= ' FROM ';
        $query .= $this->table;

        return $query;
    }

    /**
     * Search all entity data in the DB like $criteria rules
     * @param $entityName
     * @param array $criteria
     * @return mixed
     */
    public function findBy($entityName, $criteria = [])
    {
        $count = 0;
        $query = 'SELECT ';
        $query .= $this->getSelect($entityName);
        $query .= ' FROM ';
        $query .= $this->table;
        $query .= ' WHERE ';
        foreach ($criteria as $row => $data) {
            $count++;
            $query .= '(' . $row . ' = "' . $data . '")';
            if (count($criteria) < $count) {
                $query .= ' AND ';
            }
        }

        return $query;
    }
}