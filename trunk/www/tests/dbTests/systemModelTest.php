<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 10.10.14
 * Time: 18:55
 */
require_once(__DIR__. DS . 'abstractDb.php');
class systemModelTest extends abstractDb
{
    /**
     *  @return PHPUnit_Extensions_Database_DB_IDataSet
     */

    function getDataSet()
    {
        return $this->createXMLDataSet(dirname(__FILE__) . DS . 'test_table.xml');
    }
    public function testGetController()
    {
        $model = new system_model();
        $result = $model->getController('test');
        $this->assertFalse($result);
        $model->table = 'system_routes';
        $row = array(
        'id' => '1',
        'alias' => 'test'
        );
        $model->insert($row);
        $result = $model->getController('test');
        $this->assertEquals($result['id'], 1);
        $row = array(
            'alias' => 'test/test1',
            'project' => 'engine',
            'controller' => 'test1_controller.php',
            'title' => 'test1',
            'parent' => 1

        );
        $model->insert($row);
        $result = $model->getController('test/test1');
        $this->assertEquals($result['controller'], 'test1_controller.php');
        $this->assertEquals($result['parents'][0]['title'],'test');
        $row = array(
            'alias' => 'test/test1/test2',
            'project' => 'engine',
            'controller' => 'test2_controller.php',
            'title' => 'test2',
            'parent' => 2

        );
        $model->insert($row);
        $row = array(
            'alias' => 'test/test1/test2/test3',
            'project' => 'engine',
            'controller' => 'test3_controller.php',
            'title' => 'test3',
            'parent' => 3

        );
        $model->insert($row);
        $result = $model->getController('test/test1/test2/test3');
        $this->assertEquals($result['controller'], 'test3_controller.php');
        $this->assertEquals($result['parents'][2]['title'], 'test');
        $this->assertEquals($result['parents'][1]['title'], 'test1');
        $this->assertEquals($result['parents'][0]['title'], 'test2');

    }
}