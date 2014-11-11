<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 07.10.14
 * Time: 21:32
 */
abstract class abstractDb extends PHPUnit_Extensions_Database_TestCase
{
    static private $pdo = null;
    public $conn = null;
    /**
     *  @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    final public function getConnection()
    {
//        if($this->conn === null)
//        {
//            if(self::$pdo == null)
//            {
                self::$pdo =  new PDO(DBTYPE . ":host=" . HOST . ";dbname=" . DEFAULT_DB . ';charset=utf8', DB_USER, DB_PASSWORD);
                self::$pdo -> exec("SET CHARACTER SET utf8");
                $this->conn = $this->createDefaultDBConnection(self::$pdo,'engine');
//            }
//        }
        return $this->conn;
    }
}