<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 12.11.14
 * Time: 1:48
 */
class cities_model extends model
{
    public function getUserCities($id_user)
    {
        $stm = $this->pdo->prepare('
        SELECT
            c.*
        FROM
            user_cities us
        JOIN
            cities c
            ON us.id_city = c.id
        WHERE
            us.id_user = :id_user
        ');
        $tmp = $this->get_all($stm, array('id_user' => $id_user));
        return $tmp;
    }
    public function checkUserCities($id_user, $id_city,$type)
    {
        $stm = $this->pdo->prepare('
        SELECT
            COUNT(id) count
        FROM
            user_cities us
        WHERE
            us.id_user = :id_user
        AND
            us.id_city = :id_city
        AND
            us.type = :type
        ');
        $tmp = $this->get_row($stm, array('id_user' => $id_user, 'id_city' => $id_city, 'type' => $type));
        return $tmp['count'];
    }
    public function getRegionsCities()
    {
        $stm = $this->pdo->prepare('
        SELECT
            c.id id_city,
            c.name city_name,
            c.name_genitive city_genitive,
            c.alias city_alias,
            r.name city_region,
            r.id id_region,
            r.name region_name,
            r.name_genitive region_genitive,
            r.alias region_alias
        FROM
            cities c
        JOIN
            regions r
            ON c.id_region = r.id
        ');
        $tmp = $this->get_all($stm);
        $regions = array();
        foreach($tmp as $v)
        {
            foreach($v as $key=>$row)
            {
                if(in_array($key, array('id_region', 'region_name', 'region_genitive', 'region_alias')))
                    $regions[$v['id_region']][$key] = $row;
                else
                    $regions[$v['id_region']]['cities'][$v['id_city']][$key] = $row;
            }
        }
        return $regions;
    }

    public function streetSuggest($value)
    {
        $stm = $this->pdo->prepare('
        SELECT * FROM streets WHERE name LIKE :name
        ');
        $res = $this->get_all($stm, array('name' => $value. '%'));
        if(!$res)
        {
            $res = $this->get_all($stm, array('name' => '% ' . $value. '%'));
        }
        $tmp = array();
        foreach($res as $k => $v)
        {
            $tmp[$k] = $v['name'];
        }
        return $tmp;
    }

    public function buildingSuggest($value, $street)
    {
        $stm = $this->pdo->prepare('
        SELECT * FROM buildings WHERE name LIKE :name AND id_street = :id_street
        ');
        $res = $this->get_all($stm, array('name' => $value. '%', 'id_street' => $street));
        if(!$res)
        {
            $res = $this->get_all($stm, array('name' => '% ' . $value. '%', 'id_street' => $street));
        }
        $tmp = array();
        foreach($res as $k => $v)
        {
            $tmp[$k] = $v['name'];
        }
        return $tmp;
    }

    public function mallSuggest($street_name, $building_name)
    {
        $stm = $this->pdo->prepare('
        SELECT
            m.id,
            m.name,
            m.short_description
        FROM
            malls m
        JOIN
            address_groups ag
            ON ag.id_firm = m.id AND ag.type = 1
        JOIN
            streets s
            ON ag.id_street = s.id
        JOIN
            buildings b
            ON ag.id_building = b.id
        WHERE
            s.name = :street_name
        AND
            b.name = :building_name
        ');
        return $this->get_all($stm, array('street_name' => $street_name, 'building_name' => $building_name));
    }

    function getCityStreetsBuildings()
    {
        $stm = $this->pdo->prepare('
        SELECT
            s.id id,
            s.name street,
            b.id_street,
            b.id id_building,
            b.name building
        FROM
            streets s
        LEFT JOIN
            buildings b
            ON s.id = b.id_street
        ');
        $tmp = $this->get_all($stm);
        $streets = array();
        foreach($tmp as $k => $v)
        {
            foreach($v as $key => $row)
            {
                if(in_array($key, array('id', 'street')))
                    $streets[$v['street']][$key] = $row;
                else
                    $streets[$v['street']]['buildings'][$v['building']][$key] = $row;
            }
        }
        return $streets;
    }
}