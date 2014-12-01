<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 12.11.14
 * Time: 0:50
 */
class malls_controller extends controller
{
    private $city;
    public function init()
    {
        $this->system->script = array('firms', 'ajax-upload/ajaxupload.3.5', 'mask/jquery.maskedinput', 'ckeditor/ckeditor');
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

        if($this->city)
        {
            $malls_model = new malls_model('malls', $this->city['alias']);
            $count_malls = $malls_model->countByField('creator', $this->user['id']);
            $_GET['page'] ? $page = $_GET['page'] : $page = 1;
            $malls = $malls_model->getUserMalls($this->user['id'], $page*10-10 . ',10');
            $this->t->assign('malls', $malls);
            $this->t->assign('user_city', $this->city);
            $this->add_mall();
            if($_POST)
            {
                $values = $_POST;
                if(count($values['address']) < 1)
                    $values['address'] = array(1);
            }
            else
            {
                if($_GET['id'] && $_GET['add'])
                {
                    $firm = $malls_model->getMallForEdition($_GET['id']);
                    $this->system->log[] = print_r($firm,1);
                    $values = $firm;
                    $values['image'] = 1;
                    $i = 0;
                    foreach($values['address'] as $k => $v)
                    {
                        $values['address'][$i] = $v;
                        foreach($v['workdays'] as $workdays)
                        {
                            if($workdays['always'] == 1)
                            {
                                $values['address'][$i]['workdays']['radio'] = '24';
                            }
                            elseif($workdays['daily'] == 1)
                            {
                                $values['address'][$i]['workdays']['radio'] = 'daily';
                                $keys = array_keys($v['workdays']);
                                if(count($v['workdays']) == 2)
                                {

                                    if($v['workdays'][$keys[0]]['work_to'] == '23:59:59')
                                    {
                                        $from = explode(':', $v['workdays'][$keys[0]]['work_from']);
                                        $to = explode(':', $v['workdays'][$keys[1]]['work_to']);

                                    }
                                    else
                                    {
                                        $from = explode(':', $v['workdays'][$keys[1]]['work_from']);
                                        $to = explode(':', $v['workdays'][$keys[0]]['work_to']);
                                    }

                                }
                                else
                                {
                                    $from = explode(':', $v['workdays'][$keys[0]]['work_from']);
                                    $to = explode(':', $v['workdays'][$keys[0]]['work_to']);
                                }
                                $values['address'][$i]['workdays']['daily']['from']['hour'] = $from[0];
                                $values['address'][$i]['workdays']['daily']['from']['minute'] = $from[1];
                                $values['address'][$i]['workdays']['daily']['to']['hour'] = $to[0];
                                $values['address'][$i]['workdays']['daily']['to']['minute'] = $to[1];
                            }
                            else
                            {
                                $values['address'][$i]['workdays']['radio'] = 'schedule';
                                $workdays = array();
                                foreach($v['workdays'] as $val)
                                {
                                    $workdays[$val['weekday']][] = $val;
                                }
                                foreach($workdays as $day => $val)
                                {
                                    $next_weekday = $day != 'sun'? $this->tools->simple_weekdays[array_keys($this->tools->simple_weekdays, $day)[0] + 1] : 'mon';
                                    if(count($workdays[$next_weekday]) == 2)
                                    {
                                        if(count($val) == 1)
                                        {
                                            $from = explode(':', $val[0]['work_from']);
                                        }
                                        else
                                        {
                                            $from = $val[0]['work_from'] == '00:00:00' ? explode(':', $val[1]['work_from']) : explode(':', $val[0]['work_from']);
                                        }
                                        $to = $workdays[$next_weekday][0]['work_from'] == '00:00:00' ? explode(':', $workdays[$next_weekday][0]['work_to']) : explode(':', $workdays[$next_weekday][1]['work_to']);
                                    }
                                    else
                                    {
                                        if(count($val) == 1)
                                        {
                                            $from = explode(':', $val[0]['work_from']);
                                            $to = explode(':', $val[0]['work_to']);

                                        }
                                        else
                                        {
                                            if($val[0]['work_from'] == '00:00:00')
                                            {
                                                $from = explode(':', $val[1]['work_from']);
                                                $to = explode(':', $val[1]['work_to']);
                                            }
                                            else
                                            {
                                                $from = explode(':', $val[0]['work_from']);
                                                $to = explode(':', $val[0]['work_to']);
                                            }
                                        }
                                    }
                                    $values['address'][$i]['workdays'][$day]['checked'] = true;
                                    $values['address'][$i]['workdays'][$day]['from']['hour'] = $from[0];
                                    $values['address'][$i]['workdays'][$day]['from']['minute'] = $from[1];
                                    $values['address'][$i]['workdays'][$day]['to']['hour'] = $to[0];
                                    $values['address'][$i]['workdays'][$day]['to']['minute'] = $to[1];
                                }
                            }
                        }

                        $i ++;
                        unset($values['address'][$k]);
                    }
                }
                $values['region'] = $this->system->city['id_region'];
                $values['city'] = $this->system->city['id'];
                if(count($values['address']) < 1)
                    $values['address'] = array(1);
            }
        }
        $this->t->assign('values', $values);
    }
    public function add()
    {
        $this->system->breadcrumbs = array(array(
            'title' => 'Добавление центра',
            'alias' => 'malls/?add=1'
        ));
        $regions_model = new default_model('regions');
        $regions = $regions_model->getAll();
        $cities_model  = new default_model('cities');
        $tmp = $cities_model->getAll();
        $cities = array();
        foreach($tmp as $v)
            $cities[$v['id_region']][] = $v;

        $this->assignDays();
        $this->t->assign('regions', $regions);
        $this->t->assign('cities', $cities);
    }
    private function add_mall()
    {
        if(isset($_POST['add_firm_btn']))
        {
            if(!$_POST['id_user'] == $this->user['id'])header('Location: ?');
            $cities_model = new default_model('cities');
            $city = $cities_model->getById($_POST['city']);
            $cities = $this->tools->idArray($cities_model->getAll());
            $warning = false;
            if(!isset($_POST['city']) || !array_key_exists($_POST['city'], $cities))
                $warning = 'необходимо выбрать город';
            elseif(!isset($_POST['image']) || $_POST['image'] == '')
                $warning = 'Необходимо загрузить логотип';
            elseif(!isset($_POST['name']) || $_POST['name'] == '')
                $warning = 'Необходимо ввести название';
            elseif(!isset($_POST['short_description']) || $_POST['short_description'] == '')
                $warning = 'Необходимо ввести краткое описание';
            elseif(!isset($_POST['description']) || $_POST['description'] == '')
                $warning = 'Необходимо ввести описание';
            elseif(!$warning)
            {
                foreach($_POST['address'] as $k => $v)
                {
                    if(!isset($v['street']) || $v['street'] == '')
                        $warning = 'Необходимо ввести улицу';
                    elseif(!isset($v['building']) || $v['building'] == '')
                        $warning = 'Необходимо ввести здание';
                }
            }

            if($warning)
            {
                $this->t->assign('warning', $warning);
                return;
            }
            $date = date('Y-m-d H:i:s');
            $malls_model = new default_model('malls', $city['alias']);
            $row = array();
            $row['name'] = $_POST['name'];
            $row['short_description'] = $_POST['short_description'];
            $row['description'] = $_POST['description'];
            $row['site'] = $_POST['site'];
            $row['creator'] = $_POST['id_user'];
            $row['cdate'] = $date;
            if(isset($_POST['id']))
                $row['id'] = $_POST['id'];
            if($id_mall = $malls_model->insert($row))
            {
                $streets_model = new cities_model('',$city['alias']);
                $streets_buildings = $streets_model->getCityStreetsBuildings();
                $building_model = new default_model('buildings',$city['alias']);
                $str_model = new default_model('streets',$city['alias']);
                $workdays_groups_model = new default_model('workdays_groups',$city['alias']);
                $workdays_model = new default_model('workdays',$city['alias']);
                $address_groups_model = new default_model('address_groups',$city['alias']);

                $logo = ROOT_DIR . 'uploads' . DS . 'temp' . DS . $_POST['image'];
                if(file_exists($logo))
                {
                    $normal_dir = ROOT_DIR . 'uploads' . DS . 'images' . DS . $city['alias'] . DS . 'malls' . DS . 'logo' . DS . 'normal' . DS;
                    if(!file_exists($normal_dir))mkdir($normal_dir,0777,true);
                    $mini_dir = ROOT_DIR . 'uploads' . DS . 'images' . DS . $city['alias'] . DS . 'malls' . DS . 'logo' . DS . 'mini' . DS;
                    if(!file_exists($mini_dir))mkdir($mini_dir,0777,true);

                    $image = new image_module();
                    $image->load(ROOT_DIR . 'uploads' . DS . 'temp' . DS . $_POST['image']);
                    $image->resizeToWidth(600);
                    $image->resizeToHeight(240);
                    $image->save($normal_dir. $id_mall . '.jpg');

                    $image->load(ROOT_DIR . 'uploads' . DS . 'temp' . DS . $_POST['image']);
                    $image->resizeToWidth(250);
                    $image->resizeToHeight(100);
                    $image->save($mini_dir. $id_mall . '.jpg');
                }

                foreach($_POST['address'] as $k => $v)
                {
                    $row  = array();
                    $row['id_firm'] = $id_mall;
                    $row['phone'] = $v['phone'];
                    $row['type'] = 1;
                    $row['cdate'] = $date;
                    $xml = new SimpleXMLElement(file_get_contents('http://geocode-maps.yandex.ru/1.x/?geocode='.$city['name'].'+'.str_replace(' ', '+',$v['street']).'+'.str_replace(' ', '+',$v['building']).''));
                    $address = $xml->GeoObjectCollection->featureMember[0]->GeoObject->name;
                    if($address)
                    {
                        $f_building = $this->tools->filterBuildings($v['building']);
                        $arr = explode(', ',$address);
                        $street = trim(str_replace('улица', '', $arr[0]));
                        $building = is_numeric($f_building) && $arr[1] != $f_building ? $f_building : $arr[1];
                        $_POST['address'][$k]['street'] = $street;
                        $_POST['address'][$k]['building'] = $building;
                    }
                    $pos = $xml->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
                    if($pos)
                    {
                        $arr = explode(' ', $pos);
                        $row['longitude'] = $arr[0];
                        $row['latitude'] = $arr[1];
                    }
                    if($streets_buildings[$street])
                    {
                        $row['id_street'] = $streets_buildings[$street]['id'];
                        if($streets_buildings[$street]['buildings'][$building])
                            $row['id_building'] = $streets_buildings[$street]['buildings'][$building]['id_building'];
                        else
                            $row['id_building'] = $building_model->insert(array('name' => $building, 'id_street' => $row['id_street'], 'cdate' => $date));
                    }
                    else
                    {
                        $row['id_street'] = $str_model->insert(array('name' => $street, 'cdate' => $date));
                        $row['id_building'] = $building_model->insert(array('name' => $building, 'id_street' => $row['id_street'], 'cdate' => $date));
                    }
                    $id_address_group = $address_groups_model->insert($row);
                    $wd = array();
                    switch($v['workdays']['radio'])
                    {
                        case '24':
                            $wd['always'] =  1;

                            break;

                        case 'daily':

                            $from = $v['workdays']['daily']['from']['hour'];
                            $m_from = $v['workdays']['daily']['from']['minute'];
                            $to = $v['workdays']['daily']['to']['hour'];
                            $m_to = $v['workdays']['daily']['to']['minute'];
                            if($to < $from)
                            {
                                $wd = array();
                                $wd['daily'] =  1;
                                $wd['work_from'] = $from . ':' . $m_from . ':00';
                                $wd['work_to'] = '23:59:59';
                                $id_workday = $workdays_model->insert($wd);
                                $workdays_groups_model->insert(array('id_workday' => $id_workday, 'id_address_group' => $id_address_group));

                                $wd = array();
                                $wd['daily'] =  1;
                                $wd['work_from'] = '00:00:00';
                                $wd['work_to'] = $to . ':' . $m_to . ':';
                                $id_workday = $workdays_model->insert($wd);
                                $workdays_groups_model->insert(array('id_workday' => $id_workday, 'id_address_group' => $id_address_group));
                            }
                            else
                            {
                                $wd = array();
                                $wd['daily'] =  1;
                                $wd['work_from'] = $from . ':' . $m_from . ':00';
                                $wd['work_to'] = $to . ':' . $m_to . ':';
                                $id_workday = $workdays_model->insert($wd);
                                $workdays_groups_model->insert(array('id_workday' => $id_workday, 'id_address_group' => $id_address_group));
                            }
                            break;

                        case 'schedule':
                            foreach($this->tools->simple_weekdays as $key => $eng)
                            {
                                if($v['workdays'][$eng]['checked'])
                                {
                                    $from = $v['workdays'][$eng]['from']['hour'];
                                    $m_from = $v['workdays'][$eng]['from']['minute'];
                                    $to = $v['workdays'][$eng]['to']['hour'];
                                    $m_to = $v['workdays'][$eng]['to']['minute'];
                                    if($to < $from)
                                    {
                                        $wd = array();
                                        $wd['weekday'] = $eng;
                                        $wd['work_from'] = $from . ':' . $m_from . ':00';
                                        $wd['work_to'] = '23:59:59';
                                        $id_workday = $workdays_model->insert($wd);
                                        $workdays_groups_model->insert(array('id_workday' => $id_workday, 'id_address_group' => $id_address_group));

                                        $wd = array();
                                        $next_day =  $this->tools->simple_weekdays[$key + 1] ? $this->tools->simple_weekdays[$key + 1] : 'mon';
                                        $wd['weekday'] = $next_day;
                                        $wd['work_from'] = '00:00:00';
                                        $wd['work_to'] = $to . ':' . $m_to . ':';
                                        $id_workday = $workdays_model->insert($wd);
                                        $workdays_groups_model->insert(array('id_workday' => $id_workday, 'id_address_group' => $id_address_group));
                                    }
                                    else
                                    {
                                        $wd = array();
                                        $wd['weekday'] = $eng;
                                        $wd['work_from'] = $from . ':' . $m_from . ':00';
                                        $wd['work_to'] = $to . ':' . $m_to . ':';
                                        $id_workday = $workdays_model->insert($wd);
                                        $workdays_groups_model->insert(array('id_workday' => $id_workday, 'id_address_group' => $id_address_group));
                                    }
                                }
                            }
                        break;
                    }
                }
            }
            $cities_model = new cities_model('user_cities');
            if($cities_model->checkUserCities($_POST['id_user'], $_POST['city'], '1') == 0)
            {
                $row = array();
                $row['id_city'] = $_POST['city'];
                $row['id_user'] = $_POST['id_user'];
                $row['type'] = 1;
                $row['cdate'] = $date;
                $cities_model->insert($row);
            }
        }
    }

    public function id()
    {
        if(!$_GET['add'])
        {
            $malls_model = new malls_model('malls', $this->system->city['alias']);
            $mall = $malls_model->getMall($_GET['id']);
            $key = $mall['address']['id_address'];
            $mall['address'] = array( $key => $mall['address']);
            $mall['address'][$mall['address']['id_address']]['workdays'] = $this->tools->parse_workdays($mall['address'][$key]['workdays']);
            $this->system->log[] = print_r($mall,1);
            $this->t->assign('firm',$mall);
            $this->system->breadcrumbs = array(array(
                'title' => $mall['name'],
                'alias' => $this->system->parts[0] . '/?id=' . $mall['id']
            ));
        }
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

            case 'building_suggest':
                if(!$value = $this->tools->filterBuildings($_POST['value']))exit;
                $cities_model = new default_model('cities');
                $cities = $this->tools->idArray($cities_model->getAll());
                $streets_model = new default_model('streets',$cities[$_POST['city']]['alias']);
                $id_street = $streets_model->getByField('name', $_POST['street'])['id'];
                $buildins_model = new cities_model('', $cities[$_POST['city']]['alias']);
                $buildings = $buildins_model->buildingSuggest($value, $id_street);
                if(count($buildings) == 1 && $buildings[0] == $_POST['value'])
                {
                    exit;
                }
                echo json_encode($buildings);
                exit;
                break;
        }
    }
    private function assignDays()
    {
        $this->t->assign('weekdays', $this->tools->weekdays);
        $hours = array();
        for($i = 0; $i < 24; $i ++)
        {
            if($i < 10)
                $hours[] = '0'. $i;
            else
                $hours[] = $i;
        }
        $this->t->assign('hours', $hours);
        $minutes = array();
        for($i = 0; $i < 60; $i ++)
        {
            if($i < 10)
                $minutes[] = '0'. $i;
            else
                $minutes[] = $i;
        }
        $this->t->assign('minutes', $minutes);
    }
}