<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:51
 */
$mail='
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style="text-align: center; width: 730px;">
    <div class="animate_left" style="width: 730px; text-align: center;"><h2 style="color: cadetblue; margin: auto; position: relative;">' . $subject . '</h2></div>
    <div style="width: 620px; margin: auto;">
        <div style="float: left">
            <br><br>
            <span style="font-weight: 400; color: #0782C1; font-size: 20px;">Each 21 Day Detox Package Includes:</span>
            <ul style="color: #175373; list-style:none; text-align:left; padding: 10px;  font-size: 22px;">
                <li>
                    <img src="' . SITE_DIR . 'mail/checkmark.png">Maxone
                </li>
                <li>
                    <img src="' . SITE_DIR . 'mail/checkmark.png">Fiber Formula
                </li>
                <li>
                    <img src="' . SITE_DIR . 'mail/checkmark.png">Plant Protein
                </li>
                <li>
                    <img src="' . SITE_DIR . 'mail/checkmark.png">Green Supremefood
                </li>
            </ul>
        </div>
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html"  target="_blank"><img src="' . SITE_DIR . 'mail/detoxpack_2_1.jpg"  style="width: 270px; float: left"></a>
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html"  target="_blank"><img src="' . SITE_DIR . 'images/button.png" style="margin-bottom: 30px;border-radius: 5px;box-shadow: 0 0 2px inset;" /></a>
    </div>
    <div style="clear: both;"><a href="http://www.drcolbert.com/21-day-detox-package-809.html"  target="_blank"><img src="' . SITE_DIR . 'images/detoxpromobanner.jpg" /></a></div>
    <div style="clear: both">
        <a href="' . SITE_DIR . 'reserve.php?day=' . $day . '&uid=' . $user['id'] . '&hash=' . md5($user['email']) .'">Click here if the email is not displayed corrected</a>
    </div>
</div>
</body>
</html>
';