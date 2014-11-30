<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 17.11.14
 * Time: 21:07
 */
class malls_controller extends controller
{
    public function init()
    {
        if($_GET['id'])return;
        if($_SESSION['client']['location'])$this->checkLocationData();
        $this->t->assign('location',$_SESSION['client']['location']);
        $this->system->script = array('subdivisions');
        if($_GET['id'])return;
        $malls_model = new malls_model('malls', $this->system->city['alias']);
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
        $tmp = $malls_model->getMalls($params);
        $malls = array();
        foreach($tmp as $v)
        {
            foreach($v as $row => $val)
            {
                if(in_array($row, array('id_firm','name', 'short_description','site')))
                    $malls[$v['id_firm']][$row] = $val;
                elseif(in_array($row,array('always','daily','weekday','work_from','work_to')))
                {
                    $malls[$v['id_firm']]['address'][$v['dist'] ? $v['dist'] : $v['id_address']]['workdays'][$v['id_workday']][$row] = $val;
                }
                else
                    $malls[$v['id_firm']]['address'][$v['dist'] ? $v['dist'] : $v['id_address']][$row] = $val;
            }
        }
        foreach($malls as $id => $mall)
        {
            ksort($mall['address']);
            $malls[$id]['address'] = array_shift($mall['address']);
            $malls[$id]['address']['workdays'] = $this->tools->parse_workdays($malls[$id]['address']['workdays']);
        }
        $this->t->assign('malls',$malls);
    }

    public function id()
    {
        $malls_model = new malls_model('malls', $this->system->city['alias']);
        $mall = $malls_model->getMall($_GET['id']);
        $mall['address']['workdays'] = $this->tools->parse_workdays($mall['address']['workdays']);
        $this->t->assign('mall',$mall);
        $firms_model = new firms_model('firms', $this->system->city['alias']);
        $firms = $firms_model->getAll();
        $this->t->assign('firms', $firms);

        $comments_model = new default_model('mall_comments', $this->system->city['alias']);
        $tmp = $comments_model->getByField('id_firm', $mall['id'], true, 3);
        $comments = array();
        foreach($tmp as $k => $v)
        {
            $comments[$k]['name'] = $v['name'];
            $comments[$k]['text'] = mb_substr($v['text'], 0, 300, 'utf-8') . ( mb_strlen($v['text']) > 300 ? ' &rarr;' : '');
            $comments[$k]['date'] = date('d M, y H:i', strtotime($v['cdate']));
        }
        $this->t->assign('comments', $comments);
        $this->system->breadcrumbs = array(array(
            'title' => $mall['name'],
            'alias' => $this->system->parts[0] . '/?id=' . $mall['id']
        ));
    }

    public function handler()
    {
        if(isset($_POST['add_comment_btn']))
        {
            $warning = false;
            if(!$_POST['comment_text'])
                $warning = 'Введите отзыв';
            elseif(!$_POST['name'] || $_POST['name'] == '')
                $warning = 'Введите имя';
            if($warning)
            {
                $this->t->assign('warning', $warning);
            }
            else
            {
                $row = array();
                $row['creator'] = $_POST['creator'];
                $row['cdate'] = date('Y-m-d H:i:s');
                $row['name'] = $_POST['name'];
                $row['text'] = $_POST['comment_text'];
                $row['id_firm'] = $_POST['id_mall'];
                $model = new default_model('mall_comments', $this->system->city['alias']);
                $model->insert($row);
                $_SESSION['client']['name'] = $_POST['name'];
                header('Location: ' . SITE_DIR . substr($_SERVER['REQUEST_URI'],1));
            }
        }
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