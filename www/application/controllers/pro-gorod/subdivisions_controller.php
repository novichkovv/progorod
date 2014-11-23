<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 16.11.14
 * Time: 0:50
 */
class subdivisions_controller extends controller
{
    public function init()
    {
        if($_SESSION['client']['location'])$this->checkLocationData();
        $this->t->assign('location',$_SESSION['client']['location']);
        $this->system->script = array('subdivisions');
        if($_GET['id'])return;
        $subdivisions_model = new subdivisions_model();
        $subdivision = $subdivisions_model->getSubdivisionsWithRoute(false, $this->system->parts[0]);
        $firms_model = new firms_model('firms', $this->system->city['alias']);
//        $params['workdays'] = array(
//            'weekday' =>'sat',
//            'work_to' => '1'
//        );
        if(isset($_GET['geo']) && $_SESSION['client']['location'])
        {
            $params['location']['latitude'] = $_SESSION['client']['location']['latitude'];
            $params['location']['longitude'] = $_SESSION['client']['location']['longitude'];
        }
        $params['limit'] = 10;
        $params['id_subdivision'] = $subdivision['id'];
        $tmp = $firms_model->getSubdivisionsFirms($params);
        $firms = array();
        foreach($tmp as $v)
        {
            foreach($v as $row => $val)
            {
                if(in_array($row, array('id_firm','name', 'short_description','site')))
                    $firms[$v['id_firm']][$row] = $val;
                elseif(in_array($row,array('always','daily','weekday','work_from','work_to')))
                {
                    $firms[$v['id_firm']]['address'][$v['dist'] ? $v['dist'] : $v['id_address']]['workdays'][$v['id_workday']][$row] = $val;
                }
                else
                    $firms[$v['id_firm']]['address'][$v['dist'] ? $v['dist'] : $v['id_address']][$row] = $val;
            }
        }
        foreach($firms as $id => $firm)
        {
            ksort($firm['address']);
            $firms[$id]['address'] = array_shift($firm['address']);
            $firms[$id]['address']['workdays'] = $this->tools->parse_workdays($firms[$id]['address']['workdays']);
        }
        $this->t->assign('firms',$firms);
        //$this->system->log[] = print_r($tmp,1);


    }
    public function id()
    {

        $divisions_model = new divisions_model();
        $divisions = $divisions_model->getFullDivisions();
        $firms_model = new firms_model('firms', $this->system->city['alias']);
        $firm = $firms_model->getFirm($_GET['id']);
        foreach($firm['address'] as $k=>$v)
        {
            $firm['address'][$k]['workdays'] = $this->tools->parse_workdays($v['workdays']);

        }
        $this->t->assign('firm',$firm);
        $this->system->breadcrumbs = array(array(
            'title' => $firm['name'],
            'alias' => $this->system->parts[0] . '/?id=' . $firm['id']
        ));
    }

    public function ajax()
    {
        switch($_REQUEST['action'])
        {
            case 'set_client_location':
                $_SESSION['client']['location'] = array(
                    'latitude' => $_POST['latitude'],
                    'longitude' => $_POST['longitude'],
                    'speed' => $_POST['speed'],
                    'accuracy' => $_POST['accuracy'],
                    'timestamp' => $_POST['timestamp']
                );
            break;
        }
    }

    private function checkLocationData()
    {
        $dif = time() - substr($_SESSION['client']['location']['timestamp'],0,10);
        if($_SESSION['client']['location']['speed'] == 0)
        {
            if($dif > 3600)
            {
                $_SESSION['client']['location']['deprecated'] = true;
            }
            else
               unset($_SESSION['client']['location']['deprecated']);
        }
        else
        {
            if($dif > 60)
            {
                $_SESSION['client']['location']['deprecated'] = true;
            }
            else
                unset($_SESSION['client']['location']['deprecated']);
        }

    }

}