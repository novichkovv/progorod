<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.12.14
 * Time: 0:20
 */

function send($to, $subject, $template, $user, array $content = array(), $day = 0, $min_height = 900)
{
    include('templates/mails/template.php');
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers .= 'To: ' . $user['user_login'] . ' <'.$to.'>' . "\r\n";
    $headers .= 'From: "Can Do" Challenge <info@divinehealthdetox.com>' . "\r\n";
    echo $headers;
    echo $mail;
    //mail($to, $subject, $mail, $headers);
//    if($user['ID'])
//    {
//        $model = new model('wp_users');
//        $model->insert(array('ID' => $user['ID'], 'sent' => $day));
//    }
}

