<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 04.12.14
 * Time: 21:04
 */
class images_controller extends controller
{
    public function init()
    {
        $this->system->script = array('images','ajax-upload/ajaxupload.3.5');
    }

    public function after_auth()
    {
    }
}