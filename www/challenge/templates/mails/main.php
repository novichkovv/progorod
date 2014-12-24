<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.12.14
 * Time: 21:25
 */
$mail = '
<div style="text-align: center; width: 600px;">
    <div style="width: 600px; text-align: center;">'."\n";
if($day > 5)
{
    $mail .= '<h1 style="color: #3d6884;">DAY ' . $day - 4 . '</h1>'."\n";
}
$mail .= '
    <h2 style="color: cadetblue; margin: 0 auto 20px; position: relative;">
    ' . preg_replace("/Day\s[0-9]{1,2}\s-/", '', $subject) . '
    </h2>
    </div>
    <a href="' . SITE_DIR . 'home.php?day=' . $day . '&uid=' . $user['ID'] . '&hash=' . md5($to) .'" target="_blank">
        <img src="' . SITE_DIR . 'images/video.png" style="width: 460px;" />
    </a>
    <br><br>
    <img src="' . SITE_DIR . 'mail/purple-divider.jpg" style="width: 460px;">';
$mail .= '
    <br>
    <div style="width: 465px; margin: auto;">
        <div style="float: left">
            <br><br>'."\n";
$mail .= '
        <img style="width: 460px;" src="' . SITE_DIR . 'images/package.png" alt="Your package" />
        '."\n";
$mail .= '
        <a href="http://www.drcolbert.com/21-day-detox-package-819.html" target="_blank"><img src="' . SITE_DIR . 'mail/detoxpack_2_1.jpg"  style="width: 200px; float: left"></a>
         <a href="http://www.drcolbert.com/21-day-detox-package-819.html" target="_blank"><img src="' . SITE_DIR . 'images/button.png" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0 0 2px inset; width: 350px;" /></a>
    </div>
    <div style="clear: both">
        <a href="' . SITE_DIR . 'home.php?day=' . $day . '&uid=' . $user['user_id'] . '&hash=' . md5($to) .'">Click here if the email is not displayed corrected</a>
        <br><br>If you don\'t want to receive these emails anymore, please click <a href="http://divinehealthdetox.com/detox/signout.php?mail='.$to.'">here</a>
    </div>
</div>';