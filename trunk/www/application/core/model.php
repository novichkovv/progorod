<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 02.10.14
 * Time: 20:19
 */
class model
{
    protected $db;
    public  $table;
    protected $pdo;
    public $model;
    protected function init(){}
    function __construct($table = false, $db = false)
    {
        /**
         * connecting to database
        */
        $db ? $this->db = $db : $this->db = DEFAULT_DB;
        $dsn = DBTYPE . ':host=' . HOST . ';dbname=' . ( $this->db ? $this->db : DEFAULT_DB );// . ';charset=' . CHARSET;
        $this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_ORACLE_NULLS ,PDO::NULL_TO_STRING);
        $this->pdo->exec("SET NAMES utf8");
        /*
         *  getting model and table
         */

        $this->table =  $table;
        $this->init();
    }
    protected function get_all($stm, array $data = array())
    {
        ($data ? $stm->execute($data) : $stm->execute());
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $res = array();
        while($row = $stm->fetch())
            $res[] = $row;
        return $res;
    }
    protected function get_row($stm, array  $data = array())
    {
        $data ? $stm->execute($data) : $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        return $stm->fetch();
    }
    public function getAll($order = "", $limit = "", $show = false)
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $this->table .
            ( $order ? ' ORDER BY ' . $order : '' ) .
            ( $limit ? ' LIMIT ' . $limit : '' )
        );
        if($show)echo $stm->queryString;
        return $this->get_all($stm);
    }
    public function getRow()
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $this->table);
        return $this->get_row($stm);
    }
    public function insert(array $row, $show = false)
    {
        if(isset($row['id']))
        {
            $id = $row['id'];
            unset($row['id']);
        }
        $rows = array();
        $names = array();
        $data = array();
        foreach($row as $k=>$v)
        {
            $rows[] = '`' . $k . '`';
            $names[] = ':' . $k;
            $data[] = $k . " = :" . $k;

        }
        if(isset($id))
        {
            $stm = $this->pdo->prepare(
                'UPDATE ' . $this->table . ' SET ' . implode(', ', $data) . ' WHERE id = :id'
            );
            $row['id'] = $id;
        }
        else $stm = $this->pdo->prepare(
                'INSERT INTO ' . $this->table . ' (' . implode(', ', $rows) . ') VALUES ( ' . implode(', ', $names) . ')'
        );
        $stm->execute($row);
        if($show)echo $stm->queryString;
        if(!empty($id))return $id;
        return $this->pdo->lastInsertId();
    }
    public function getById($id)
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
        return $this->get_row($stm, array($id));
    }
    public function getByField($field, $value, $show_all = false, $order = "", $limit = '', $show = false)
    {
        $stm = $this->pdo->prepare(
            'SELECT * FROM
        ' . $this->table . ' WHERE ' . $field . ' = ?'
        . ( $order ? ' ORDER BY ' . $order : '')
        . ( $limit ? ' LIMIT ' . $limit : '')
        );
        if($show_all)
            $result = $this->get_all($stm, array($value));
        else
            $result = $this->get_row($stm, array($value));
        if($show)echo $stm->queryString;
        return $result;
    }
    public function deleteById($id, $show = false)
    {
        if($id == '')return;
        $stm = $this->pdo->prepare('
        DELETE FROM ' . $this->table . ' WHERE id = :id
        ');
        if($show)echo $stm->queryString;
        if($stm->execute(array('id'=>$id)))
            return true;
        else
            return false;
    }
    public function delete($field, $value, $show = false)
    {
        $stm = $this->pdo->prepare('
        DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :' . $field . '
        ');
        if($show)echo $stm->queryString;
        if($stm->execute(array($field => $value)))
            return true;
        else
            return false;
    }

    public function deleteAll($show = false)
    {
        $stm = $this->pdo->prepare('
        DELETE FROM ' . $this->table . '
        ');
        if($show)echo $stm->queryString;
        if($stm->execute())
            return true;
        else
            return false;
    }

    public function countByField($field, $value)
    {
        $stm = $this->pdo->prepare('
        SELECT COUNT(id) count FROM ' . $this->table . ' WHERE ' . $field . ' = :' .$field . '
        ');
        return $this->get_row($stm, array($field => $value))['count'];
    }

}