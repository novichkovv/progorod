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