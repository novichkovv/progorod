<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 16.11.14
 * Time: 0:50
 */
class subdivisions_controller extends controller
{
    public function init()
    {
        $divisions_model = new divisions_model();
        $divisions = $divisions_model->getFullDivisions();
        $firms_model = new firms_model('firms', $this->system->city['alias']);
        $firm = $firms_model->getFirm($_GET['id']);
        foreach($firm['address'] as $k=>$v)
        {
            $firm['address'][$k]['workdays'] = $this->tools->parse_workdays($v['workdays']);

        }
        $this->t->assign('firm',$firm);
        //print_r($firm);

    }
}