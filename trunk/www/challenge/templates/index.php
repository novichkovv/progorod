<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 13.12.14
 * Time: 1:59
 */
session_start();
$_SESSION['wsl::plugin']= 'WordPress Social Login 2.1.5';
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
        Can Do | Weigh tloss Challenge
    </title>
    <link rel="shortcut icon" href="<?php echo SITE_DIR; ?>images/favicon.png" />
</head>
<body <?php if(!$mobile) echo 'id="sign-body"'; ?>>
<div class="spacer hidden-xs"></div>
<div class="row">
    <div class="col-xs-offset-0 col-xs-12 col-sm-offset-3 col-sm-6">
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
                            <?php if(!$_POST['signin']): ?>
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
                            <?php endif; ?>
                            <div class="text-danger text-center" style="font-size: 20px; padding: 10px;" ><h3><?php echo $warning; ?></h3></div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="user_login" placeholder="Enter Your First Name" value="<?php echo $_POST['user_login']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="user_email" placeholder="Enter Your E-mail"  value="<?php echo $_POST['user_email']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="phone" placeholder="Enter Your Phone #"  value="<?php echo $_POST['phone']; ?>" />
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
<div class="spacer hidden-xs"></div>
<div class="container" style="padding: 37px 0 23px; background-color: #387b99; width: 100%; text-align: center;">
    <h1 style="color: #fff; font-size: 35px;">"I Can Do all things through Christ who Stregthens me" - <i>Phillipians 4:13</i></h1>
</div>
<div class="container" style="padding: 30px 0; background-color: #fff; width: 100%;">
    <div class="row hidden-xs text-center">
        <img src="<?php echo SITE_DIR; ?>images/6.png" />
        <img src="<?php echo SITE_DIR; ?>images/4.png" />
        <img src="<?php echo SITE_DIR; ?>images/5.png" />
    </div>
    <div class="row hidden-xs text-center">
        <img src="<?php echo SITE_DIR; ?>images/2.png" />
        <img src="<?php echo SITE_DIR; ?>images/3.png" />
        <img src="<?php echo SITE_DIR; ?>images/1.png" />
    </div>
</div>

<div class="row visible-xs" style="background-color: #fff;">
    <div class="text-center">
        <img src="<?php echo SITE_DIR; ?>images/4.png" />
        <img src="<?php echo SITE_DIR; ?>images/5.png" />
        <img src="<?php echo SITE_DIR; ?>images/6.png" />
        <img src="<?php echo SITE_DIR; ?>images/1.png" />
        <br>
        <img src="<?php echo SITE_DIR; ?>images/2.png" />
        <br>
        <img src="<?php echo SITE_DIR; ?>images/3.png" />
    </div>
</div>
<script type="text/javascript">
    adroll_adv_id = "5GRB7NSSVNHJLG7BF2SVFN";
    adroll_pix_id = "CRWVTWIJ5BCW7C3HCM4C2K";
    (function () {
        var oldonload = window.onload;
        window.onload = function(){
            __adroll_loaded=true;
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            if(oldonload){oldonload()}};
    }());
</script>
</body>
</html>