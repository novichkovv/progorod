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
        $this->breadcrumbs();
        $system_model = new default_model('system_routes');
        $tmp = $system_model->getByField('project', 'user', true, 'parent, position');
        $sidebar = array();
        foreach($tmp as $k => $v)
        {
            if(!$v['parent'])
                $sidebar[$v['id']] = $v;
            else
                $sidebar[$v['parent']]['children'][$v['id']] = $v;

        }
        $this->t->assign('sidebar', $sidebar);
    }
    public function last()
    {
        if(!$this->user['id'])
        {
            header('Location: ' . DOMAIN);
            exit;
        }
    }
}