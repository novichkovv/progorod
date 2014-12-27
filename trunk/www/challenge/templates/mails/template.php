<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.12.14
 * Time: 0:26
 */
$mail = '
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div style="min-height: ' . $min_height . 'px;">
';
include($template . '.php');
$mail .= '
        <div style="clear: both; text-align: center;">
            <a href="' . SITE_DIR . 'home.php?day=' . $day . '&uid=' . $user['ID'] . '&hash=' . md5($to) .'">Click here if the email is not displayed corrected</a>
            <br><br>If you don\'t want to receive these emails anymore, please click <a href="http://1000lbschallenge.com/challenge/signout.php?mail='.$to.'">here</a>
        </div>
    </div>
</body>
</html>
';