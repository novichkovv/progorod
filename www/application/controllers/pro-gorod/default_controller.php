<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 15.10.14
 * Time: 19:33
 */
class default_controller extends controller
{
    public function init()
    {
        $this->t->assign('default_controller','default_controller');
    }
}