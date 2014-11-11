<body>
<div class="navbar navbar-static-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{$smarty.const.DOMAIN}">Pro-gorod.com</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#logout" class="dropdown-toggle" data-toggle="dropdown" role="button">{$user.mail}<b class="caret"></b></a>
                    <span class="dropdown-menu">
                        <a href="#" onclick="document.getElementById('logout_form').submit();" id="change_city_link">Выйти</a>
                    </span>
                </li>
                <li class="login"><a href="#">Вход</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Орехово-Зуево <b class="caret"></b></a>
                    <span class="dropdown-menu">
                        <a href="#" id="change_city_link">Изменить</a>
                    </span>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->
<div class="jumbotron top">
</div>
<div class="wow slideInLeft" >
    <ol class="breadcrumb">
        <li><a href="#">Магазины</a></li>
        <li><a href="#">Бытовая техника</a></li>
        <li class="active">Эльдорадо</li>
    </ol>
    {*<p class="pull-right visible-xs">*}
    {*<button type="button" class="btn" data-toggle="offcanvas">*}
    {*<span class="sr-only">Toggle navigation</span>*}
    {*<span class="icon-bar"></span>*}
    {*<span class="icon-bar"></span>*}
    {*<span class="icon-bar"></span>*}
    {*</button>*}
    {*<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>*}
    {*</p>*}
</div>
<div class="container">
    <br>
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
            {include file=$smarty.const.TEMPLATE_DIR|cat:$system.template_folder|cat:'info.tpl'}
        </div>
        <div class="col-md-3 col-sm-3 bs-docs-sidebar sidebar-offcanvas" id="sidebar" role="navigation">
            {include file=$smarty.const.TEMPLATE_DIR|cat:'sidebar.tpl'}
        </div>
    </div>
</div>
<div class="modal fade" id="registration" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><button class="close" type="button" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
            </div>
            <form method="post" action="" id="registration_form">
                <div class="modal-body">
                    <blockquote class="bg-info">
                        <p class="text-info">Заполните простую форму, чтобы добавить свою фирму</p>
                    </blockquote>
                    <div id="error-registration" class="text-center">
                        Не все данные заполнены корректно
                    </div>
                    <div class="row">
                        <div class="col-sm-offset-2">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label>
                                        E-mail
                                    </label>
                                    <input class="form-control" type="text" name="mail" data-require="1" data-validate="mail">
                                    <div class="error-require">
                                        Необходимо ввести адрес электронной почты
                                    </div>
                                    <div class="error-validate">
                                        Проверьте правильность введенного адреса
                                    </div>
                                    <div id="error-user_exists">
                                        Пользователь с таким электронным адресом уже зарегистрирован
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Пароль
                                    </label>
                                    <input class="form-control" type="password" name="password" data-require="1" data-validate="password">
                                    <div class="error-require">
                                        Необходимо ввести пароль
                                    </div>
                                    <div class="error-validate">
                                        Пароли не совпадают!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Пароль еще раз
                                    </label>
                                    <input class="form-control" type="password" name="password2" data-require="1" data-validate="password2">
                                    <div class="error-require">
                                        Необходимо ввести пароль еще раз
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Введите текст с картинки
                                    </label>
                                    <input type="text" name="captcha" class="form-control" data-require="1">
                                    <div class="error-require">
                                        Необходимо ввести текст с картинки
                                    </div>
                                    <div id="error-captcha">
                                        Текст с картинки введен неправильно
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <img id="captcha" src="{$smarty.const.SITE_DIR}libs/captcha/captcha.php" alt="Картинка" />
                                        <div class="text-primary" id="update_captcha">Другая картинка</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" name="registration_btn" type="button">Зарегистрировать</button>
                    <button class="btn btn-default" type="button" data-dismiss="modal">Отмена</button>
                </div>
            </form>
        </div>
    </div>
</div>