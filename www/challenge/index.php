<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:59
 */
require_once('model.php');
$model = new model('wp_users');
if(isset($_POST['signin']))
{
    $warning = false;
    $u = $model->getByField('user_login', $_POST['user_login']);
    if(!$_POST['user_login'])
        $warning = 'Username required!';
    elseif(!$_POST['user_email'])
        $warning = 'Email required!';
    elseif(!preg_match("/^.+@.+\..+$/",strtolower($_POST['user_email'])))
        $warning = 'Incorrect email!';
    elseif(trim($u['user_email']) && trim(strtolower(strtolower($_POST['user_email']))) != trim(strtolower(strtolower($u['user_email']))))
        $warning = 'Somebody already uses this username';
    elseif(!$_POST['phone'])
        $warning = 'Phone number required!';
    elseif(strlen($_POST['phone']) < 4)
        $warning = 'Phone number is incorrect!';
    if(!$warning)
    {
        $row = array();
        $row['user_login'] = $_POST['user_login'];
        $row['user_email'] = strtolower($_POST['user_email']);
        $row['phone'] = $_POST['phone'];
        $row['user_nicename'] = $_POST['user_login'];
        $row['user_registered'] = date('Y-m-d H:i:s');
        $letters = array();
        for($i = 'a'; $i < 'z'; $i++)
        {
            $letters[] = $i;
            $letters[] = strtoupper($i);
        }
        $password = '';
        for($i = 0; $i <= 6; $i++)
        {
            if(rand(1,2) == 1)
                $password .= $letters[rand(1,40)];
            else
                $password .= rand(1,9);

        }
        $row['user_pass'] = md5($password);
        if(strtolower($_POST['user_email']) == strtolower($u['user_email']) && $_POST['user_login'] == $u['user_login'])
        {
            $row = array();
            unset($password);
            $row['ID'] = $u['ID'];
        }
        $row['sdate'] = date('Y-m-d H:i:s');
        $id = $model->insert($row);
        $user = $model->getById($id);
        require_once('mail_generator.php');
        send($user['user_email'], 'Here are Your Next Steps', 'subscribe', $user, array('password' => $password));
        header('Location: success.php');
    }
}
require_once('templates/index.php');
