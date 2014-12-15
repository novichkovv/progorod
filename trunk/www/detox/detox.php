<?php require_once('config.php'); ?>
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
    <link href="assets/css/docs.min.css" rel="stylesheet" />
    <link href="assets/css/application.css" rel="stylesheet" />
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="shortcut icon" href="assets/ico/favicon.ico" />
</head>

<body class="bs-docs-home">
<a class="sr-only" href="#content">Skip to main content</a>

<header class="navbar navbar-fixed-top docs-nav" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="../mail/index.php" class="navbar-brand">Bootstrap 3</a>
        </div>

        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-6">
                    <ul class="nav navbar-nav">
                        <li ><a href="getting-started.php">Основы</a></li>
                        <li ><a href="bootstraptheme.php">Примеры</a></li>
                        <li><a href="http://goo.gl/JhGFgG" target="_blank">Шаблоны</a></li>
                        <li ><a href="css.php">CSS</a></li>
                        <li ><a href="components.php">Компоненты</a></li>
                        <li ><a href="javascript.php">JavaScript</a></li>
                        <li ><a href="customize.php">Настроить</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>    <main class="bs-docs-masthead" id="content" role="main">
    <div class="container">
        <!-- <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">B</span> -->
        <h1>Bootstrap 3</h1>
        <p class="lead">Самый популярный фреймворк для разработки адаптивных и мобильных web-проектов.<br />Bootstrap использует самые современные технологии CSS и HTML.</p>
        <p class="lead">
            <a href="/customize.php" class="btn btn-outline-inverse btn-lg">Скачать Bootstrap 3</a>
            <a href="https://github.com/twitter/bootstrap/zipball/master" class="btn btn-outline-inverse btn-lg">Скачать исходники Bootstrap</a>
        </p>
        <p class="version">Текущая версия v3.2.0</p>
    </div>
    <div class="bs-docs-social hidden-print">
        <script type="text/javascript">(function() {
                if (window.pluso)if (typeof window.pluso.start == "function") return;
                if (window.ifpluso==undefined) { window.ifpluso = 1;
                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                    var h=d[g]('body')[0];
                    h.appendChild(s);
                }})();</script>
        <div class="pluso" data-background="none;" data-options="small,square,line,horizontal,nocounter,sepcounter=1,theme=14" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
    </div>
</main>

<div class="bs-docs-featurette">
    <div class="container">
        <h2 class="bs-docs-featurette-title">Предназначен для всех, во всем мире.</h2>
        <p class="lead">Bootstrap - интуитивно простой и в тоже время мощный интерфейсный фрейморк, повышающий скорость и облегчающий разработку web-приложений.</p>
        <hr class="half-rule" />
        <p class="lead text-center">Все еще ищете причины чтобы влюбиться в Bootstrap?</p>
        <div class="row">
            <div class="col-sm-4">
                <h3>Препроцессоры</h3>
                <img src="assets/img/sass-less.png" alt="Sass and Less support" class="img-responsive" />
                <p>В дополнение к CSS, Bootstrap включает в себя поддержку двух самых популярных CSS препроцессоров, <a href="css/index.htm#less"><strong>Less</strong></a> и <a href="css/index.htm#sass"><strong>Sass</strong></a>.</p>
            </div>
            <div class="col-sm-4">
                <h3>Один код для всех устройств.</h3>
                <img src="assets/img/devices.png" alt="Responsive across devices" class="img-responsive" />
                <p>Bootstrap легко и эффективно масштабирует ваш проект с одной базой кода, от телефонов и планшетов до настольных компьютеров.</p>
            </div>
            <div class="col-sm-4">
                <h3>Документация</h3>
                <img src="assets/img/components.png" alt="Components" class="img-responsive" />
                <p>С Bootstrap, вы получаете обширную и прекрасную документации с сотнями живых примеров, фрагментов кода, и многое другое.</p>
            </div>
        </div>
        <hr class="half-rule" />

        <p class="lead">Bootstrap с открытым исходным кодом.<br />Фрейморк размещается, развиваться и поддерживаться на GitHub.</p>
        <a href="https://github.com/twbs/bootstrap" target="_blank" class="btn btn-outline btn-lg">Перейти на GitHub</a>
    </div>
</div>

<div class="bs-docs-featurette">
    <div class="container">
        <h2 class="bs-docs-featurette-title">Сделано на Bootstrap.</h2>
        <p class="lead">Миллионы замечательных сайтов по всему Интернету делаются на Bootstrap. Посмотрите примеры в постоянно растущей <a href="getting-started/index.htm#examples">коллекциии шаблонов</a>.</p>
        <hr class="half-rule" />

        <div class="row bs-docs-featured-sites">
            <div class="col-sm-3">
                <a href="http://expo.getbootstrap.com/2014/02/12/little/" target="_blank" title="Little">
                    <img src="assets/img/little.jpg" alt="Little" class="img-responsive" />
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://expo.getbootstrap.com/2014/02/10/engine-yard/" target="_blank" title="Engine Yard">
                    <img src="assets/img/engine-yard.jpg" alt="Engine Yard" class="img-responsive" />
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://expo.getbootstrap.com/2014/02/04/webflow/" target="_blank" title="Webflow">
                    <img src="assets/img/webflow.jpg" alt="Webflow" class="img-responsive" />
                </a>
            </div>

            <div class="col-sm-3">
                <a href="http://expo.getbootstrap.com/2013/05/09/sentry/" target="_blank" title="Sentry">
                    <img src="assets/img/sentry.jpg" alt="Sentry" class="img-responsive" />
                </a>
            </div>
        </div>

        <hr class="half-rule" />

        <p class="lead">Ознакомьтесь с множеством творческих проектов на Bootstrap Expo, созданных с помощью Bootstrap.</p>
        <a href="http://expo.getbootstrap.com/" target="_blank" class="btn btn-outline btn-lg">Перейти на Bootstrap Expo</a>
    </div>
</div>
<footer class="bs-docs-footer" role="contentinfo">
    <div class="container">

    </div>
</footer>

</html>