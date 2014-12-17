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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript">
        $ = jQuery.noConflict();
        $(document).ready(function()
        {
            $(".video-container").click(function()
            {
                $(".video-container img").fadeOut('slow');
                $("#video_frame").attr('src',$("#video_frame").attr('src') + '&autoplay=1');
            });
            var wow = new WOW();
            wow.init();
            slider(1);


        });
        function slider(i)
        {
            var mark = true;
            var next_slide = i == 3 ? 1 : i + 1;
            setTimeout(function()
            {
                $(".slide" + i).fadeOut('slow');
                $(".slide" + next_slide).fadeIn('slow');
                slider(next_slide);
                if(mark)
                {
                    $('.wow').each(function()
                    {
                        $(this).removeClass('animated');
                        $(this).removeClass('fadeInLeft');
                        $(this).removeClass('wow');
                    });
                    mark = null;
                }
            },5000);
        }
    </script>
    <link rel="shortcut icon" href="images/favicon.ico" />
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
                <div class="col-md-8 col-sm-6 col-xs-6 text-right">
                    <h3 style="color: #666; margin: 10px;">Questions About the Detox?<br>
                        Call <span style="color: black; font-size: 30px;">407-732-6952<span></h3>
                </div>
            </div>
        </nav>
    </div>
</header>
<div  id="slider">
    <div class="container">
        <div class="col-md-2 col-xs-3 ">
            <section class="slide1 wow bounceInLeft">
                <img src="images/salad_icon.png" />
            </section>
            <img class="slide2" src="images/smoothie_icon.png" />
            <img class="slide3" src="images/soup_icon.png" />
        </div>
        <div class="col-xs-4 col-md-3">
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
        <div class="col-xs-3 col-xs-offset-2 col-md-offset-3">
            <img src="images/ebooklet.png">
        </div>
        <!-- <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">B</span> -->
    </div>
</div>

<div class="container" style="text-align: center;">
    <div id="video">
        <h1>DAY <?php echo $day - 3; ?></h1>
        <h3><?php echo $subject; ?></h3>
        <div class="video-container">
            <iframe id="video_frame" src="<?php echo strtr($video,array('watch?v='=>'embed/', 'https:'=>'', '&list' => '?list')); ?>" frameborder="0" width="560" height="315" allowfullscreen="allowfullscreen">        </iframe>
            <img src="images/video.jpg" />
        </div>
    </div>
<!--        <iframe id="video">-->
<!--        </iframe>-->
    <div id="package">
        <a href="http://www.drcolbert.com/21-day-detox-package-809.html" target="_blank"><img src="images/detoxpack.jpg"  style="width: 80%; margin: 0 10%; float: left"></a>
        <div style="float: left; font-size: 130%;">
            <br><br>
            <span style="font-weight: 400; color: #0782C1;">Each 21 Day Detox Package Includes:</span>
            <ul style="color: #175373; list-style:none; text-align:left; padding: 10px;">
                <li>
                    <img src="mail/checkmark.png">Maxone
                </li>
                <li>
                    <img src="mail/checkmark.png">Fiber Formula
                </li>
                <li>
                    <img src="mail/checkmark.png">Plant Protein
                </li>
                <li>
                    <img src="mail/checkmark.png">Green Supremefood
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="big-devidor"></div>

<footer class="bs-docs-footer" role="contentinfo">
    <div class="container">
        <div class="gallery" id="faq">
            <h3> FAQ </h3>
            <div class="title-div"></div>
            <p class="subti">Below are common questions about the 21 Day Detox program and other general questions about Detoxification.</p>
        </div>
    </div>
    <img src="images/detox_timeline.jpg" width="100%">
        <div class="gallery">
                <ul class="row" style="padding-bottom:20px; padding-top: 20px;">
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">How Much MaxOne Should I take?</span></center><br>Take one capsule in the morning after breakfast and one capsule after dinner before bed. It is critical.
                    </li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">How much Green Supremefood should I take? </span></center><br>
                        Take one scoop of green supreme food in 4-6oz of water or any desired smoothie first thing in the morning. </li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">How much Plant Protein should I take? </span></center><br>
                        Take one scoop of Plant Protein first thing in the morning in 6-8oz of water, almond milk or any desired smoothie. You can take 3 scoops of plant protein throughout the day, up to 3 times/daily. </li>
                </ul>
                <ul class="row" style="padding-bottom:20px;">
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">How much Fiber Should I take? </span></center><br>
                        Take one scoop of fiber with green supreme food or separately in 4-6oz of water. Stir and drink quickly as the fiber can coagulate quickly. </li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">Do I need to take all four products during the 21 Day Detox? </span></center><br>
                        If you are able to it is best to take all four nutritional products during the 21 Day Detox to maximize excretion of toxins. Even though it's best to aid the detox with all 4 products, you can a-la-carte the package or take none at all. </li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">What are common symptoms of a detox? </span></center><br>
                        During a detox, you are ridding your body of chemicals, toxins, pesticides and heavy metals that have been building up for years. A common side effect of removing these toxins is dry mouth, brain fog and sweating. The best way to diminish these symptoms is to drink lots of water.
                    </li>
                </ul>
                <ul class="row" style="padding-bottom:20px;">
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">When should I not detox?  </span></center><br>
                        Consult your physicians before starting the detox program if you are: pregnant, nursing, or taking any medications.</li>

                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center>
                            <span style="color:#175373; font-size:20px;">How do I know if I need to  detox?  </span>
                        </center><br>
                        You may need to detox if you are experiencing any of the following symptoms: fatigue, memory loss, premature aging, skin disorders, arthritis, hormone imbalances, anxiety, emotional disorders, cancer, heart disease.</li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">What foods should I avoid during this 21 Day Detox? </span></center><br>
                        You need to avoid all meats, peppers, potatoes, tomatoes, grains, corn and dairy. Processed foods and sugars. <span class="span12" style="color:#82898c; line-height:18px;">Alcohol, processed vegetable oils, deep fried foods, microwaved foods, hydrogenated and partially hydrogenated fats and oils which are found in butter, margarine and shortening, soy, fish and poultry. </span></li>


                </ul>
                <ul class="row" style="padding-bottom:20px;">
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">How much water should I drink? </span></center><br>
                        Divide your weight by 2.2 (For example. If you weigh 140lbs (143 ÷ 2.2 = 65), so you should drink 65 oz water/ daily) </li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">What water do you recommend? </span></center><br>
                        I recommend drinking alkaline water. I have recommended Kagan and LifeIonizer for years. They are two brands I trust. </li>
                    <li class="col-xs-4" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">After the challenge begins, can I still sign up?  </span></center><br>
                        No, but we will re-launch a detox program once each season. You can sign up next Winter for the 21 Day Detox program that begins Feb 15th, the day after Valentine's Day. </li>
                </ul>


                <ul class="row" style="padding-bottom:30px">
                    <li class="col-xs-12" style="color:#82898c; line-height:18px;"><center><span style="color:#175373; font-size:20px;">What foods can I eat during the 21 Day Detox? </span></center><br>
                        During the 21 Day Detox you can eat beans, peas, lentils, all fruits, grasses and most vegetables including:

                        Artichoke, Arugula, Asparagus, Legumes, Broccoli, Brussels sprouts, Cabbage
                        ,Calabrese, Carrots, Cauliflower, Celery, Chard, Collard greens, Herbs, Chamomile, Dill, Fennel, Lavender, Lemon Grass, Marjoram, Oregano, Parsley, Rosemary, Sage, Thyme, Kale, Kohlrabi, Lettuce, Mushrooms, Mustard greens, Nettles, Okra, Chives, Garlic, Leek, Onion, Parsley, Beetroot, Celeriac, Daikon, Ginger, Parsnip, Rutabaga, Turnip, Radish, Spinach, Topinambur, Squashes, Acorn squash, Butternut squash, Banana squash, Zucchini, Cucumber, Delicata, Gem squash, Hubbard squash, Marrow, Squash,Patty pans, Pumpkin, Spaghetti squash, Watercress.</li></ul>


        </div>
</footer>

</html>