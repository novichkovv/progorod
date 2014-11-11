<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 21.10.14
 * Time: 18:47
 */
class crudTest extends PHPUnit_Framework_TestCase
{
    public function testRedefineTemplate()
    {
        $controller = new test_controller();
        $controller->system = new system_module();
        $smarty = new smarty_module();
        $controller->t = $smarty->smarty;
        $crud = new crud_extension($controller);
        $this->assertEquals($controller->t->template_dir[0], EXT_DIR . 'crud' . DS . 'templates' . DS);
        $this->assertEquals($controller->system->template_file, 'content.tpl');

    }
}