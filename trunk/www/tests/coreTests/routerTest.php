<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 02.10.14
 * Time: 19:53
 */
class routerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerGetController
    */
    public function testGetController($data)
    {
        $router = new router();
        $controller = $router->getController($data);
        $pattern = "/[a-z]+_(?:[a-z]+_)?controller/";
        $this->assertRegExp($pattern, $controller);
    }
    public function providerGetController()
    {
        return array(
            array('firms','titi'),
            array('eldorado')
        );
    }

    public function testStart()
    {
        $router = new router;
        $this->assertTrue(class_exists('controller'));
        $this->assertTrue(class_exists('smarty'));
        $this->assertTrue(class_exists('common_controller'));
    }

}