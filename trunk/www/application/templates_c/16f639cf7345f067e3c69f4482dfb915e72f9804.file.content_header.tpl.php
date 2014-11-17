<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:13:49
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/content_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:598665136546a10ad4a1cf9-36158690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f639cf7345f067e3c69f4482dfb915e72f9804' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/content_header.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '598665136546a10ad4a1cf9-36158690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10ad80b167_48928405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10ad80b167_48928405')) {function content_546a10ad80b167_48928405($_smarty_tpl) {?><body>
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
                <?php if ($_smarty_tpl->tpl_vars['user']->value['mail']) {?>
                <li ><a href="http://user.<?php echo @constant('DOMAIN');?>
">Личный кабинет</a></li>
                <?php } else { ?>
                <li class="active"><a href="#registration" data-toggle="modal" role="button">Регистрация</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['mail']) {?>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
 <b class="caret"></b></a>
                        <span class="dropdown-menu">
                            <span onclick="document.getElementById('logout_form').submit();">Выйти</span>
                        </span>
                    </li>
                <?php } else { ?>
                    <li class="login"><a href="#login" data-toggle="modal" role="button">Вход</a></li>
                <?php }?>
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
    
    
    
    
    
    
    
    
    
</div>
<div class="container">
    <br>
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
            <?php echo $_smarty_tpl->getSubTemplate (((@constant('TEMPLATE_DIR')).($_smarty_tpl->tpl_vars['system']->value['template_folder'])).('info.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="col-md-3 col-sm-3 bs-docs-sidebar sidebar-offcanvas" id="sidebar" role="navigation">
            <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('sidebar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                                        <img id="captcha" src="<?php echo @constant('SITE_DIR');?>
libs/captcha/captcha.php" alt="Картинка" />
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
                        <a href="<?php echo @constant('SITE_DIR');?>
forgot_password/">Забыли пароль?</a>
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
</div><?php }} ?>
