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
            <a class="navbar-brand" href="#">Pro-gorod.com</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                {if $user.mail}
                <li ><a href="http://user.{$smarty.const.DOMAIN}">Личный кабинет</a></li>
                {else}
                <li class="active"><a href="#registration" data-toggle="modal" role="button">Регистрация</a></li>
                {/if}
                {if $user.mail}
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$user.mail} <b class="caret"></b></a>
                        <span class="dropdown-menu">
                            <span onclick="document.getElementById('logout_form').submit();">Выйти</span>
                        </span>
                    </li>
                {else}
                    <li class="login"><a href="#login" data-toggle="modal" role="button">Вход</a></li>
                {/if}
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
{if $log}
    <div id="log">
    <pre>
        {foreach from=$log item=item}
            {$item}<hr>
        {/foreach}
    </pre>
    </div>
    <div id="log-button"></div>
{/if}
<div class="wow slideInLeft" >
    <ol class="breadcrumb">
        {foreach from=$breadcrumbs item=crumb}
            <li><a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}{$crumb.alias}/">{$crumb.title}</a></li>
        {/foreach}
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
                    <button class="btn btn-primary" name="registration_btn" type="submit">Зарегистрировать</button>
                    <button class="btn btn-default" type="button" data-dismiss="modal">Отмена</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-info"><button class="close" type="button" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-info" id="myModalLabel">Авторизация</h4>
            </div>
            <form method="post" action="" id="login_form">
                <div class="modal-body">
                    <div id="error-login" class="error-form text-center">
                        Неверная пара e-mail - пароль
                    </div>
                    <div class="row">
                        <div class="col-sm-offset-1">
                            <div class="col-sm-11">
                                <div class="form-group">
                                    <label>
                                        E-mail
                                    </label>
                                    <input class="form-control" type="text" name="login" data-require="1">
                                    <div class="error-require">
                                        Необходимо ввести адрес электронной почты
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Пароль
                                    </label>
                                    <input class="form-control" type="password" name="password" data-require="1"">
                                    <div class="error-require">
                                        Необходимо ввести пароль
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{$smarty.const.SITE_DIR}forgot_password/">Забыли пароль?</a>
                    </div>
                    <div class="modal-footer">
                        <div class="col-xs-4 col-xs-offset-2">
                            <button class="btn btn-primary" name="auth_btn" type="submit">Войти</button>
                        </div>
                        <div class="col-xs-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" value="1">
                                    Запомнить
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>