<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:59
 */
require_once('model.php');
$model = new model('login_users');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/style.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        Can Do | Weightloss Challenge
    </title>
    <link rel="shortcut icon" href="<?php echo SITE_DIR; ?>images/favicon.png" />
</head>
<body id="sign-body">
<!--<h3 style="color: #666; margin-left: 20px;">Questions About the Detox?<br>-->
<!-- Call <span style="color: black; font-size: 30px;">407-732-6952<span></h3>-->

<div class="row" style="margin-top: 5%;">
        <div class="panel panel-info" id="main-panel">
            <div id="header">
                <img src="<?php echo SITE_DIR; ?>images/cando3.png" id="logo" />
                <span id="questions">Questions? (407)732-6952</span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form name="sign_in" action="" method="post">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="text-danger text-center"><h3><?php echo $warning; ?></h3></div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="firstname" placeholder="Enter username" value="<?php echo $_POST['firstname']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email" placeholder="Enter your E-mail"  value="<?php echo $_POST['email']; ?>" />
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-lg btn-primary" name="signin" value="I CAN DO!" />
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