<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 12.11.14
 * Time: 0:48
 */
class firms_controller extends controller
{
    private $city;
    public function init()
    {
        $this->system->script = array('firms', 'ajax-upload/ajaxupload.3.5', 'mask/jquery.maskedinput');
        $this->system->style = array('firms');
    }

    public function after_auth()
    {
        $user_cities_model = new cities_model();
        $cities = $user_cities_model->getUserCities($this->user['id']);
        if(!$cities)$this->city = $this->system->city;
        elseif(count($cities) == 1)$this->city = $cities[0];
        else
        {
           if(in_array($this->city, $cities))
               $this->city = $this->system->city;
           else
               $this->city = $cities[0];
        }

        $this->t->assign('user_cities', $cities);
        $this->t->assign('city', $this->city);

    }

    public function add()
    {
        $this->system->breadcrumbs = array(array(
            'title' => 'Добавление фирмы',
            'alias' => 'firms/?add=1'
        ));
        $regions_model = new default_model('regions');
        $regions = $regions_model->getAll();
        $cities_model  = new default_model('cities');
        $tmp = $cities_model->getAll();
        $cities = array();
        foreach($tmp as $v)
            $cities[$v['id_region']][] = $v;
        $divisions_model = new default_model('divisions');
        $divisions = $divisions_model->getAll();
        $subdivisions_model  = new default_model('subdivisions');
        $tmp = $subdivisions_model->getAll();
        $subdivisions = array();
        foreach($tmp as $v)
            $subdivisions[$v['id_division']][] = $v;
        if($_POST)
        {
            $values = $_POST;
        }
        else
        {
            $values['region'] = $this->system->city['id_region'];
            $values['city'] = $this->system->city['id'];
        }
        $this->t->assign('values', $values);
        $this->t->assign('regions', $regions);
        $this->t->assign('cities', $cities);
        $this->t->assign('divisions', $divisions);
        $this->t->assign('subdivisions', $subdivisions);
    }

    public function ajax()
    {
        switch($_REQUEST['action'])
        {
            case 'street_suggest':
                if(!$value = $this->tools->filterStreets($_POST['value']))exit;
                $cities_model = new default_model('cities');
                $cities = $this->tools->idArray($cities_model->getAll());
                $streets_model = new cities_model('', $cities[$_POST['city']]['alias']);
                $streets = $streets_model->streetSuggest($value);
                if(count($streets) == 1 && $streets[0] == $_POST['value'])
                {
                    exit;
                }
                echo json_encode($streets);
                exit;
            break;
        }
    }

}