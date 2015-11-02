<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 01.11.15
 * Time: 14:32
 */

namespace Layer\Models;

use Layer\Manager\ManagerInterface;
use PDO;

class Model extends BaseModel implements ManagerInterface
{
    /**
     * Insert new entity data to the DB
     * @param mixed $entity
     * @return mixed
     */
    public function insert($entity)
    {
        $query = parent::insert($entity);

        return $this->makeQuery($query);
    }

    /**
     * Update exist entity data in the DB
     * @param $entity
     * @return mixed
     */
    public function update($entity)
    {
        $query = parent::update($entity);

        return $this->makeQuery($query);
    }

    /**
     * Delete entity data from the DB
     * @param $entity
     * @return mixed
     */
    public function remove($entity)
    {
        $query = parent::remove($entity);

        return $this->makeQuery($query);
    }

    /**
     * Search entity data in the DB by Id
     * @param $entityName
     * @param $id
     * @return mixed
     */
    public function find($entityName, $id)
    {
        return parent::find($entityName, $id);
    }

    /**
     * Search all entity data in the DB
     * @param $entityName
     * @return array
     */
    public function findAll($entityName = '*')
    {
        $query = parent::findAll($entityName);

        return $this->getByQuery($query);
    }

    /**
     * Search all entity data in the DB like $criteria rules
     * @param $entityName
     * @param array $criteria
     * @return mixed
     */
    public function findBy($entityName, $criteria = [])
    {
        $query = parent::findBy($entityName, $criteria);

        return $this->getByQuery($query);
    }

    private function makeQuery($query)
    {
        $connect = $this->db;
        return $connect->prepare($query)->execute();
    }

    private function getByQuery($query)
    {
        /** @var Model $connect */
        $connect = $this->db;
        $result = $connect->query($query)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result)) {
            $query = "SHOW COLUMNS FROM " . $this->table;
            $columns = $connect->query($query)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($columns as $value) {
                $result[$value['Field']] = '';
            }
        }
        return $result;
    }
}