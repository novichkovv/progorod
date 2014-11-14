<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.11.14
 * Time: 0:36
 */
class divisions_model extends model
{
    public function init()
    {
        $this->table = 'divisions';
    }
    public function getDivisionsWithRoute($id = false)
    {
        $stm = $this->pdo->prepare('
        SELECT
            sr.alias,
            sr.position,
            d.*
        FROM
            divisions d
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

    public function getFullDivisions()
    {
        $stm = $this->pdo->prepare('
        SELECT
            d.id id_division,
            d.name division_name,
            d.id_route division_route,
            d.title division_title,
            d.keywords division_keywords,
            d.description division_description,
            d.position division_position
            s.id id_subdivision,
            s.id_division subdivision_division,
            s.name subdivision_name,
            s.id_route subdivision_route,
            s.title subdivision_title,
            s.keywords subdivision_keywords,
            s.description subdivision_description,
            s.position subdivision_position

        ');
        $tmp = $this->get_all($stm);
        $divisions = array();
        foreach($tmp as $v)
        {
            foreach($v as $key=>$row)
            {
                if(in_array($key, array('id_division', 'division_name', 'division_route',
                    'division_title', 'division_keywords','division_description', 'division_position')))
                    $divisions[$v['id_region']][$key] = $row;
                else
                    $divisions[$v['id_region']]['cities'][$v['id_city']][$key] = $row;
            }
        }
        return $divisions;
    }
}