<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 28.09.14
 * Time: 22:52
 */
class router
{
    private $route;
    private $controller;
    private $system;

    function __construct()
    {
        $this->system = new system_module();
        $this->controller = $this->getController($this->system->alias);
        $this->system->getTemplate($this->controller);
        $this->start();
    }
    public function getController($route)
    {
        $system_model = new system_model();
        $controller = 'not_found_controller';
        if(!$route)
            $controller = 'default_controller';
        else
        {
            if($res = $system_model->getController($route))
            {
                if($res['controller'])
                    $controller = strtr($res['controller'], array('.php' => ''));
                else
                    $controller = 'not_found_controller';
                $this->system->route = $res;
            }
        }
        return $controller;
    }
    public function start()
    {
        $smarty = new smarty_module();
        $controller = new $this->controller();
        $controller->system = $this->system;
        $controller->t = $smarty->smarty;
        $controller->smarty = $smarty;
        $common_controller = new common_controller();
        $common_controller->system = $this->system;
        $common_controller->t = $smarty->smarty;
        $common_controller->start();
        $controller->start();
        $controller->t->assign('template_dir', $controller->t->template_dir[0]);
        $smarty->assignSystem($this->system);
        $controller->breadcrumbs();
        $controller->t->display(APP_DIR . 'templates' . DS . PROJECT . DS  . 'index.tpl');

    }
}