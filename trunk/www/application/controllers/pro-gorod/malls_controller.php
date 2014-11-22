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
        phpinfo();
        $malls_model = new malls_model('malls', $this->system->city['alias']);
        $mall = $malls_model->getMall($_GET['id']);
        $mall['address']['workdays'] = $this->tools->parse_workdays($mall['address']['workdays']);
        $this->t->assign('mall',$mall);
        $firms_model = new firms_model('firms', $this->system->city['alias']);
        $firms = $firms_model->getAll();
        $this->t->assign('firms', $firms);
    }
}