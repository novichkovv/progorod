<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 02.10.14
 * Time: 19:41
 */
function getTestClassRoute($class_name)
{
    $arr = explode('_', $class_name);
    $folder = (count($arr) == 1 ? 'core' :$arr[count($arr)-1] . 's' . ( $arr[count($arr)-1] == 'controller' ? DS . PROJECT : ''));
    return $folder;
}
function checkTestClassRoute($folder)
{
    $directory = ROOT_DIR . 'application' . DS . $folder . DS;
    return $directory;
}
function getTestClassFile($class_name, $directory)
{
    $filename = $directory . DS . $class_name . '.php';
    @include_once($filename);
    return $filename;
}

function Testautoload($class_name)
{
    $folder = getTestClassRoute($class_name);
    $directory = checkTestClassRoute($folder);
    getTestClassFile($class_name, $directory);
}
spl_autoload_register('Testautoload');

