<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 15.10.14
 * Time: 18:30
 */
class systemModuleTest extends PHPUnit_Framework_TestCase
{
    public function testGetVars()
    {
        $_REQUEST['route'] = "";
        $system = new system_module();
        $this->assertEquals($system->alias, "");
        $this->assertEquals($system->parts, array(0 => ''));
        $this->assertEquals($system->template_folder, "");
        $this->assertEquals($system->template_file, 'content.tpl');
        $_REQUEST['route'] = "";
        $_GET['var'] = 'value';
        $system = new system_module();
        $this->assertEquals($system->alias, "");
        $this->assertEquals($system->parts, array(0 => ''));
        $this->assertEmpty($system->template_folder);
        $this->assertEquals($system->template_file, 'content.tpl');
        $_REQUEST['route'] = "";
        unset($_GET);
        $_GET['id'] = 123;
        $system = new system_module();
        $this->assertEquals($system->lias, "");
        $this->assertEquals($system->parts, array(0 => ''));
        $this->assertEmpty($system->template_folder);
        $this->assertEquals($system->template_file, 'id.tpl');
        unset($_GET);
        $_REQUEST['route'] = "test/";
        $system = new system_module();
        $this->assertEquals($system->alias, "test");
        $this->assertEquals($system->parts, array('test'));
        $this->assertEquals($system->template_folder, 'test' . DS);
        $this->assertEquals($system->template_file, 'content.tpl');
        $_REQUEST['route'] = "test";
        unset($_GET);
        $_GET['var'] = 'value';
        $system = new system_module();
        $this->assertEquals($system->alias, "test");
        $this->assertEquals($system->parts, array('test'));
        $this->assertEquals($system->template_folder, 'test' . DS);
        $this->assertEquals($system->template_file, 'content.tpl');
        $_REQUEST['route'] = "test/";
        unset($_GET);
        $_GET['id'] = '123';
        $system = new system_module();
        $this->assertEquals($system->alias, "test");
        $this->assertEquals($system->parts, array('test'));
        $this->assertEquals($system->template_folder, 'test' . DS);
        $this->assertEquals($system->template_file, 'id.tpl');
        unset($_GET);
        $_REQUEST['route'] = "test/tests/";
        $system = new system_module();
        $this->assertEquals($system->alias, "test/tests");
        $this->assertEquals($system->parts, array('test','tests'));
        $this->assertEquals($system->template_folder, 'test' . DS . 'tests' . DS);
        $this->assertEquals($system->template_file, 'content.tpl');
        $_GET['var'] = 'value';
        $_REQUEST['route'] = "test/tests";
        $system = new system_module();
        $this->assertEquals($system->alias, "test/tests");
        $this->assertEquals($system->parts, array('test','tests'));
        $this->assertEquals($system->template_folder, 'test' . DS . 'tests' . DS);
        $this->assertEquals($system->template_file, 'content.tpl');
        unset($_GET);
        $_REQUEST['route'] = "test/tests/";
        $_GET['add'] = '';
        $system = new system_module();
        $this->assertEquals($system->alias, "test/tests");
        $this->assertEquals($system->parts, array('test','tests'));
        $this->assertEquals($system->template_folder, 'test' . DS . 'tests' . DS);
        $this->assertEquals($system->template_file, 'add.tpl');
    }
}