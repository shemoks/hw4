<?php

namespace Layer\Manager;

use PDO;
use Database;
/**
 * Class AbstractManager
 * @package Layer\Manager
 */
abstract class AbstractManager extends  PDO implements ManagerInterface
{
    public function insert($entity)
    {


    }
}
