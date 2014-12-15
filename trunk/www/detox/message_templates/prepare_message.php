<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:51
 */
$mail = '
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style="text-align: center;">
    <h2 style="color: #245269">' . $subject . '</h2>
';
if($video)
    $mail .= '
<a href="' . $video . '" target="_blank">
        <img src="' . SITE_DIR . 'mail/video.png" style="width: 460px;" />
    </a>';
else
    $mail .= '
    <a href="http://www.drcolbert.com/21-day-detox-package-809.html" target="_blank">
        <img src="' . SITE_DIR . 'mail/2.png" style="height: 521px;" />
        <img src="' . SITE_DIR . 'mail/1.png" style="height: 500px;" />
    </a>
';
$mail .= '
</div>
</body>
</html>
';