<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 06.11.14
 * Time: 0:19
 */
class auth_model extends model
{
    function init()
    {
        $this->table = 'users';
    }
    public function auth($login, $password)
    {
        $stm = $this->pdo->prepare('
        SELECT
            *
        FROM
            users
        WHERE
          mail = :mail
        AND password = :password
        ');
        $tmp = $this->get_row($stm,
            array(
            'mail' => $login,
            'password' => $password
            )
        );
        return $tmp;
    }

}