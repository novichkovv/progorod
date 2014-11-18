<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 16.11.14
 * Time: 0:53
 */
class firms_model extends model
{
    public function getFirm($id)
    {
        $stm = $this->pdo->prepare('
        SELECT
            f.id,
            f.name,
            f.id_subdivision,
            f.short_description,
            f.site,
            f.description,
            ag.id id_address,
            ag.phone,
            s.name street,
            b.name building,
            w.id id_workday,
            w.always,
            w.daily,
            w.weekday,
            w.work_from,
            w.work_to,
            m.id id_mall,
            m.name mall_name,
            m.short_description mall_short
        FROM
            firms f
        JOIN
            address_groups ag ON ag.id_firm = f.id AND ag.type = 0
        JOIN
            streets s ON ag.id_street = s.id
        JOIN
            buildings b ON b.id = ag.id_building
        JOIN
            workdays_groups wg ON wg.id_address_group = ag.id
        JOIN
            workdays w ON wg.id_workday = w.id
        LEFT JOIN malls m ON ag.id_mall = m.id
        WHERE
            f.id = :id
        ORDER by ag.id
        ');
        $tmp = $this->get_all($stm, array('id' => $id));
        $firm = array();
        foreach($tmp as $k => $v)
        {
            foreach($v as $key => $row)
            if(in_array($key, array('id','name','subivision','short_description','description','site')))
                $firm[$key] = $row;
            elseif(in_array($key,array('always','daily','weekday','work_from','work_to')))
            {
                $firm['address'][$v['id_address']]['workdays'][$v['id_workday']][$key] = $row;
            }
            else
                $firm['address'][$v['id_address']][$key] = $row;
        }
        return $firm;
    }
}