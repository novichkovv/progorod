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
        ORDER by ag.id, w.id
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

    public function getUserFirms($creator,$limit)
    {
        $stm = $this->pdo->prepare('
        SELECT
            *
        FROM
            firms
        WHERE
            creator = :creator
        LIMIT '. $limit.'
        ');
        $tmp = $this->get_all($stm, array('creator' => $creator));
        return $tmp;
    }

    public function countSubdivisionsFirms($id_subdivision = false)
    {
        $stm = $this->pdo->prepare('
        select count(id) count, id_subdivision from firms group by id_subdivision
        ' . ( $id_subdivision ? 'WHERE id_subdivision = :id_subdivision' :'' ) . '
        ');
        if($id_subdivision)
        {
            return $this->get_row($stm, array('id_subdivision' => $id_subdivision))['count'];
        }
        else
        {
            $tmp = $this->get_all($stm);
            $result = array();
            foreach($tmp as $v)
            {
                $result[$v['id_subdivision']] = $v['count'];
            }
            return $result;
        }
    }

    public function getSubdivisionsFirms($params)
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
          *
        ' . ( $params['distance'] ? ', geodist(' . $params['distance']['lat'] . ',' . $params['distance']['lon'] . ',ag.latitude,ag.longitude) dist' : '' ) . '
        FROM
            (SELECT * FROM firms WHERE id_subdivision = :id_subdivision  LIMIT ' . $params['limit'] . ') f
        JOIN
            address_groups ag
            ON f.id = ag.id_firm AND ag.type = 0
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
        ' . ($params['workdays'] ? 'WHERE ' . $term : '') . '
        ORDER BY ' . ( $params['distance'] ? ',dist,' : '' ) . ' rating
                ');
        $data['id_subdivision'] = $params['id_subdivision'];
        return $this->get_all($stm, $data);
    }
}