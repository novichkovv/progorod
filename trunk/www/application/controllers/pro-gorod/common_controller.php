<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 30.09.14
 * Time: 18:30
 */
class common_controller extends controller
{
    public function init()
    {
        $this->t->assign('common_controller','common_controller');
    }
    public function after_auth()
    {
    }
    public function ajax()
    {
        switch($_REQUEST['action'])
        {
            case 'registration':

                if(!$_POST['mail'] || $_POST['mail'] == '' || !$_POST['password'] || $_POST['password'] == ''
                    || !$_POST['password2'] || $_POST['password2'] == '' || !$_POST['captcha'] || $_POST['captcha'] == ''
                    || $_POST['password2'] != $_POST['password'])
                {
                    echo 1;
                    exit;
                }
                $users_model = new default_model('users');
                $user = $users_model->getByField('mail', $_POST['mail']);
                if($user)
                {
                    echo 2;
                    exit;
                }
                if($_SESSION['captcha'] != $_POST['captcha'])
                {
                    echo 3;
                    exit;
                }
                $row = array();
                $row['mail'] = $_POST['mail'];
                $row['password'] = md5($_POST['password']);
                $row['cdate'] = date('Y-m-d H:i:s');
                $users_model->insert($row);
                $_POST['auth_btn'] = true;
                $_POST['login'] = $_POST['mail'];
                $auth = new auth_module();
                $auth->auth();
                exit;
            break;

            case 'login':
                $users_model = new default_model('users');
                $user = $users_model->getByField('mail', $_POST['login']);
                if(isset($user) && md5($_POST['password']) == $user['password'])
                    echo 2;
                else echo 1;
                exit;
            break;
        }
    }

}