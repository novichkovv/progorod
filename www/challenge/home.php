<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.12.14
 * Time: 21:58
 */
session_start();
require_once('model.php');
require_once('mailing_data.php');
$model = new model('wp_users');
$user = $model->getById($_GET['uid']);
if(!$user || !md5($user['user_email']) == $_GET['hash'])
{
    echo 'wrong mail';
    exit;
//    header('Location: http://1000lbschallenge.com/wp-login/');
//    exit;
}
if($_GET['day'] > $user['sent'])
{
    echo 'wrong day';
//    header('Location: http://1000lbschallenge.com/wp-login/');
//    exit;
}
$subject = $data[$_GET['day']]['subject'];

if(!$subject)
{
    echo 'no subject';
    exit;
//    header('Location: http://1000lbschallenge.com/404/');
//    exit;
}
$_SESSION['user'] = $user;
$video = $data[$_GET['day']]['video'];
require_once('templates/home.php');