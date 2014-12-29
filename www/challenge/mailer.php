<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:08
 */
set_time_limit(0);
require_once('model.php');
require_once('mailing_data.php');
require_once('mail_generator.php');

$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = 'SELECT * FROM wp_users WHERE sdate > NOW() - INTERVAL 50 DAY';
$res = mysqli_query($con, $query);
$users = array();
while($row = $res->fetch_assoc())
{
    $users[] = $row;
}
$i = 0;
foreach($users as $k => $user)
{
    if($i == 30)break;
    $date = date('Y-m-d 05:00:00', strtotime($user['sdate']));

    $day = date_diff(new DateTime(), new DateTime($date))->days;
    if($day == 0)continue;
    if($day > 60)continue;
    if($user['sent'] >= $day)continue;
    $to = $user['user_email'];
    $subject = $data[$day]['subject'];
    if(!$subject)continue;
    $video = $videos[$day];
    send($to, $subject, 'main', $user, array('subject' => $subject, 'video' => $video), $day);
    $i++;
}
echo $i;

