<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.12.14
 * Time: 0:46
 */
$mail .= '
<div style="text-align: center;color: #245269;">
    <a href="http://www.drcolbert.com/can-do-weightloss-package-764.html" target="_blank"><img alt="discount coupon" src="' . SITE_DIR . 'images/5percent.jpg" style="width: 600px;margin-top: 30px;" /></a>
    <h1>"Can Do" Challenge</h1>
</div>
<div style="text-align: center;">
    <h2 style="color: #245269">Here are Your Next Steps</h2>
    <a href="' . SITE_DIR . 'home.php?day=0&uid=' . $user['ID'] . '&hash=' . md5(strtolower($user['user_email'])) .'" target="_blank">
        <img alt="Your video" src="' . SITE_DIR . 'images/video2.jpg" style="width: 460px;" />
    </a>
    <br><br>
    <a href="http://1000lbschallenge.com/contract/" style="color: #eb6841; font-size: 20px;" >Sign the Can Do Contract</a>
</div>
';
$mail .= '
<div style="text-align: center;">
<br><br>
You received this letter because you had registered in "Can Do" Challenge mailing on
<a href="http://1000lbschallenge.com/">http://1000lbschallenge.com/</a><br><br>';
if($content['password'])
{
    $mail .= 'Your user data: <br>'."\n";
    $mail .= '<b>username:</b> '.$user['user_login'].'<br>'."\n";
    $mail .= '<b>password:</b> '.$content['password'].'<br><br>'."\n";
}
$mail .='</div>'."\n";