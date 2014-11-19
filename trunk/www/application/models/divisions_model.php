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
        ORDER BY position
        ');
        if($id)
        {
            $data = array('id' => $id);
            return $this->get_row($stm, $data);
        }
        else
            return $this->get_all($stm);
    }

    public function getFullDivisions($alias = false)
    {
        $stm = $this->pdo->prepare('
        SELECT
            d.id id_division,
            d.name division_name,
            d.id_route division_route,
            sr1.alias division_alias,
            d.title division_title,
            d.keywords division_keywords,
            d.description division_description,
            s.id id_subdivision,
            s.id_division subdivision_division,
            s.name subdivision_name,
            s.id_route subdivision_route,
            sr2.alias subdivision_alias,
            s.title subdivision_title,
            s.keywords subdivision_keywords,
            s.description subdivision_description
        FROM
            divisions d
        LEFT JOIN
            subdivisions s
            ON d.id = s.id_division
        JOIN
            system_routes sr1
            ON sr1.id = d.id_route
        JOIN
            system_routes sr2
            ON sr2.id = s.id_route
        ' . ( $alias ? 'WHERE sr1.alias = :alias' : '' ) . '
        ORDER BY sr1.position, sr2.position
        ');

        if($alias)
        {
            $data = array('alias' => $alias);
            $tmp = $this->get_all($stm, $data);
        }
        else
            $tmp = $this->get_all($stm);
        $divisions = array();
        foreach($tmp as $v)
        {
            foreach($v as $key=>$row)
            {
                if(in_array($key, array('id_division', 'division_name', 'division_route',
                    'division_title', 'division_keywords','division_description', 'division_position', 'division_alias')))
                    $divisions[$v['id_division']][$key] = $row;
                else
                    $divisions[$v['id_division']]['subdivisions'][$v['subdivision_alias']][$key] = $row;
            }
        }
        if($alias)
        {
            return $divisions[key($divisions)];
        }
        else
            return $divisions;
    }
}