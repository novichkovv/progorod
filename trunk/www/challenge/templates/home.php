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
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/script.js"></script>
</head>
<body id="sign-body">
<img src="images/cando3.png" />
<div class="hidden-xs" style="position: relative; float: right; top: 30px; color: #fff; font-size: 25px; margin-right: 10px;">Questions? (407)732-6952</div>
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
            <a href="../diet-plan/">Menus</a>
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
        <h3 class="hidden-xs" style="margin: 15px; font-size: 30px;">
            <?php if(($day - 5) > 0)echo 'DAY '.($day - 5). ' - '; ?>
            <?php echo $subject; ?>
        </h3>
        <h3 class="visible-xs text-center" style="margin: 15px; font-size: 30px;">
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
                    <iframe id="video_frame" src="<?php echo strtr($video, array('watch?v='=>'embed/', 'https:'=>'', '&list' => '?list')); ?>" frameborder="0" width="560" height="315" allowfullscreen="allowfullscreen">        </iframe>
                    <img src="<?php echo SITE_DIR; ?>images/video2.jpg" />
                </div>
                <a target="_blank" href="http://www.drcolbert.com/can-do-weightloss-package-764.html"><img src="<?php echo SITE_DIR; ?>images/5percent.jpg" style="width: 100%;" /></a>
            </div>
        </div>
        <div class="col-sm-4 col-md-6">
            <div class="package">
                <div class="row" style="background-color: #fff; margin: 0;">
                    <table style="width: 100%; height: 100%;" class="visible-md visible-lg">
                        <tr>
                            <td style="width: 56%;">
                                <a target="_blank" href="http://www.drcolbert.com/can-do-weightloss-alternate-package.html"><img src="<?php echo SITE_DIR; ?>images/cando_delux_1.jpg" style="width: 100%;" /></a>
                            </td>
                            <td style="vertical-align: middle; padding: 10px;">
                                <h3>The Deluxe "Can Do" Weightloss System Includes:</h3>
                                <ul id="description" style="position: relative; bottom: 0; text-align: left;">
                                    <li>Plant Protein</li>
                                    <li>Green Supremefood
                                    </li>
                                    <li>Rapid Waist Reduction Drops</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <div class="visible-sm visible-xs">
                        <div class="col-md-7">
                            <a target="_blank" href="http://www.drcolbert.com/can-do-weightloss-alternate-package.html"><img src="<?php echo SITE_DIR; ?>images/cando_delux_1.jpg" style="width: 100%;" /></a>
                        </div>
                        <div class="col-md-5" style="padding: 10px 0;">
                            <h3>The Deluxe "Can Do" Weightloss System Includes:</h3>
                            <ul id="description" style="position: relative; bottom: 0px; text-align: left; font-size: 14px; width: 90%; margin-left: 30px; ">
                                <li>Plant Protein</li>
                                <li>Green Supremefood
                                </li>
                                <li>Rapid Waist Reduction Drops</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div style="width: 100%;  background-color: #eee;">
                    <a target="_blank" href="http://www.drcolbert.com/can-do-weightloss-alternate-package.html"><img src="<?php echo SITE_DIR; ?>images/button.png" style="width: 80%; margin: 3.6% auto; border-radius: 4px; box-shadow: 0 0 2px;"/></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div  style="background-color: #fff; width: 100%; padding: 50px 0 20px; text-align: center;">
    <span style="font-size: 40px;">FAQ</span>
</div>
<div  style="background-color: #fff; width: 100%; padding: 50px 0">
    <div class=" container">
        <div class="col-xs-12 col-md-6  animate first fadeInUp" data-animation="fadeInUp">
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span href="#">What is the "Can Do" Weightloss Challenge?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block">This challenge is a 42 Day weight loss program that starts off week 1 at 500 Calories/Day, Week 2 – 4 1000 Calories/Day, and Week 5 – 6 focuses on food selections instead of calories.		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>How do I know if I need to join the "Can Do" Weightloss <br>Challenge?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>If your waist measurement is greater than half your height in inches (ie. a healthy weight for a 60″ tall female, should be 35″ or below) then you need to join the “Can Do” Weightloss Challenge.</p>		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>Do I have to buy the "Can Do" Weightloss System to lose weight?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>No, the “Can Do” Weightloss System is designed to aid you in suppressing your appetite and proving your body with healthy calories. Although you can achieve the same results with will power and healthy eating.</p>		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>When should I take the "Can Do" Morning Appetite Suppressant?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>Take 2 Capsules first thing in the morning and 2 Capsules 30 minutes before lunch. Do not take the morning appetite suppressant if you are on an antidepressant or have been diagnosed with schizophrenia or bipolar disorder.</p>		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>When should I take the "Can Do" Evening Appetite Suppressant?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>Take 2 Capsules 30 minutes before dinner.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6   animate fadeInUp" data-animation="fadeInUp">
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>When should I take Yellow Pea Plant Protein?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>Mix 1 Scoop of Yellow Pea Plant Protein in water or Unsweetened Almond Milk first thing in the morning, or evening 30 minutes before dinner.</p>		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>When should I take Green Supremefood?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>Mix 1 Scoop of Green Supremefood in water or Unsweetened Almond Milk first thing in the morning for energy.</p>		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>When should I take the Rapid Waist Reduction Drops?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>Take 10 Drops under your tongue 30 minutes before breakfast, lunch, and dinner. If you are experiencing ravenous sugar cravings, take 10 drops immediately.</p>		</div>	</div></div>
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>What is the difference between the Morning and Evening Appetite Suppressants and the Rapid Waist Reduction Drops?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>The Morning and Evening Appetite Suppressants work by boosting feel good chemicals such as Serotonin and Norepinephrine. People experience sugar cravings when these neurotransmitters are low. The Rapid Waist Reduction Drops turn off the appetite center in the brain called the hypothalamus.</p>		</div>	</div></div>
<!--            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>After the challenge begins, can I still sign up?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block"><p>After June 9, signup will be $49.</p>		</div>	</div></div>-->
            <div class="dt-sc-toggle-frame">	<h5 class="dt-sc-toggle"><span>What foods can I eat during the challenge?</span></h5>	<div class="dt-sc-toggle-content" style="display: none;">		<div class="block">You can view the menu <a href="http://1000lbschallenge.com/diet-plan/">here</a>		</div>	</div></div>
        </div>
        <p><!--
<p style="margin-top:10px; text-align:center;"><a href="http://www.divinehealthdetox.com"><img src="http://1000lbschallenge.com/wp-content/uploads/2013/12/detox_banner.jpg"/></a></p>
<p> <!-- --></p>

    </div>

</div>
<footer>
    <div class="row">
        <div class="privacy">
        </div>
        <div class="copyr">
            <span>©<?php echo date('Y'); ?> <a href="http://www.drcolbert.com" target="_blank">Dr. Don Colbert, Divine Health, Inc.</a>
<!--               | <a href="http://devinehealthdetox/privacy.php">Privacy Policy</a>-->
            </span>
        </div>
    </div>
    <div class="row">
        <div class="footer-links"><h1><a href="http://www.drcolbert.com" target="_blank">Divine Health, Dr. Don Colbert, MD</a> | <a href="http://www.divinehelathwellness.com" target="_blank">Divine Health Wellness</a> | <a href="http://www.candoweightloss.com" target="_blank">"Can Do" Weightloss Challenge</a> | <a href="http://www.detox21dagen.nl/" target="_blank">21 Day Detox - Netherlands</a></h1></div>
    </div>
</footer>
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