<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 08.11.14
 * Time: 23:10
 */
class cities_controller extends controller
{
    public function init()
    {

    }
    public function after_auth()
    {
        switch($this->system->parts[1])
        {
            case "list":
                $regions_model = new default_model('regions');
                $regions = $regions_model->getAll();
                $regions_select = array();
                foreach($regions as $k => $v)
                {
                    $regions_select[$k]['value'] = $v['id'];
                    $regions_select[$k]['label'] = $v['name'];
                }
                $crud = new crud_extension($this);
                $params = array();
                $params['default_model'] = 'cities';
                $params['col'] = 4;
                $params['fields'] = array(
                    'id_region' => array(
                        'label' => 'Регион',
                        'type' => 'select',
                        'value' => $regions_select
                    ),
                    'alias' => array(
                        'label' => 'Алиас',
                    ),
                    'name' => array(
                        'label' => 'Название',
                    ),
                    'name_genitive' => array(
                        'label' => 'Название в родительном падеже',
                    ),
                    'keywords' => array(
                        'type' => 'textarea',
                        'label' => 'Ключевые слова',
                    ),
                );
                $crud->params($params);

            break;

            case "regions":

                $crud = new crud_extension($this);
                $params = array();
                $params['col'] = 4;
                $params['default_model'] = 'regions';
                $params['creator'] = $this->user['id'];
                $params['fields'] = array(

                    'alias' => array(
                        'label' => 'Алиас',
                    ),
                    'name' => array(
                        'label' => 'Название',
                    ),
                    'name_genitive' => array(
                        'label' => 'Название в родительном падеже',
                    ),
                    'keywords' => array(
                        'type' => 'textarea',
                        'label' => 'Ключевые слова',
                    ),
                );
                $crud->params($params);
            break;
        }

    }
}