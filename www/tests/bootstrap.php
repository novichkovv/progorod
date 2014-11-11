<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 29.09.14
 * Time: 18:13
 */
define('PROJECT', 'engine');
define("DS", DIRECTORY_SEPARATOR);
define('ROOT_DIR', DS . 'var' . DS . 'www' . DS . 'engine.sru' . DS . 'www' . DS);
require_once(ROOT_DIR . 'application' . DS . 'core' . DS . 'config.php');
require_once('autoloader.php');