<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        21 Days Detox Challenge
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>css/animate.css">
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/wow.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/script.js">
    </script>
    <link rel="shortcut icon" href="<?php echo SITE_DIR; ?>images/favicon.ico" />
</head>

<body class="bs-docs-home">
<a class="sr-only" href="#content">Skip to main content</a>

<header class="navbar navbar-fixed-top docs-nav" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <img src="images/logo.png" />
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12 text-right">
                    <h3 style="color: #666; margin: 10px;">Questions About the Detox?<br>
                    Call <span style="color: black; font-size: 30px;">407-732-6952<span></h3>
                </div>
            </div>
        </nav>
    </div>
</header>
<div  id="slider" class="row">
    <div class="container">
        <div class="col-md-2 col-sm-3 col-xs-5">
            <section class="slide1 wow bounceInLeft">
                <img src="images/salad_icon.png" />
            </section>
            <img class="slide2" src="images/smoothie_icon.png" />
            <img class="slide3" src="images/soup_icon.png" />
        </div>
        <div class="col-sm-4 col-md-3 col-xs-7">
            <br>
            <br>
            <div class="features">
                <h3 class="wow fadeInDown"  data-wow-delay="0.7s">RECEPIES</h3>
                <div class="title-div"></div>
                <span>Aid your Detox</span>
                <br><br>
                <div style="position: absolute; width: 90%; min-width: 250px;">
                    <h3 class="wow fadeInUp slide1"  data-wow-delay="1.4s" style="width: 100%;">
                        Salads
                    </h3>
                    <h3 class="slide2" style="width: 100%;">
                        Smoothies
                    </h3>
                    <h3 class="slide3" style="width: 100%;">
                        Soups
                    </h3>
                </div>
            </div>
        </div>
        <div class="hidden-xs col-sm-3 col-sm-offset-1 col-md-offset-3">
            <img src="images/ebooklet.png">
        </div>
    </div>
</div>
<div class="container" style="text-align: center;">
    <?php if($video): ?>
    <div id="video" class="col-xs-12 col-sm-7">
        <?php if($day > 3)echo '<h1>DAY ' . ($day - 3) . '</h1>'; ?>
        <h3><?php echo $subject; ?></h3>
        <div class="video-container">
            <iframe id="video_frame" src="<?php echo strtr($video,array('watch?v='=>'embed/', 'https:'=>'', '&list' => '?list')); ?>" frameborder="0" width="560" height="315" allowfullscreen="allowfullscreen">        </iframe>
            <img src="images/video.jpg" />
        </div>
    </div>
    <div id="package" class="col-xs-12 col-sm-5">
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html" target="_blank"><img src="images/detoxpack.jpg"  style="width: 80%; margin: 0 10%; float: left"></a>
        <div style="float: left; font-size: 130%;">
            <br><br>
            <span style="font-weight: 400; color: #0782C1;">Each 21 Day Detox Package Includes:</span>
            <ul style="color: #175373; list-style:none; text-align:left; padding: 10px;">
                <li>
                    <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Maxone
                </li>
                <li>
                    <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Fiber Formula
                </li>
                <li>
                    <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Plant Protein
                </li>
                <li>
                    <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Green Supremefood
                </li>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <?php if($_GET['day'] == 1): ?>
        <h1 style="margin: 15px; font-size: 33px; color: #3d6884;"><?php echo $subject; ?></h1>
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html" target="_blank">
            <img src="<?php echo SITE_DIR ?>mail/2.png" style="max-width: 700px; width: 90%;" />
        </a>
    <?php endif ?>
    <?php if($_GET['day'] == 2): ?>
        <h1 style="margin: 15px; font-size: 33px; color: #3d6884;""><?php echo $subject; ?></h1>
        <div style="margin: auto;">
            <div class="col-sm-7 col-xs-7 col-xs-offset-3 col-sm-offset-0">
                <br><br>
                <span style="font-weight: 400; color: #0782C1; font-size: 20px;">Each 21 Day Detox Package Includes:</span>
                <ul style="color: #175373; list-style:none; text-align:left; padding: 10px;  font-size: 22px;">
                    <li>
                        <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Maxone
                    </li>
                    <li>
                        <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Fiber Formula
                    </li>
                    <li>
                        <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Plant Protein
                    </li>
                    <li>
                        <img src="<?php echo SITE_DIR; ?>mail/checkmark.png">Green Supremefood
                    </li>
                </ul>
            </div>
            <div class="col-sm-5">
                <a href="http://www.drcolbert.com/21-day-detox-package-809.html"  target="_blank">
                    <img src="<?php echo SITE_DIR; ?>mail/detoxpack_2_1.jpg"  style="width: 100%; float: left">
                </a>
            </div>
            <a href="http://www.drcolbert.com/21-day-detox-package-809.html"  target="_blank">
                <img src="<?php echo SITE_DIR; ?>images/button.png" style="min-width: 400px; max-width: 500px; width: 100%;margin-bottom: 30px;border-radius: 5px;box-shadow: 0 0 2px inset;" />
            </a>
        </div>
        <div style="clear: both;">
            <a href="http://www.drcolbert.com/21-day-detox-package-809.html"  target="_blank">
                <img style="min-width: 500px; max-width: 700px; width: 100%;" src="<?php echo SITE_DIR; ?>images/detoxpromobanner.jpg" />
            </a>
        </div>
    <?php endif ?>
    <?php if($_GET['day'] == 3): ?>
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html" target="_blank">
            <img src="<?php echo SITE_DIR; ?>mail/1.png" style="min-width: 450px; width: 90%; max-width: 728px; margin-bottom: 30px;" />
        </a>
    <?php endif ?>
</div>
<div class="big-devidor"></div>

<footer class="bs-docs-footer" role="contentinfo">
    <div class="container">
        <div class="gallery" id="faq">
            <h3> FAQ </h3>
            <div class="title-div"></div>
            <p class="subti">
                Below are common questions about the 21 Day Detox program and other general questions about Detoxification.
            </p>
        </div>
    </div>
    <img src="images/detox_timeline.jpg" width="100%">
        <div class="gallery">
            <div class="row" id="faq_content" style="padding-bottom:20px; padding-top: 20px;">
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4" style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        How Much MaxOne Should I take?
                    </span>
                    <br>
                    Take one capsule in the morning after breakfast and one capsule after dinner before bed. It is critical.
                </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        How much Green Supremefood should I take?
                    </span>
                    <br>
                    Take one scoop of green supreme food in 4-6oz of water or any desired smoothie first thing in the morning.
                </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        How much Plant Protein should I take?
                    </span>
                    <br>
                    Take one scoop of Plant Protein first thing in the morning in 6-8oz of water, almond milk or any desired smoothie. You can take 3 scoops of plant protein throughout the day, up to 3 times/daily.
                </div>
            </div>
            <ul class="row" style="padding-bottom:20px;">
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        How much Fiber Should I take?
                    </span>
                    <br>
                    Take one scoop of fiber with green supreme food or separately in 4-6oz of water. Stir and drink quickly as the fiber can coagulate quickly.
                    </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        Do I need to take all four products during the 21 Day Detox?
                    </span>
                    If you are able to it is best to take all four nutritional products during the 21 Day Detox to maximize excretion of toxins. Even though it's best to aid the detox with all 4 products, you can a-la-carte the package or take none at all.
                </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    During a detox, you are ridding your body of chemicals, toxins, pesticides and heavy metals that have been building up for years. A common side effect of removing these toxins is dry mouth, brain fog and sweating. The best way to diminish these symptoms is to drink lots of water.
                </div>
            </ul>
            <ul class="row" style="padding-bottom:20px;">
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    Consult your physicians before starting the detox program if you are: pregnant, nursing, or taking any medications.
                </div>

                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                        <span style="color:#175373; font-size:20px;">How do I know if I need to  detox?  </span>
                    <br>
                    You may need to detox if you are experiencing any of the following symptoms: fatigue, memory loss, premature aging, skin disorders, arthritis, hormone imbalances, anxiety, emotional disorders, cancer, heart disease.
                </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        What foods should I avoid during this 21 Day Detox?
                    </span><br>
                    You need to avoid all meats, peppers, potatoes, tomatoes, grains, corn and dairy. Processed foods and sugars. <span class="span12" style="color:#82898c; line-height:18px;">Alcohol, processed vegetable oils, deep fried foods, microwaved foods, hydrogenated and partially hydrogenated fats and oils which are found in butter, margarine and shortening, soy, fish and poultry.
                    </span>
                </div>
            </ul>
            <ul class="row" style="padding-bottom:20px;">
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        How much water should I drink?
                    </span>
                    <br>
                    Divide your weight by 2.2 (For example. If you weigh 140lbs (143 ÷ 2.2 = 65), so you should drink 65 oz water/ daily)
                </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        What water do you recommend?
                    </span>
                    <br>
                    I recommend drinking alkaline water. I have recommended Kagan and LifeIonizer for years. They are two brands I trust.
                </div>
                <div class="col-sm-offset-0 col-xs-11 col-xs-offset-1 col-sm-4"  style="color:#82898c; line-height:18px;">
                    <span style="color:#175373; font-size:20px;">
                        After the challenge begins, can I still sign up?
                    </span>
                    <br>
                    No, but we will re-launch a detox program once each season. You can sign up next Winter for the 21 Day Detox program that begins Feb 15th, the day after Valentine's Day.
                </div>
            </div>
            <div class="row" style="padding-bottom:30px">
                <div class="col-xs-12" style="color:#82898c; line-height:18px; padding: 0 50px; "><center><span style="color:#175373; font-size:20px;">What foods can I eat during the 21 Day Detox? </span></center><br>
                    During the 21 Day Detox you can eat beans, peas, lentils, all fruits, grasses and most vegetables including:

                    Artichoke, Arugula, Asparagus, Legumes, Broccoli, Brussels sprouts, Cabbage
                    ,Calabrese, Carrots, Cauliflower, Celery, Chard, Collard greens, Herbs, Chamomile, Dill, Fennel, Lavender, Lemon Grass, Marjoram, Oregano, Parsley, Rosemary, Sage, Thyme, Kale, Kohlrabi, Lettuce, Mushrooms, Mustard greens, Nettles, Okra, Chives, Garlic, Leek, Onion, Parsley, Beetroot, Celeriac, Daikon, Ginger, Parsnip, Rutabaga, Turnip, Radish, Spinach, Topinambur, Squashes, Acorn squash, Butternut squash, Banana squash, Zucchini, Cucumber, Delicata, Gem squash, Hubbard squash, Marrow, Squash,Patty pans, Pumpkin, Spaghetti squash, Watercress.
                </div>
            </div>
        </div>
</footer>

</html>