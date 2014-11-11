<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 14.10.14
 * Time: 23:15
 */
class smarty_module
{
    public $smarty;
    function __construct()
    {
        require_once(SMARTY_DIR . 'Smarty.class.php');
        $this->smarty = new Smarty();
        $this->smartyDirs();
    }

    private function smartyDirs()
    {
        $this->smarty->template_dir = '';
        $this->smarty->compile_dir = ROOT_DIR . 'application' . DS . 'templates_c'. DS;
        $this->smarty->config_dir = ROOT_DIR . 'application' . DS . 'configs' . DS;
        $this->smarty->cache_dir = ROOT_DIR . 'application' . DS . 'cache'. DS;
    }

    public function assignSystem($system)
    {
        $arr = array(
            'alias' => $system->alias,
            'parts' => $system->parts,
            'template_folder' => $system->template_folder,
            'template_file' => $system->template_file,
            'controller' => $system->controller
        );
        $this->smarty->assign('system', $arr);
    }


}