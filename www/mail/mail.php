<?php
$to='enov300@gmail.com,enov300@mail.ru,krav4.300@yandex.ru';
$subject='Восстановление пароля на Pro-gorod.com';
$mail='
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style="text-align: center;color: #245269;"><h1>DAY <?php echo $day + 4; ?></h1></div>
<div style="text-align: center;">
    <h2 style="color: #245269"><?php echo $subject ?></h2>
    <a href="<?php echo $video; ?>" target="_blank">
        <img src="' . SITE_DIR . 'detox/mail/video.png" style="width: 460px;" />
    </a>
    <br><br>
    <img src="' . SITE_DIR . 'detox/mail/purple-divider.jpg" style="width: 460px;">
    <br>
    <div style="width: 465px; margin: auto;">
        <div style="float: left">
            <br><br>
            <span style="font-weight: 400; color: #0782C1;">Each 21 Day Detox Package Includes:</span>
            <ul style="color: #175373; list-style:none; padding: 10px;">
                <li>
                    <img src="' . SITE_DIR . 'detox/mail/checkmark.png">Maxone
                </li>
                <li>
                    <img src="' . SITE_DIR . 'detox/mail/checkmark.png">Fiber Formula
                </li>
                <li>
                    <img src="' . SITE_DIR . 'detox/mail/checkmark.png">Plant Protein
                </li>
                <li>
                    <img src="' . SITE_DIR . 'detox/mail/checkmark.png">Green Supremefood
                </li>
            </ul>
        </div>
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html"><img src="' . SITE_DIR . 'detox/mail/detoxpack_2_1.jpg"  style="width: 200px; float: left"></a>
    </div>
</div>
</body>
</html>
';
//</div>
//
//<img src="http://lonty.ru/detox/mail/video.png" />
//Вы запросили восстановление пароля на сайте Pro-gorod.com.<br />
//Для восстановления пароля перейдите по следующей ссылке<br />
//<a href="http://pro-gorod.com/newpassword.php?city=&rand=">Ссылка для восстановления пароля</a><br />
//
//Используйте ее для входа в систему, для изменения пароля.<br />
//Если вы не осуществляли попыток восстановить пароль, проигнорируйте это письмо.

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= 'To: <'.$to.'>' . "\r\n";
$headers .= 'From: pro-gorod.com <no-reply@pro-gorod.com>' . "\r\n";
mail($to, $subject, $mail, $headers);
