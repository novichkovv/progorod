<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 28.09.14
 * Time: 22:52
 */
function getClassRoute($class_name)
{
    $arr = explode('_', $class_name);
    $narr = $arr;
    unset($narr[count($narr) - 1]);
    if(is_array($narr))$class = implode('_', $narr);
    $folder = (count($arr) == 1 ? 'core' :$arr[count($arr)-1] . 's' . ( $arr[count($arr)-1] == 'controller' ? DS . PROJECT : '')
    . ( $arr[count($arr)-1] == 'extension' && isset($class) ? DS . $class : ''));
    return $folder;
}
function checkClassRoute($folder)
{
    $directory = ROOT_DIR . 'application' . DS . $folder . DS;
    return $directory;
}
function getClassFile($class_name, $directory)
{
    $filename = $directory . $class_name . '.php';
    if(file_exists($filename))
        include_once($filename);
    return $filename;
}

function autoload($class_name)
{
    $folder = getClassRoute($class_name);
    $directory = checkClassRoute($folder);
    getClassFile($class_name, $directory);

}
spl_autoload_register('autoload');


