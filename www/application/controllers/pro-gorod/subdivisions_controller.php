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
        $this->system->script = array('subdivisions','jquery.scrolling-parallax');
        if($_GET['id'])return;
        if($_SESSION['client']['location'])$this->checkLocationData();
        $this->t->assign('location',$_SESSION['client']['location']);
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
        $comments_model = new default_model('firm_comments', $this->system->city['alias']);
        $tmp = $comments_model->getByField('id_firm', $firm['id'], true, 'cdate DESC','1');
        $comments_count = $comments_model->countByField('id_firm', $firm['id']);
        $comments = array();
        foreach($tmp as $k => $v)
        {
            $comments[$k]['name'] = $v['name'];
            $comments[$k]['text'] = mb_strlen($v['text']) > 400 ? mb_substr($v['text'], 0, 300, 'utf-8') . ( mb_strlen($v['text']) > 400 ? '<span class="comment_arr"> &rarr;</span><span class="comment_hidden">' .mb_substr($v['text'], 300, null, 'utf-8'). '</span> ' : '') : $v['text'];
            $str_date = strtotime($v['cdate']);
            $comments[$k]['date'] = date('d ', $str_date). $this->tools->months_rus_genitive[date('m',$str_date)]. ',' . date(' Y H:i', strtotime($v['cdate']));
        }
        $this->t->assign('comments_count', $comments_count);
        $this->t->assign('comments', $comments);
        $this->system->breadcrumbs = array(array(
            'title' => $firm['name'],
            'alias' => $this->system->parts[0] . '/?id=' . $firm['id']
        ));
    }

    public function handler()
    {
        //session_destroy();
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
                $row['id_firm'] = $_POST['id_firm'];
                $model = new default_model('firm_comments', $this->system->city['alias']);
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
                exit;
            break;

            case "more_comments":
                $comments_model = new default_model('firm_comments', $this->system->city['alias']);
                $tmp = $comments_model->getByField('id_firm', $_GET['id'], true, 'cdate DESC',$_POST['start'] . ',' . $_POST['limit']);
                $comments_count = $comments_model->countByField('id_firm', $_GET['id']);
                $comments = array();
                foreach($tmp as $k => $v)
                {
                    $comments[$k]['name'] = $v['name'];
                    $comments[$k]['text'] = mb_strlen($v['text']) > 400 ? mb_substr($v['text'], 0, 300, 'utf-8') . ( mb_strlen($v['text']) > 400 ? '<span class="comment_arr"> &rarr;</span><span class="comment_hidden">' .mb_substr($v['text'], 300, null, 'utf-8'). '</span> ' : '') : $v['text'];
                    $str_date = strtotime($v['cdate']);
                    $comments[$k]['date'] = date('d ', $str_date). $this->tools->months_rus_genitive[date('m',$str_date)]. ',' . date(' Y H:i', strtotime($v['cdate']));
                }
                $this->t->assign('comments_left', $comments_count - $_POST['start'] - $_POST['limit']);
                $this->t->assign('comments', $comments);
                $this->t->display(TEMPLATE_DIR . 'subdivisions/ajax/more_comments.tpl');
                exit;
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