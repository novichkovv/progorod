<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 17.12.14
 * Time: 19:20
 */
require_once('config.php');

require_once('mailing_data.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = 'SELECT * FROM detox_users WHERE id = "' . mysqli_real_escape_string($con, $_GET['uid']) . '"';
$res = mysqli_query($con, $query);
$row = $res->fetch_assoc();
if(md5($row['email']) == $_GET['hash'])
{
    if($_GET['day'] > $row['sent'])
    {
        echo 'access_denied';
        exit;
    }
    $day = $_GET['day'];
    $subject = $subjects[$day];
    if(!$subject)
    {
        echo 'no emails for this day';
        exit;
    }
    $video = $videos[$day];
    require_once('detox.php');
}
else
{
    require_once('login.php');
    exit;
}
