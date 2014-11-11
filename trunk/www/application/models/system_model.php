<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 02.10.14
 * Time: 20:19
 */
class system_model extends model
{
    public function getController($route)
    {
        $stm = $this->pdo->prepare('
        SELECT
            *
        FROM
            system_routes
        WHERE alias = ?
            AND project = "' . PROJECT . '"
        ');
        $tmp = $this->get_row($stm, array($route));
        if($tmp['parent'])$tmp['parents'] = $this->getParent($tmp['parent']);
        if($tmp)
            return $tmp;
        else
            return false;
    }

    public function getParent($id, array $parents = array())
    {
        $stm = $this->pdo->prepare('SELECT * FROM system_routes WHERE id = ?');
        $tmp = $this->get_row($stm, array($id));
        $parents[] = $tmp;
        if($tmp['parent'])
            $parents = $this->getParent($tmp['parent'], $parents);
        return $parents;
    }

}