<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 16.11.14
 * Time: 0:50
 */
class subdivisions_controller extends controller
{
    public function first()
    {
        if($_GET['id']);
        $this->memcache_lifetime = 5;
    }
    public function init()
    {

    }
    public function memcached()
    {

        $this->system->log[] = print_r($_SERVER,1);
        $divisions_model = new divisions_model();
        $divisions = $divisions_model->memcached(5,'getFullDivisions');//->getFullDivisions();
        $firms_model = new firms_model('firms', $this->system->city['alias']);
        $firm = $firms_model->getFirm($_GET['id']);
        foreach($firm['address'] as $k=>$v)
        {
            $firm['address'][$k]['workdays'] = $this->tools->parse_workdays($v['workdays']);

        }
        $this->t->assign('firm',$firm);
    }
}