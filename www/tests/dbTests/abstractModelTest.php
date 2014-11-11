<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 06.10.14
 * Time: 18:41
 */
require_once(__DIR__. DS . 'abstractDb.php');
class abstractModelTest extends abstractDb
{
    /**
     *  @return PHPUnit_Extensions_Database_DB_IDataSet
     */

    function getDataSet()
    {
        return $this->createXMLDataSet(dirname(__FILE__) . DS . 'test_table.xml');
    }

    /**
     * @dataProvider providerGetRow
     */
    function testGetRow($data)
    {
        $query_table = $this->getConnection()->createQueryTable('system_routes', 'SELECT * FROM
        system_routes');
        $expected = $this->createXMLDataSet(dirname(__FILE__) . DS . 'test_table.xml')->getTable('system_routes');
        $this->assertTablesEqual($query_table, $expected);
        $model = new default_model('system_routes');
        $result = $model->getRow();
        $this->assertEquals($result, $data);
    }
    /**
     * @dataProvider providerGetAll
     */

    function testGetAll($data)
    {
        $model = new default_model('system_routes');
        $row = array(
            'project' => 'engine',
            'alias' => '',
            'controller' => 'default_controller.php',
            'title' => 'default',
            'parent' => '0'
        );
        $id = $model->insert($row);
        $this->assertEquals($id, 2);
        $result = $model->getAll();
        $this->assertEquals($result, $data);
        $result = $model->getAll('id DESC');
        $this->assertNotEquals($result, $data);
        $result = $model->getAll(false, '1,1');
        $this->assertNotEquals($result, $data);
        $result = $model->getAll('id', 2);
        $this->assertEquals($result, $data);
    }

    function testUpdate()
    {
        $model = new default_model('system_routes');
        $row = array(
            'id' => '1',
            'alias' => 'test'
        );
        $id = $model->insert($row);
        $result = $model->getRow();
        $this->assertEquals($id, 1);
        $this->assertEquals($result['alias'], 'test');
    }

    public function testGetById()
    {
        $model = new default_model('system_routes');
        $result = $model->getById(1);
        $this->assertNotEmpty($result);
        $this->assertEquals($result['controller'], 'test_controller.php');
    }

    /**
     * @dataProvider providerGetAll
     */
    public function testGetByFields($data)
    {
        $model = new system_model('system_routes');
        $result = $model->getByField('project', 'engine');
        $this->assertEquals($result['controller'], 'test_controller.php');
        $row = array(
            'project' => 'engine',
            'alias' => '',
            'controller' => 'default_controller.php',
            'title' => 'default',
            'parent' => '0'
        );
        $id = $model->insert($row);
        $this->assertEquals($id, 2);
        $result = $model->getByField('project', 'engine', true);
        $this->assertEquals($result, $data);
        $result = $model->getByField('project', 'engine', true, 'id DESC');
        $this->assertNotEquals($result, $data);
        $result = $model->getByField('project', 'engine', true, false, '1');
        $this->assertNotEquals($result, $data);
    }

    public function testDeleteById()
    {
        $model = new system_model('system_routes');
        $model->deleteById(1);
        $result = $model->getById(1);
        $this->assertEmpty($result);
    }
    public function testDelete()
    {
        $model = new system_model('system_routes');
        $row = array(
            'project' => 'engine',
            'alias' => '',
            'controller' => 'default_controller.php',
            'title' => 'default',
            'parent' => '0'
        );
        $id = $model->insert($row);
        $this->assertEquals($id, 2);
        $model->delete('project', 'engine');
        $result = $model->getAll();
        $this->assertEmpty($result);
    }
    public function testShowAttribute()
    {
        $model = new system_model();
        $model->table = 'system_routes';
        $model->getByField('alias', 'test', true,'id DESC', '1,1', true);
        $this->expectOutputString('SELECT * FROM
        system_routes WHERE alias = ? ORDER BY id DESC LIMIT 1,1');


    }
    public function providerGetAll()
    {
        return array(
            array(
                array(
                    array(
                        'id'=>'1',
                        'project' => 'engine',
                        'alias' => '',
                        'controller' => 'test_controller.php',
                        'title' => 'test',
                        'parent' => '0'
                    ),
                    array(
                        'id' => '2',
                        'project' => 'engine',
                        'alias' => '',
                        'controller' => 'default_controller.php',
                        'title' => 'default',
                        'parent' => '0'
                    ),

                )
            )
        );
    }
    public function providerGetRow()
    {
        return array(
            array(
                array(
                    'id'=>'1',
                    'project' => 'engine',
                    'alias' => '',
                    'controller' => 'test_controller.php',
                    'title' => 'test',
                    'parent' => '0'
                )
            )
        );
    }

}