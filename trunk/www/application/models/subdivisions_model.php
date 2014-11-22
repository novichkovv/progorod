<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.11.14
 * Time: 1:19
 */
class subdivisions_model extends model
{
    public function init()
    {
        $this->table = 'subdivisions';
    }
    public function getSubdivisionsWithRoute($id = false, $alias = false)
    {
        $stm = $this->pdo->prepare('
        SELECT
            sr.alias,
            sr.position,
            d.*
        FROM
            subdivisions d
        JOIN
            system_routes sr
            ON d.id_route = sr.id
        ' . ( $id ? 'WHERE d.id = :id' : '') . '
        ' . ( $alias ? 'WHERE sr.alias = :id' : '') . '
        ');
        if($id || $alias)
        {
            $data = array('id' => $id ? $id : $alias);
            return $this->get_row($stm, $data);
        }
        else
            return $this->get_all($stm);
    }

}