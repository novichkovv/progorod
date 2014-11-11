<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 28.09.14
 * Time: 22:56
 */

require_once(CORE_DIR . 'autoloader.php');
class autoloaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerClassRoute
     */
    public function testClassRouteTest($class_name, $folder)
    {
        $result = getClassRoute($class_name);
        $this->assertEquals($result, $folder);
    }
    /**
     * @dataProvider providerCheckClassRoute
     */
    public function testCheckClassRoute($folder)
    {
        $result = checkClassRoute($folder);
        $this->assertFileExists($result);
    }
    /**
     * @dataProvider providerClassFiles
     */
    public function testClassFileExists($filename, $folder)
    {
        $result = getClassFile($filename, $folder);
        $this->assertFileExists($result);
    }
    /**
     * @dataProvider providerClassExists
     */
    public function testClassExists($class_name)
    {
        autoload($class_name);
        $this->assertTrue(class_exists($class_name));
    }
    /**
     * @dataProvider providerClassExistsException
     */
    public function testClassExistsException($class_name)
    {
        autoload($class_name);
    }
    /**
     * @dataProvider providerCheckClassRouteException
     */
    public function testCheckClassRouteException($folder)
    {
        checkClassRoute($folder);
    }
    public function providerClassRoute()
    {
        return array(
            array('autoloader', 'core'),
            array('common_controller', 'controllers'.DS .'engine'),
            array('default_model', 'models'),
            array('tools_module', 'modules'),
            array('crud_extension', 'extensions' . DS . 'crud'),
        );
    }
    public function providerClassFiles()
    {
        $dir = ROOT_DIR . 'application' . DS;
        return array(
            array('common_controller', $dir . 'controllers' . DS . 'engine' . DS),
            array('tools_module', $dir . 'modules' . DS),
            array('default_model', $dir . 'models' . DS),
            array('autoloader', $dir . 'core' . DS)
        );
    }
    public function providerCheckClassRoute()
    {
        return array(array('controllers'),
            array('extensions'),
            array('models'),
            array('core'),
        );
    }
    public function providerCheckClassRouteException()
    {
        return array(array('dsfvs'), array('Hmdkds'), array('dkdk'));
    }
    public function providerClassExists()
    {
        return array(
            array('common_controller'),
            array('default_model'),
            array('router'),
            array('tools_module'),
        );
    }
    public function providerClassExistsException()
    {
        return array(
            array('common_controller'),
            array('defasult_model'),
            array('routser'),
            array('toolas_extension')
        );
    }

}