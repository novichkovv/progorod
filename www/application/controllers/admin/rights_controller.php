<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 07.11.14
 * Time: 19:54
 */
class rights_controller extends controller
{
    function init()
    {

    }
    function after_auth()
    {
        $user_groups_model = new default_model('user_groups');
        $user_groups = $user_groups_model->getAll();
        $user_group_rights_model = new user_group_rights_model();
        $group_rights = $user_group_rights_model->getGroupRights();
        $system_routes_model = new default_model('system_routes');
        $routes = $system_routes_model->getByField('project', 'admin', true);
        $result = array();
        if($user_groups)
        {
            foreach($user_groups as $group)
            {
                foreach($routes as $k=>$route)
                {
                    $result[$group['name']][$k] = $route;
                    $result[$group['name']][$k]['id_group'] = $group['id'];
                    if(is_array($group_rights[$group['id']]) && in_array($route['id'],$group_rights[$group['id']]))
                        $result[$group['name']][$k]['checked'] = true;
                }
            }
        }
        $this->t->assign('result', $result);
    }

    public function handler()
    {
        if(isset($_POST['save_rights_btn']))
        {
            $user_group_rights_model = new default_model('user_group_rights');
            $user_group_rights_model->deleteAll();
            foreach($_POST['id_route'] as $group => $val)
            {
                foreach($val as $route)
                {
                    $row = array();
                    $row['id_group'] = $group;
                    $row['id_system_route'] = $route;
                    $user_group_rights_model->insert($row);
                }

            }
            header('Location: ' . SITE_DIR . 'rights/');
        }
    }
}