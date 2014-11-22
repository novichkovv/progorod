<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 12.11.14
 * Time: 22:44
 */
class divisions_controller extends controller
{
    public function init()
    {

    }
    public function after_auth()
    {
        $crud = new crud_extension($this);
        switch($this->system->parts[0])
        {
             case "divisions":
                 if($_POST['add_button'])
                 {
                    $system_routes_model = new default_model('system_routes');
                    $divisions_model = new default_model('divisions');
                     $row = array();
                     if($_GET['id'])
                     {
                         $division = $divisions_model->getById($_GET['id']);
                         $row['id'] = $division['id_route'];
                     }
                    $row['project'] = 'pro-gorod';
                    $row['controller'] = 'divisions_controller.php';
                    $row['alias'] = $_POST['alias'];
                    $row['parent'] = 0;
                    $row['position'] = $_POST['position'];
                    $row['title'] = $_POST['name'];
                    if($id_route = $system_routes_model->insert($row))
                    {
                        $row = array();
                        if($_GET['id'])
                            $row['id'] = $_GET['id'];
                        $row['name'] = $_POST['name'];
                        $row['id_route'] = $_GET['id'] ? $division['id_route'] : $id_route;
                        $row['title'] = $_POST['title'];
                        $row['keywords'] = $_POST['keywords'];
                        $row['description'] = $_POST['description'];
                        $row['creator'] = $this->user['id'];
                        $row['cdate'] = date('Y-m-d H:i:s');
                        $divisions_model->insert($row);
                        header('Location: ' . SITE_DIR . 'divisions');

                    }
                 }
                 else
                 {
                     $params['default_model'] = 'divisions';
                     $params['limits']['create'] = true;
                     $params['limits']['main'] = true;
                     $params['limits']['delete'] = true;
                     $params['xs'] = 12;
                     $params['sm'] = 6;
                     $params['md'] = 4;
                     $params['fields']['alias'] = array(
                         'label' => 'Алиас'
                     );
                     $params['fields']['title'] = array(
                         'label' => 'Название'
                     );
                     $params['fields']['name'] = array(
                         'label' => 'Титул'
                     );
                     $params['fields']['description'] = array(
                         'type' => 'textarea',
                         'label' => 'Описание'
                     );
                     $params['fields']['keywords'] = array(
                         'type' => 'textarea',
                         'label' => 'Ключевые слова'
                     );
                     $params['fields']['position'] = array(
                         'label' => 'Позиция'
                     );
                     if(isset($_GET['id']))
                     {
                         $divisions_model  = new divisions_model();
                         $division = $divisions_model->getDivisionsWithRoute($_GET['id']);
                         $params['row'] = $division;
                     }
                     $crud->params($params);

                     if(!isset($_GET['id']) && !isset($_GET['add']))
                     {
                         $divisions_model  = new divisions_model();
                         $divisions = $divisions_model->getDivisionsWithRoute();
                         $crud->user_main($divisions);
                     }

                 }

             break;

             case "subdivisions":
                 if($_POST['add_button'])
                 {
                     $system_routes_model = new default_model('system_routes');
                     $subdivisions_model = new default_model('subdivisions');
                     $row = array();
                     if($_GET['id'])
                     {
                         $subdivision = $subdivisions_model->getById($_GET['id']);
                         $row['id'] = $subdivision['id_route'];
                     }
                     $row['project'] = 'pro-gorod';
                     $row['controller'] = 'subdivisions_controller.php';
                     $row['alias'] = $_POST['alias'];
                     $row['parent'] = $_POST['id_division'];
                     $row['position'] = $_POST['position'];
                     $row['title'] = $_POST['name'];
                     if($id_route = $system_routes_model->insert($row))
                     {
                         $row = array();
                         if($_GET['id'])
                             $row['id'] = $_GET['id'];
                         $row['name'] = $_POST['name'];
                         $row['id_route'] = $_GET['id'] ? $subdivision['id_route'] : $id_route;
                         $row['id_division'] = $_POST['id_division'];
                         $row['title'] = $_POST['title'];
                         $row['keywords'] = $_POST['keywords'];
                         $row['description'] = $_POST['description'];
                         $row['creator'] = $this->user['id'];
                         $row['cdate'] = date('Y-m-d H:i:s');
                         $id = $subdivisions_model->insert($row);
                         if($_FILES['icon'])
                         {
                             $image = new image_module();
                             $image->load($_FILES['icon']['tmp_name']);
                             $image->resize(30,30);
                             $image->save(ROOT_DIR . 'uploads' . DS . 'icons' . DS . 'subdivisions' . DS . '30_'.$id.'.png', IMAGETYPE_PNG);
                             $image->load($_FILES['icon']['tmp_name']);
                             $image->resize(60,60);
                             $image->save(ROOT_DIR . 'uploads' . DS . 'icons' . DS . 'subdivisions' . DS . '60_'.$id.'.png', IMAGETYPE_PNG);
                             $image->load($_FILES['icon']['tmp_name']);
                             $image->resize(15,15);
                             $image->save(ROOT_DIR . 'uploads' . DS . 'icons' . DS . 'subdivisions' . DS . '15_'.$id.'.png', IMAGETYPE_PNG);
                         }

                         header('Location: ' . SITE_DIR . 'subdivisions');
                     }
                 }
                 else
                 {
                     $divisions_model = new default_model('divisions');
                     $tmp = $divisions_model->getAll();
                     foreach($tmp as $k => $v)
                     {
                         $divisions[$k]['label'] = $v['name'];
                         $divisions[$k]['value'] = $v['id'];
                     }
                     $params['default_model'] = 'subdivisions';
                     $params['limits']['create'] = true;
                     $params['limits']['main'] = true;
                     $params['limits']['delete'] = true;
                     $params['xs'] = 12;
                     $params['sm'] = 6;
                     $params['md'] = 4;
                     $params['fields']['id_division'] = array(
                         'type' => 'select',
                         'label' => 'Рубрика',
                         'value' => $divisions
                     );
                     $params['fields']['alias'] = array(
                         'label' => 'Алиас'
                     );
                     $params['fields']['title'] = array(
                         'label' => 'Название'
                     );
                     $params['fields']['name'] = array(
                         'label' => 'Титул'
                     );
                     $params['fields']['description'] = array(
                         'type' => 'textarea',
                         'label' => 'Описание'
                     );
                     $params['fields']['keywords'] = array(
                         'type' => 'textarea',
                         'label' => 'Ключевые слова'
                     );
                     $params['fields']['position'] = array(
                         'label' => 'Позиция'
                     );
                     $params['fields']['icon'] = array(
                         'ignore' => true,
                         'type' => 'image',
                         'label' => 'Иконка',
                         'files' => array(
                             array(
                                 'id_name' => true,
                                 'name' => 'subdivision_icon_30_'
                             ),
                             array(
                                 'id_name' => true,
                                 'name' => 'subdivision_icon_60_'
                             )
                         )
                     );
                     if(isset($_GET['id']))
                     {
                         $subdivisions_model  = new subdivisions_model();
                         $subdivision = $subdivisions_model->getSubdivisionsWithRoute($_GET['id']);
                         $params['row'] = $subdivision;
                     }
                     $crud->params($params);

                     if(!isset($_GET['id']) && !isset($_GET['add']))
                     {
                         $subdivisions_model  = new subdivisions_model();
                         $subdivisions = $subdivisions_model->getSubdivisionsWithRoute();
                         $crud->user_main($subdivisions);
                     }

                 }
             break;
        }
    }
}