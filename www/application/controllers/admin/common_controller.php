<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 05.11.14
 * Time: 19:29
 */
class common_controller extends controller
{
    public function init()
    {

    }

    public function after_auth()
    {
        $system_model = new default_model('system_routes');
        $user_group_rights_model = new user_group_rights_model();
        if(isset($this->system->route['id']) && !$user_group_rights_model->checkRights($this->system->route['id'], $this->user['id_user_group']))
        {
            header('Location :' . SITE_DIR . 'no_permission/');
            exit;
        }
        $this->breadcrumbs();
        $group_rights = $user_group_rights_model->getGroupRights();
        $arr = $system_model->getByField('project', 'admin', true, 'parent,position');
        $sidebar = array();
        foreach($arr as $v)
        {
            if($group_rights[$this->user['id_user_group']] && in_array($v['id'], $group_rights[$this->user['id_user_group']]))
            {
                if(!$v['parent'])
                {
                    $sidebar[$v['id']] = $v;
                }
                else
                {
                    $sidebar[$v['parent']]['children'][$v['id']] = $v;
                }
            }
        }
        $this->system->sidebar = $sidebar;
        if($this->system->city)
        {
            $comments_model = new comments_model('firm_comments', $this->system->city['alias']);
            $comments = $comments_model->getNewComments();
            $params = array(
                array(
                    'key' => 'badge',
                    'value' => count($comments)
                )
            );
            $this->editSidebar('comments', $params);
        }
    }
}