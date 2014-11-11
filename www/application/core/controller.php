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
    public $breadcrumbs;
    protected $log = array();
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
    public function start()
    {
        $this->tools = new tools_module();
        $auth = new auth_module();
        $this->first();
        if(isset($_REQUEST['ajax']))
            $this->ajax();
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
        $this->t->assign('log', $this->log);
    }
    public function breadcrumbs()
    {
        $breadcrumbs = array();
        if($this->system->route)
        {
            if($this->system->route['controller'])
            {
                $breadcrumbs[0]['title'] = $this->system->route['title'];
                $breadcrumbs[0]['alias'] = $this->system->route['alias'];
            }
            if($this->system->route['parents'])
            {
               foreach($this->system->route['parents'] as $k => $parent)
               {
                   if($parent['controller'])
                   {
                       $breadcrumbs[$k+1]['title'] = $parent['title'];
                       $breadcrumbs[$k+1]['alias'] = $parent['alias'];
                   }
               }
            }
            if($breadcrumbs)$this->breadcrumbs = array_reverse($breadcrumbs);
        }
        $this->t->assign('breadcrumbs', $this->breadcrumbs);
    }
}