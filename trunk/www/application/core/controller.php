<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 14.10.14
 * Time: 23:35
 */
abstract class controller
{
    public $t;
    public $system;
    public  $tools;
    public $user;
    public $breadcrumbs = array();
    protected $log = array();
    protected $memcache_lifetime;
    public $smarty;
    abstract public  function init();
    public function ajax()
    {

    }
    public function handler()
    {

    }
    public function after_auth()
    {

    }
    public function first()
    {

    }
    public function last()
    {

    }
    public function add()
    {

    }
    public function id()
    {

    }
    public function memcached()
    {

    }
    public function start()
    {
        $this->tools = new tools_module();
        $auth = new auth_module();
        $this->first();
        if($this->memcache_lifetime && MEMCACHED)
            $this->init_memcached_page();
        else
            $this->memcached();
        if(isset($_REQUEST['ajax']))
            $this->ajax();
        if(isset($_GET['add']))
            $this->add();
        if(isset($_GET['id']))
            $this->id();
        $this->handler();
        $this->init();
        $auth->logout();
        $auth->auth();
        if($this->user = $auth->check_auth())
        {
            $this->after_auth();
            $this->t->assign('user', $this->user);
        }
        $this->last();
        $script = array();
        foreach($this->system->script as $v)
        {
            $script[] = SITE_DIR . 'js/' . PROJECT . '/' . $v . '.js';
        }
        $this->t->assign('script', $script);
        $style = array();
        foreach($this->system->style as $v)
        {
            $style[] = SITE_DIR . 'css/' . PROJECT . '/' . $v . '.css';
        }
        $this->t->assign('style', $style);
        $this->t->assign('log', $this->system->log);

    }
    public function breadcrumbs(array $adds = array())
    {
        $breadcrumbs = array();
        if($this->system->route)
        {
            if($this->system->route['controller'])
            {
                $breadcrumbs[0]['title'] = $this->system->route['title'];
                $breadcrumbs[0]['alias'] = $this->system->route['alias'] . ($adds[0] ? '/' . $adds[0] : $adds[0]);
            }
            if($this->system->route['parents'])
            {
               foreach($this->system->route['parents'] as $k => $parent)
               {
                   if($parent['controller'])
                   {
                       $breadcrumbs[$k+1]['title'] = $parent['title'];
                       $breadcrumbs[$k+1]['alias'] = $parent['alias'] . ($adds[$k+1] ? '/' . $adds[$k+1] : $adds[$k+1]);
                   }
               }
            }
            if($breadcrumbs)
            {
                $this->system->breadcrumbs = array_merge($this->system->breadcrumbs, $breadcrumbs);
                $this->system->breadcrumbs = array_reverse($this->system->breadcrumbs);
            }
        }
        $this->t->assign('breadcrumbs', $this->system->breadcrumbs);
    }
    public function init_memcached_page()
    {
        $memcache_obj = new Memcache;
        $memcache_obj->connect('127.0.0.1', 11211) or die('Could not connect');
        $key = md5($_SERVER['REQUEST_URI']);
        $var_key = @$memcache_obj->get($key);
        if(!empty($var_key))
        {
            echo $var_key;
        }
        else
        {
            $this->memcached();
            $arr = array(
                'alias' => $this->system->alias,
                'parts' => $this->system->parts,
                'template_folder' => $this->system->template_folder,
                'template_file' => $this->system->template_file,
                'controller' => $this->system->controller,
                'city' => $this->system->city
            );
            $this->t->assign('system', $arr);
            $this->t->assign('template_dir', $this->t->template_dir[0]);
            $template = $this->t->fetch(APP_DIR . 'templates' . DS . PROJECT . DS  . 'index.tpl');
            $memcache_obj->set($key, $template, false, $this->memcache_lifetime);

            echo $template;
        }
        $memcache_obj->close();
        exit;
    }
}