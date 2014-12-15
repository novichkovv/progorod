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
        $this->system->script = array('ajax-upload/ajaxupload.3.5','jquery.imgareaselect.min','images');
        $this->system->style = array('imagecrop/imgareaselect-default');
    }

    public function after_auth()
    {
        $this->system->log[] = print_r($_POST,1);

    }
}