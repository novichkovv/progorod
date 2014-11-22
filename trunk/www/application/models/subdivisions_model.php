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
    public function getSubdivisionsWithRoute($id = false)
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
        ');
        if($id)
        {
            $data = array('id' => $id);
            return $this->get_row($stm, $data);
        }
        else
            return $this->get_all($stm);
    }
    public function countSubdivisionsFirms($id_subdivision = false)
    {
        $stm = $this->pdo->prepare('
        select count(id) count from firms group by id_subdivision
        ' . ( $id_subdivision ? 'WHERE id_subdivision = :id_subdivision' :'' ) . '
        ');
        if($id_subdivision)
        {
            return $this->get_row($stm, array('id_subdivision' => $id_subdivision))['count'];
        }
        else
            return $this->get_all($stm);
    }

}