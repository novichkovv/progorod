<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 06.11.14
 * Time: 0:09
 */
class auth_module
{
    public function auth()
    {
        if(isset($_POST['auth_btn']))
        {
            if(isset($_POST['login']) && isset($_POST['password']) && $_POST['login'] != '' && $_POST['password'] != '')
            {
                $auth_model = new auth_model();
                if($user = $auth_model->auth($_POST['login'], md5($_POST['password'])))
                {
                    if(!isset($_POST['remember']))
                    {
                        $_SESSION['auth'] = true;
                        $_SESSION['login'] = $_POST['login'];
                        $_SESSION['password'] = md5($_POST['password']);
                    }
                    else
                    {
                        setcookie ("user[auth]", 1, time() + 3600*24*365);
                        setcookie ("user[login]", $_POST['login'], time() + 3600*24*365);
                        setcookie("user[password]", md5($_POST['password']), time() + 3600*24*365);
                    }
                    header('Location: ' . (SITE_DIR == 'http://' . DOMAIN . '/' ?  'http://user. ' . DOMAIN : SITE_DIR));

                }
            }
        }
    }

    public function check_auth()
    {

        $auth_model = new auth_model();
        if(isset($_SESSION['auth']) && $_SESSION['auth'])
        {
            $user = $auth_model->auth($_SESSION['login'], $_SESSION['password']);
            return $user;
        }
        elseif(isset($_COOKIE['user']) && $_COOKIE['user']['auth'] == '1')
        {
            $user = $auth_model->auth($_COOKIE['user']['login'], $_COOKIE['user']['password']);
            return $user;
        }
        else
            return false;
    }

    public function logout()
    {
        if(isset($_POST['logout']))
        {
            unset($_SESSION['auth']);
            unset($_SESSION['login']);
            unset($_SESSION['password']);
            setcookie ("user[auth]", 0, time() - 3600);
            setcookie ("user[login]", $_POST['login'], time() - 3600);
            setcookie("user[password]", md5($_POST['password']), time() - 3600);
            session_destroy();
            header('Location: ?');
        }
    }
}