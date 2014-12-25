<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 24.12.14
 * Time: 21:55
 */
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
<img src="images/cando3.png" />
<div class="header">
    <div class="route hidden-xs">
        <div style="margin: auto;">
            <div class="routeEl">
                <a href="../affirmations/">Affirmations</a>
            </div>
            <div class="routeEl">
                <a href="../diet/">Menus</a>
            </div>
            <div class="routeEl">
                <a href="../ebook/">E-booklet</a>
            </div>
            <div class="routeEl">
                <a  href="../questionnaire">Metabolism Questionnaire</a>
            </div>
            <div class="routeEl">
                <a c href="../contract/">Contract</a>
            </div>
        </div>
    </div>
    <div class="visible-xs text-center">
        <div class="route-xs">
            <a href="../affirmations/">Affirmations</a>
        </div>
        <div class="route-xs">
            <a href="../diet/">Menus</a>
        </div>
        <div class="route-xs">
            <a href="../ebook/">E-booklet</a>
        </div>
        <div class="route-xs">
            <a  href="../questionnaire">Metabolism Questionnaire</a>
        </div>
        <div class="route-xs">
            <a c href="../contract/">Contract</a>
        </div>
    </div>
    <div class="container">
        <h3 style="margin: 15px; font-size: 30px;">
            <?php if(($day - 5) > 0)echo 'DAY '.($day - 5). ' - '; ?>
            <?php echo $subject; ?>
        </h3>
    </div>
</div>
<div class="container">
    <br><br?
    <div class="row">
        <div class="col-sm-8 col-md-6">
            <div class="video">
                <div class="video-container">
                    <iframe id="video_frame" src="<?php echo strtr($video,array('watch?v='=>'embed/', 'https:'=>'', '&list' => '?list')); ?>" frameborder="0" width="560" height="315" allowfullscreen="allowfullscreen">        </iframe>
                    <img src="<?php echo SITE_DIR; ?>images/video2.jpg" />
                </div>
                <img src="<?php echo SITE_DIR; ?>images/CandoPageBanner.png" style="width: 100%;" />

            </div>
        </div>
        <div class="col-sm-4">
            <img src="<?php echo SITE_DIR; ?>images/cando_delux_1.jpg" style="width: 100%;" />
        </div>
    </div>

</div>
</body>
</html>