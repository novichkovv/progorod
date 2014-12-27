<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 10.12.14
 * Time: 20:36
 */

define ('DS', DIRECTORY_SEPARATOR);
define ('SITE_DIR', 'http://' . ( $_SERVER['HTTP_HOST'] ? $_SERVER['HTTP_HOST'] : 'lonty.ru') . '/challenge/');
define('DB_USER', 'root');
define('DB_PASSWORD', '18A5pq86');
define('DB_HOST', 'localhost');
define('DB_NAME', 'detox');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');