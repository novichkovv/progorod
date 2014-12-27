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
    $mail .= '<h1 style="color: #3d6884;"></h1>'."\n";
}
$mail .= '
    <h2 style="color: cadetblue; margin: 0 auto 20px; position: relative;">
    ' . ( $day > 5 ? 'Day ' . ($day - 4) . ' - ': '') . $subject . '
    </h2>
    </div>
    <a href="' . SITE_DIR . 'home.php?day=' . $day . '&uid=' . $user['ID'] . '&hash=' . md5($to) .'" target="_blank">
        <img alt="Link to your video" src="' . SITE_DIR . 'images/video2.jpg" style="width: 460px;" />
    </a>
    <br><br>
    <img alt="horizontal line" src="' . SITE_DIR . 'images/purple-divider.jpg" style="width: 460px;">';
$mail .= '
    <br>
    <div style="width: 465px; margin: auto;">
        <div style="float: left">
            <br><br>'."\n";
$mail .= '
        <a href="http://www.drcolbert.com/can-do-weightloss-alternate-package.html" target="_blank"><img style="width: 460px;" src="' . SITE_DIR . 'images/5percent.jpg" alt="Your package" /></a>
        '."\n";
$mail .= '
         <a href="http://www.drcolbert.com/can-do-weightloss-alternate-package.html" target="_blank"><img src="' . SITE_DIR . 'images/button.png" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0 0 2px inset; width: 350px;" /></a>
    </div>
</div>';