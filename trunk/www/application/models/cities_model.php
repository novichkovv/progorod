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
            ON us.id_city = u.$id
        WHERE
            us.id_user = :id_user
        ');
        $tmp = $this->get_all($stm, array('id_user' => $id_user));
        return $tmp;
    }
}