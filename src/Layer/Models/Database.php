<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 31.10.15
 * Time: 0:16
 */

namespace Layer\Models;

use Layer\Connector\ConnectorInterface;
use PDO;
use PDOException;

class Database extends PDO implements ConnectorInterface
{
    private $host;
    private $user;
    private $dbName;
    private $password;
    public $db;

    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->host = $config['host'];
        $this->user = $config['db_user'];
        $this->dbName = $config['db_name'];
        $this->password = $config['db_password'];
        try {
            $this->connect($this->getDsn(), $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * @return string
     */
    private function getDsn()
    {
        return 'mysql:dbname=' . $this->dbName . ';host=' . $this->host;
    }

    /**
     * @param $host
     * @param $user
     * @param $password
     * @return PDO
     */
    public function connect($host, $user, $password)
    {
        $this->db = new PDO($host, $user, $password);
        return $this->db;
    }

    /**
     * @param $db
     * @return null
     */
    public function connectClose($db)
    {
        $this->db = null;
        return $this->db;

    }
}