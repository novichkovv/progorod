<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 17.11.14
 * Time: 21:07
 */
class malls_controller extends controller
{
    public function init()
    {

    }

    public function id()
    {
        $malls_model = new malls_model('malls', $this->system->city['alias']);
        $mall = $malls_model->getMall($_GET['id']);
        foreach($mall['address'] as $k=>$v)
        {
            $mall['address'][$k]['workdays'] = $this->tools->parse_workdays($v['workdays']);

        }
        $this->t->assign('mall',$mall);
    }
}