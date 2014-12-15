<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 11.12.14
 * Time: 19:51
 */
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
session_start();
if(isset($_POST['login']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['login']);
    $password = md5(mysqli_real_escape_string($con, $_POST['password']));
    $query = '
    SELECT
        COUNT(id) count
    FROM
        detox_users
    WHERE
        firstname = "' . $firstname . '"
    AND
        password = "' . $password . '"
        ';
    $res = mysqli_query($con, $query);
    $row = $res->fetch_assoc();
    if($row['count'] >  0)
    {
        $_SESSION['login'] = 'admin';
    }
    header('Location: ' . SITE_DIR . 'admin.php');
    exit;
}