<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 27.11.14
 * Time: 0:45
 */
class address_groups_model extends model
{
    public function deleteFirmAddresses($id_firm)
    {
        if(!$id_firm)return;
        $address_groups = $this->get_all($this->pdo->prepare('SELECT id FROM address_groups WHERE id_firm = :id_firm AND type = "0"'), array('id_firm' => $id_firm));
        if($address_groups)
        {
            $arr = [];
            $wd = [];
            $prep = null;
            foreach($address_groups as $v)
            {
                $arr[] = '?';
                $wd[] = $v['id'];
            }
            if($arr)$prep = implode(',',$arr);
            $workdays = $this->get_all($this->pdo->prepare('SELECT id_workday FROM workdays_groups WHERE id_address_group IN (' . $prep . ')'), $wd);
            if($workdays)
            {
                $arr = [];
                $wd = [];
                $prep = null;
                foreach($workdays as $v)
                {
                    $arr[] = '?';
                    $wd[] = $v['id'];
                }
                if($arr)$prep = implode(',',$arr);
                $stm = $this->pdo->prepare('DELETE FROM workdays WHERE id IN(' . $prep . ')');
                $stm->execute($wd);
                $stm = $this->pdo->prepare('DELETE FROM workdays_groups WHERE id_workday IN(' . $prep . ')');
                $stm->execute($wd);
                $stm = $this->pdo->prepare('DELETE FROM address_groups WHERE id_firm = :id_firm AND type = "0"');
                $stm->execute(array('id_firm' => $id_firm));
            }
        }
    }
}