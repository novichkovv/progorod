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
<div class="spacer hidden-xs"></div>
<div class="row">
    <div class="col-sm-3 hidden-xs text-center">
        <img src="images/1.png">
        <img src="images/2.png">
        <img src="images/6.png">

    </div>
    <div class="col-xs-offset-0 col-xs-12 col-sm-offset-0 col-sm-6">
        <div class="panel panel-info" id="main-panel">
            <div id="header">
                <div class="col-sm-4">
                    <img src="<?php echo SITE_DIR; ?>images/cando3.png" id="logo" />
                </div>
                <div class="col-sm-6" id="questions_div">
                    <span id="questions">Questions? (407)732-6952</span>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">

                    </div>
                    <form name="sign_in" action="" method="post">

                        <div class="col-sm-8 col-sm-offset-2" >
                            <ul id="description">
                                <li>
                                    The Fastest Way to Burn Fat in 42 Days
                                </li>
                                <li>
                                    Lose Inches around your waist, stomach and thighs
                                </li>
                                <li>
                                    Free Video's of Dr. Colbert Walking You through the Program
                                </li>
                            </ul>
                            <div class="text-danger text-center"><h3><?php echo $warning; ?></h3></div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="username" placeholder="Enter username" value="<?php echo $_POST['firstname']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email" placeholder="Enter your E-mail"  value="<?php echo $_POST['email']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="phone" placeholder="Enter your Phone Number"  value="<?php echo $_POST['email']; ?>" />
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
    <div class="col-sm-3 hidden-xs text-center">
        <img src="images/3.png">
        <img src="images/4.png">
        <img src="images/5.png">
    </div>
</div>
<!--<div class="spacer hidden-xs"></div>-->
<!--<div class="container" style="padding: 37px 0 23px; background-color: #387b99; width: 100%; text-align: center;">-->
<!--    <h1 style="color: #fff; font-size: 35px;">I DON'T KNOW WHAT TO WRITE HERE</h1>-->
<!--</div>-->
<!--<div class="container" style="padding: 30px 0; background-color: #fff; width: 100%;">-->
<!--    <div class="row hidden-xs text-center">-->
<!--        <img src="images/6.png" />-->
<!--        <img src="images/4.png" />-->
<!--        <img src="images/5.png" />-->
<!--    </div>-->
<!--    <div class="row hidden-xs text-center">-->
<!--        <img src="images/2.png" />-->
<!--        <img src="images/3.png" />-->
<!--        <img src="images/1.png" />-->
<!--    </div>-->
<!--</div>-->

<div class="row visible-xs">
    <div class="text-center">
        <img src="images/4.png" />
        <img src="images/5.png" />
        <img src="images/6.png" />
        <img src="images/1.png" />
        <br>
        <img src="images/2.png" />
        <br>
        <img src="images/3.png" />
    </div>
</div>
</body>
</html>