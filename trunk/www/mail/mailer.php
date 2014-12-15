<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:08
 */
require_once('config.php');
require_once('mailing_data.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = 'SELECT * FROM detox_users WHERE sdate > NOW() - INTERVAL 25 DAY';
$res = mysqli_query($con, $query);
$users = array();
while($row = $res->fetch_assoc())
{
    $users[date('Y-m-d', strtotime($row['sdate']))][] = $row;
}
foreach($users as $date => $v)
{
    foreach($v as $k => $user)
    {
        $day = date_diff(new DateTime(), new DateTime($user['sdate']))->days;
        if($day == 0)continue;
        if($user['sent'] >= $day)continue;
        $to = $user['email'];
        $subject = $subjects[$day];
        if(!$subject)continue;
        $video = $videos[$day];
        if($day == 1)
            require_once('message_templates' . DS . 'firstday_message.php');
        elseif($day == 2)
            require_once('message_templates' . DS . 'secondday_message.php');
        elseif($day == 3)
            require_once('message_templates' . DS . 'thirdday_message.php');
        else
            require_once('message_templates' . DS . 'detox_message.php');
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $headers .= 'To: ' . $_POST['firstname'] . ' <'.$to.'>' . "\r\n";
        $headers .= 'From: 21 Day Detox <no-reply@divinehealthdetox.com>' . "\r\n";
        mail($to, $subject, $mail, $headers);
        $query = 'UPDATE detox_users SET sent = "' . $day . '" WHERE id = "' . $user['id'] . '"';
        mysqli_query($con, $query);
    }
}