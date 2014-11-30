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
        ORDER BY ag.id, w.weekday
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

    public function getMalls($params)
    {
        $data = array();
        if($params['workdays'])
        {
            $data['work_to'] = ($params['workdays']['work_to'] == '0' ? '23:59:59' : $params['workdays']['work_to'] . ':00:00');
            $data['weekday'] = $params['workdays']['weekday'];
            if($params['workdays']['work_to'] > 9)
            {
                $term = 'w.always = "1" OR (w.daily = "1" AND w.work_to >= :work_to) OR (w.weekday = :weekday AND w.work_to >= :work_to)';
            }
            else
                $term = 'w.always = "1" OR (w.daily = "1" AND w.work_to >= :work_to AND w.work_from = "00:00:00") OR (w.weekday = :weekday AND w.work_to >= :work_to  AND w.work_from = "00:00:00")';
        }
        $stm = $this->pdo->prepare('
        SELECT
            f.id id_firm,
            f.name,
            f.short_description,
            f.site,
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
            w2.id id_workday,
            w2.always,
            w2.daily,
            w2.weekday,
            w2.work_from,
            w2.work_to
        ' . ( $params['location'] ? ', geodist(' . $params['location']['latitude'] . ',' . $params['location']['longitude'] . ',ag.latitude,ag.longitude) dist' : '' ) . '
        FROM
            (SELECT * FROM malls LIMIT ' . $params['limit'] . ') f
        JOIN
            address_groups ag
            ON f.id = ag.id_firm AND ag.type = 1
        JOIN
            streets s
            ON s.id = ag.id_street
        JOIN
            buildings b
            ON b.id = ag.id_building
        JOIN
            workdays_groups wg
            ON wg.id_address_group = ag.id
        JOIN
            workdays w
            ON w.id = wg.id_workday
        ' . ($params['workdays']['work_to'] <= 9 ?
                'JOIN
                    workdays_groups wg2
                    ON wg2.id_address_group = ag.id
                JOIN
                    workdays w2
                    ON w2.id = wg2.id_workday' : '' ) . '
        WHERE
            f.hidden = 0
        ' . ($params['workdays'] ? 'AND ' . $term : '') . '
        ORDER BY ' . ( $params['location'] ? 'dist,' : '' ) . ' f.rating, w.id, w2.id
                ');
        return $this->get_all($stm, $data);
    }

}