<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 19.12.14
 * Time: 18:10
 */
require_once(realpath($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'detox' . DIRECTORY_SEPARATOR . 'model.php');
$model = new model('login');
$user = $model->getById($_GET['uid']);
$_POST['email'] = $user['email'];
//$_POST['']
