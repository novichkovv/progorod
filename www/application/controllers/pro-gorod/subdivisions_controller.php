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
        if($_GET['id'])return;
        $subdivisions_model = new subdivisions_model();
        $subdivision = $subdivisions_model->getSubdivisionsWithRoute(false, $this->system->parts[0]);
        $firms_model = new firms_model('firms', $this->system->city['alias']);
        $params['workdays'] = array(
            'weekday' =>'sat',
            'work_to' => '1'
        );
        $params['limit'] = 10;
        $params['id_subdivision'] = $subdivision['id'];
        $firms = $firms_model->getSubdivisionsFirms($params);
        $this->system->log[] = print_r($firms,1);
        <script type="text/javascript" src="http://htmlweb.ru/geo/api.js"></script>
<div id="info">
    <input type="button"
           onclick="this.disabled=true;_geo.o_info=getObj('info');return !_geo.getGeo(1);"
           value="Получить координаты">
</div>
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

}