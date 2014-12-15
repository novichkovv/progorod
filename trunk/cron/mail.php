<?php
$to='enov300@gmail.com';
$subject='Восстановление пароля на Pro-gorod.com';
$mail='
'.$login.'<br />
<a href="www.lonty.ru" target="__blank" />
<img src="http://lonty.ru/detox/mail/video.png" />
</a>
Вы запросили восстановление пароля на сайте Pro-gorod.com.<br />
Для восстановления пароля перейдите по следующей ссылке<br />
<a href="http://pro-gorod.com/newpassword.php?city=&rand=">Ссылка для восстановления пароля</a><br />

Используйте ее для входа в систему, для изменения пароля.<br />
Если вы не осуществляли попыток восстановить пароль, проигнорируйте это письмо.
';
$mail = '
!doctype HTML>
<html>
<head></head>
<body>
<div style=\"margin-left: 10%; width: 460px;\">
    <div style=\"text-align: center;color: #245269;\"><h1>DAY 1</h1></div>
<div style=\"text-align: center;\">
    <h2 style=\"color: #245269\">Removing Negative Emotions While You Eat</h2>
    <a href=\"https://www.youtube.com/watch?v=Oa4wm2ftna4&list=UUxObFUbx4nYwWVCelOUQtKA\" target=\"_blank\">
    <img src=\"http://lonty.ru/detox/mail/video.png" style="width: 460px;"></a>
    <br><br>
    <img src=\"pic_1\" style=\"width: 460px;\">
<br>
    <div style=\"width: 460px;\">
        <div style=\"float: left\">
            <br><br>
            <span style=\"font-weight: 400; color: #0782C1;\">Each 21 Day Detox Package Includes:</span>
            <ul style=\"color: #175373; list-style: none; text-align: left; padding: 8px;\">
                <li><img src=\"pic_3\">Maxone</li>
                <li><img src=\"pic_3\">Fiber Formula</li>
                <li><img src=\"pic_3\">Plant Protein</li>
                <li><img src=\"\">Green Supremefood</li>
            </ul>
        </div>
        <a href=\"http://www.drcolbert.com/21-day-detox-package-809.html\"><img src=\"pic_4\"  style=\"width: 200px; float: left\"></a>
    </div>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= 'To: <'.$to.'>' . "\r\n";
$headers .= 'From: pro-gorod.com <no-reply@pro-gorod.com>' . "\r\n";
mail($to, $subject, $mail, $headers);