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
        $this->breadcrumbs = array(array(
            'title' => 'Добавление фирмы',
            'alias' => '?add=1'
        ));
        print_r($this->breadcrumbs);
    }
}