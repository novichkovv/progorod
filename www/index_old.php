<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 27.09.14
 * Time: 12:43
 */
error_reporting(E_ALL & ~E_NOTICE);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath($_SERVER['DOCUMENT_ROOT']) . DS );
if(file_exists(ROOT_DIR . 'application' . DS . 'core' . DS . 'config.php'))
    require_once(ROOT_DIR . 'application' . DS . 'core' . DS . 'config.php');
else
    require_once('var/www/pro-gorod/application' . DS . 'core' . DS . 'config.php');

/*
 * include autoloader
 */
//require_once(ROOT_DIR . 'application' . DS . 'core' . DS . 'autoloader.php' );
//session_start();
//$router = new router;

