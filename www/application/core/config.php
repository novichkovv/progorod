<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 27.09.14
 * Time: 12:46
 */

define('APP_DIR', ROOT_DIR . 'application' . DS);
define('CORE_DIR', APP_DIR . 'core' . DS);
define('EXT_DIR', APP_DIR . 'extensions' . DS);
define('MODULE_DIR', APP_DIR . 'modules' . DS);
define('SITE_DIR', ( !preg_match("/^http:\/\//",$_SERVER['HTTP_HOST']) ? 'http://' : '' ) . $_SERVER['HTTP_HOST'] . '/');
$arr = explode('.',$_SERVER['HTTP_HOST']);
if($arr[0] != 'www') {
    if($arr[0] == 'pro-gorod') {
        header("Content-type: text/html; charset=utf-8");
        require_once(APP_DIR . 'templates' . DS . 'under_construction.php');
        exit;
    } elseif($arr[0] == 'dev') {
        $project = 'pro-gorod';
    } else {
        $project = $arr[0];
    }
}
define('PROJECT',  $project);
define('DOMAIN', $arr[count($arr) - 2] . '.' . $arr[count($arr) - 1]);
define('TEMPLATE_DIR', APP_DIR . 'templates' . DS . PROJECT . DS);
define('DBTYPE', 'mysql');
define('HOST', 'localhost');
define('CHARSET', 'utf-8');
define('DEFAULT_DB', 'common');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define ('SMARTY_DIR', ROOT_DIR . 'libs' . DS . 'Smarty' . DS . 'libs' . DS);
define('MEMCACHED', false);

