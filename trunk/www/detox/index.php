<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:59
 */
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(isset($_POST['signin']))
{
    $warning = false;
    if(!$_POST['firstname'])
        $warning = 'First name required!';
    elseif(!$_POST['email'])
        $warning = 'Email required!';
    elseif(!preg_match("/^.+@.+\..+$/",$_POST['email']))
        $warning = 'Incorrect email!';
    if(!$warning)
    {
        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $date = date('Y-m-d H:i:s');
        $query = '
        INSERT INTO
            detox_users
        SET
            firstname = "' . $firstname . '",
            email = "' . $email . '",
            sdate = "' . $date . '"
        ';
        mysqli_query($con, $query);
        require_once('mailing_data.php');
        $subject = $subjects[0];
        $to = $_POST['email'];
        $video = $videos[0];
        require_once('message_templates' . DS . 'subscribe_message.php');
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $headers .= 'To: ' . $_POST['firstname'] . ' <'.$to.'>' . "\r\n";
        $headers .= 'From: 21 Day Detox <no-reply@divinehealthdetox.com>' . "\r\n";
        mail($to, $subject, $mail, $headers);
        header('Location: ' . SITE_DIR . 'success.html');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/style.css">
</head>
<body>
<video autoplay="" poster="images/flowers.jpg" id="bg_video">
    <source src="<?php echo SITE_DIR; ?>images/water.mp4" type="video/webm">
</video>
<h3 style="color: #666; margin-left: 20px;">Questions About the Detox?<br>
 Call <span style="color: black; font-size: 30px;">407-732-6952<span></h3>
<div class="text-center">
    <img src="<?php echo SITE_DIR; ?>images/logo.png" id="logo" />
</div>
<div id="bg">
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
        <div class="panel panel-info" id="main-panel">
            <div class="panel-heading text-center">
                <h3>DR. COLBERT'S 21 DAY DETOX</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form name="sign_in" action="" method="post">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="text-danger text-center"><h3><?php echo $warning; ?></h3></div>
                            <ul id="description">
                                <li>RESTORE your health to a youthful state</li>
                                <li>REBUILD your immune system</li>
                                <li>RENEW your mind by riding yourself of harmful toxins</li>
                            </ul>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="firstname" placeholder="Enter your first name" value="<?php echo $_POST['firstname']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email" placeholder="Enter your E-mail"  value="<?php echo $_POST['email']; ?>" />
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-lg btn-primary" name="signin" value="JOIN THE 21 DAY DETOX" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>