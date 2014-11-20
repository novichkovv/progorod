<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 20.11.14
 * Time: 0:04
 */
class divisions_controller extends controller
{
    public function init()
    {
        $divisions_model = new divisions_model();
        $division = $divisions_model->getFullDivisions($this->system->parts[0]);
        $this->t->assign('division', $division);
    }
}