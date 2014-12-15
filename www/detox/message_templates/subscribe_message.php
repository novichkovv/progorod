<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:52
 */
$mail='
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style="text-align: center;color: #245269;">
<img src="' . SITE_DIR . 'images/header.png" style="width: 600px;margin-top: -30px;" />
<h1>21 Day Detox</h1></div>
<div style="text-align: center;">
    <h2 style="color: #245269">' . $subject . '</h2>
    <a href="' . $video . '" target="_blank">
        <img src="' . SITE_DIR . 'mail/video.png" style="width: 460px;" />
    </a>
    <br><br>
     <div style="clear: both">
        <a href="' . SITE_DIR . 'reserve.php?day=' . $day . '&uid=' . $user['id'] . '&hash=' . md5($user['email']) .'">Click here if the email is not displayed corrected</a>
    </div>
    ';
$mail .= '
</div>
</body>
</html>
';