<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 16.11.14
 * Time: 0:53
 */
class malls_model extends model
{
    public function getMall($id)
    {
        $stm = $this->pdo->prepare('
        SELECT
            f.id,
            f.name,
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
            w.work_to
        FROM
            malls f
                JOIN
            address_groups ag ON ag.id_firm = f.id AND ag.type = 1
                JOIN
            streets s ON ag.id_street = s.id
                JOIN
            buildings b ON b.id = ag.id_building
                JOIN
            workdays_groups wg ON wg.id_address_group = ag.id
                JOIN
            workdays w ON wg.id_workday = w.id
        WHERE
            f.id = :id
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
                $firm['address']['workdays'][$v['id_workday']][$key] = $row;
            }
            else
                $firm['address'][$key] = $row;
        }
        return $firm;
    }

    public function getUserMalls($creator,$limit)
    {
        $stm = $this->pdo->prepare('
        SELECT
            *
        FROM
            malls
        WHERE
            creator = :creator
        LIMIT '. $limit.'
        ');
        $tmp = $this->get_all($stm, array('creator' => $creator));
        return $tmp;
    }
}