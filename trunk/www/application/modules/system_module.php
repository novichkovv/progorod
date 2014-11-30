<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 15.10.14
 * Time: 18:21
 */
class system_module
{
    public $route;
    public $parts;
    public $template_folder;
    public $template_file;
    public $controller;
    public $city;
    public $alias;
    public $breadcrumbs = array();
    public $log = array();
    public $script = array();
    public $style = array();
    public $sidebar;
    function __construct()
    {
        $route = isset($_REQUEST['route']) ? trim($_REQUEST['route'], "/") : '';
        $this->parts = explode('/', $route);
        $cities_model = new default_model('cities');
        $tmp = $cities_model->getAll();
        foreach($tmp as $city)
        {
            if($city['alias'] == $this->parts[0])
            {
                $this->city = $city;
                unset($this->parts[0]);
                $this->parts = array_values($this->parts);
                break;
            }
        }
        if(is_array($this->parts))
        {
            $this->alias = implode('/', $this->parts);
        }
    }
    public  function getTemplate($controller)
    {
        $arr = explode('_', $controller);
        unset($arr[count($arr) - 1]);
        $route_path = implode('_', $arr);
        $this->template_folder = isset($route_path) && $route_path != 'default' ? $route_path . DS : '';
        if(isset($this->parts[1]))
        {
            $file = $this->parts[1];
        }
        elseif(isset($_GET['add']))
        {
            $file = 'add';
            if(isset($this->parts[1]))
                $file = $this->parts[1] . '_add';
        }
        elseif(isset($_GET['id']) && $_GET['id'])
        {
            $file = 'id';
            if(isset($this->parts[1]))
                $file = $this->parts[1] . '_id';
        }
        else $file = 'content';
        $this->template_file = $file . '.tpl';
    }
}