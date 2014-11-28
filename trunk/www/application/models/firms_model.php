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
        ORDER by ag.id, w.weekday
        ');
        $tmp = $this->get_all($stm, array('id' => $id));
        $firm = array();
        foreach($tmp as $k => $v)
        {
            foreach($v as $key => $row)
            if(in_array($key, array('id','name','id_subdivision','short_description','description','site')))
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

    public function getFirmForEdition($id)
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
            s.id id_street,
            b.name building,
            b.id id_building,
            w.id id_workday,
            w.always,
            w.daily,
            w.weekday,
            w.work_from,
            w.work_to,
            m.id id_mall,
            m.name mall_name,
            m.short_description mall_short,
            m2.id ex_id_mall,
            m2.name ex_mall_name,
            m2.short_description ex_mall_short

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
        LEFT JOIN
            malls m ON ag.id_mall = m.id
        LEFT JOIN
            address_groups ag2 ON ag2.id_street = s.id AND ag2.id_building = b.id AND ag2.type = 1 AND ag2.id_firm != ag.id_mall
        LEFT JOIN
            malls m2 ON m2.id = ag2.id_firm
        WHERE
            f.id = :id
        ORDER by ag.id, w.weekday
        ');
        $tmp = $this->get_all($stm, array('id' => $id));
        $firm = array();
        foreach($tmp as $k => $v)
        {
            foreach($v as $key => $row)
                if(in_array($key, array('id','name','id_subdivision','short_description','description','site')))
                    $firm[$key] = $row;
                elseif(in_array($key,array('always','daily','weekday','work_from','work_to')))
                {
                    $firm['address'][$v['id_address']]['workdays'][$v['id_workday']][$key] = $row;
                }
                elseif(in_array($key, array('ex_id_mall', 'ex_mall_name', 'ex_mall_short')) && $row)
                {
                    $firm['address'][$v['id_address']]['malls'][$v['id_mall2']][$key] = $row;
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
            w2.work_to,
            m.id id_mall,
            m.name mall_name,
            m.short_description mall_short
        ' . ( $params['location'] ? ', geodist(' . $params['location']['latitude'] . ',' . $params['location']['longitude'] . ',ag.latitude,ag.longitude) dist' : '' ) . '
        FROM
            (SELECT * FROM firms WHERE id_subdivision = :id_subdivision  LIMIT ' . $params['limit'] . ') f
        JOIN
            address_groups ag
            ON f.id = ag.id_firm AND ag.type = 0
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
        LEFT JOIN
            malls m
            ON m.id = ag.id_mall
        ' . ($params['workdays']['work_to'] <= 9 ?
        'JOIN
            workdays_groups wg2
            ON wg2.id_address_group = ag.id
        JOIN
            workdays w2
            ON w2.id = wg2.id_workday' : '' ) . '
        ' . ($params['workdays'] ? 'WHERE ' . $term : '') . '
        ORDER BY ' . ( $params['location'] ? 'dist,' : '' ) . ' f.rating, w.id, w2.id
                ');
        $data['id_subdivision'] = $params['id_subdivision'];
        return $this->get_all($stm, $data);
    }
}