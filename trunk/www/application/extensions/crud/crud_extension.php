<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 21.10.14
 * Time: 18:19
 */
class crud_extension implements extensions
{
    private  $dir;
    private  $params;
    private $t;
    private $controller;
    private $model;
    private $city;
    private $db;
    private $cities;
    function __construct($controller)
    {
        $this->dir = EXT_DIR . 'crud' . DS;
        $this->controller = $controller;
        $this->t = $controller->t;
        $this->t->assign('temp_dir', $this->dir . DS . 'templates' . DS);
    }
    public function params($params)
    {
        if($params['city'])
        {
            $this->city = true;
            $this->db = $_POST['city'];
            $cities_model = new default_model('cities');
            $this->cities = $cities_model->getAll();
        }
        if(!$params['user_template'])
        {
            $this->t->template_dir = $this->dir . 'templates' . DS;
            $this->controller->system->template_folder = '';
            $this->controller->system->template_file = 'content.tpl';
        }
        else
            $this->t->assign('user_template', true);
        $this->params = $params;
        if($this->params['model'])
            $this->model = new $this->params['model'];
        elseif($this->params['default_model'])
            $this->model = new default_model($this->params['default_model'], $this->db);
        $this->start();
    }
    private function start()
    {
            if(isset($_GET['add']) && !$this->params['limits']['form'])
                $this->form();
            if(isset($_POST['add_button']) && !$this->params['limits']['create'])
                $this->create();
            elseif(isset($_POST['delete_item_btn'])&& !$this->params['limits']['delete'] )
                $this->delete();
            elseif(!$this->params['limits']['main'] && !isset($_GET['add']) && !isset($_GET['id']))
                $this->main();
    }
    private function form()
    {
        $f = array();

        foreach($this->params['fields'] as $field => $val)
        {
            $f[$field] = $val;
        }
        if($this->city)
        {
            $cities = array();
            foreach($this->cities as $k=>$v)
            {
                $cities[$k]['label'] = $v['name'];
                $cities[$k]['value'] = $v['alias'];
                if($v['alias'] == $this->controller->system->city['alias'])
                    $cities[$k]['selected'] = true;
            }
            if(!$this->db)
            {

                $this->params['fields']['city'] = array(
                    'ignore' => true,
                    'type' => 'select',
                    'value' => $cities,
                    'label' => 'Город'
                );
            }
        }
        if($_GET['id'] && !$this->params['row'])
        {
            $value = $this->model->getById($_GET['id']);
            foreach($this->params['fields'] as $field => $val)
            {
                if($val['type'] == 'password')
                {
                    $value[$field] = '';
                    $this->params['fields'][$field]['placeholder'] = 'Оставьте пустым, чтобы не менять';
                }
            }

            $this->t->assign('row', $value);
        }
        if($this->params['row'])$this->t->assign('row', $this->params['row']);
        $this->t->assign('params', $this->params);
    }
    private function create()
    {
        $row = array();
        foreach($this->params['fields'] as $v=>$m)
        {
            if(!$m['ignore'])
            {
                $row[$v] = $_POST[$v];
                if($m['type'] == 'password')
                {
                    $row[$v] = md5($_POST[$v]);
                    if($_GET['id'] && $_POST[$v] == '')
                        unset($row[$v]);
                }
            }

        }
        if(!$this->params['no_cdate'] && !$_GET['id'] && !$_POST['id'])
            $row['cdate'] = date('Y-m-d h:i:s');
        if($this->params['creator'])
            $row['creator'] = $this->params['creator'];
        if(isset($_GET['id']))
            $row['id'] = $_GET['id'];
        if(isset($_POST['id']))
            $row['id'] = $_POST['id'];
        $this->model->insert($row);
        header('Location: ?');

    }
    private function main()
    {
        if($this->city && !$_POST['city'])
        {
            unset($this->params['fields']);
            $cities = array();
            foreach($this->cities as $k=>$v)
            {
                $cities[$k]['label'] = $v['name'];
                $cities[$k]['value'] = $v['alias'];
                if($v['alias'] == $this->controller->system->city['alias'])
                    $cities[$k]['selected'] = true;
            }
            $this->params['fields']['city'] = array(
                'ignore' => true,
                'type' => 'select',
                'value' => $cities,
                'label' => 'Город'
            );
            $this->params['button']['name'] = 'choose_city';
            $this->params['button']['value'] = 'Выбрать';
            $_GET['add'] = true;
            $this->form();
        }
        else
        {
            $tmp = $this->model->getAll();

            foreach($this->params['fields'] as $k=>$v)
            {
                if($v['type'] == 'select')
                {
                    foreach($tmp as $key => $val)
                    {
                        if($val[$k])
                        {
                            foreach($v['value'] as $option)
                            {
                                if($option['value'] == $val[$k])
                                    $tmp[$key][$k] = $option['label'];

                            }
                        }
                    }
                }
            }
            $this->t->assign('tmp', $tmp);
            $this->t->assign('params', $this->params);
        }

    }
    private function delete()
    {
        $this->model->deleteById($_POST['item_id']);
        header('Location: ?');
    }

    public function user_main($tmp)
    {
        foreach($this->params['fields'] as $k=>$v)
        {
            if($v['type'] == 'select')
            {
                foreach($tmp as $key => $val)
                {
                    if($val[$k])
                    {
                        foreach($v['value'] as $option)
                        {
                            if($option['value'] == $val[$k])
                                $tmp[$key][$k] = $option['label'];

                        }
                    }
                }
            }
        }
        $this->t->assign('tmp', $tmp);
        $this->t->assign('params', $this->params);
    }
}