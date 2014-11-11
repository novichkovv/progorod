<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 08.11.14
 * Time: 18:03
 */
class user_group_rights_model extends model
{
    public function init()
    {
        $this->table = 'user_group_rights';
    }
    public function getGroupRights()
    {
        $tmp = $this->getAll();
        $res = array();
        if(is_array($tmp))
        {
            foreach($tmp as $row)
            {
                $res[$row['id_group']][] = $row['id_system_route'];
            }
        }
        return $res;
    }
    public function checkRights($route, $group)
    {
        if(!$route || !$group)return false;
        $stm = $this->pdo->prepare('
        SELECT * FROM user_group_rights WHERE id_system_route = :route AND id_group = :group
        ');
        $stm->execute(array('route' => $route, 'group' => $group));
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

}