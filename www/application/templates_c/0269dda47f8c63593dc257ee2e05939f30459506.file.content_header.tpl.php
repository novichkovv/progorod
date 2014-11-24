<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 19:05:04
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/content_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2125948458546e22cd593500-15835423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0269dda47f8c63593dc257ee2e05939f30459506' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/content_header.tpl',
      1 => 1416845047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125948458546e22cd593500-15835423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546e22cd8af6d3_17673144',
  'variables' => 
  array (
    'system' => 0,
    'user' => 0,
    'breadcrumbs' => 0,
    'crumb' => 0,
    'log' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e22cd8af6d3_17673144')) {function content_546e22cd8af6d3_17673144($_smarty_tpl) {?><body>
<div class="navbar navbar-static-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://<?php echo @constant('DOMAIN');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?>/<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>">Pro-gorod.com</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#logout" class="dropdown-toggle" data-toggle="dropdown" role="button"><?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
<b class="caret"></b></a>
                    <span class="dropdown-menu">
                        <a href="#" onclick="document.getElementById('logout_form').submit();" id="change_city_link">Выйти</a>
                    </span>
                </li>
                <li class="dropdown">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['city']) {?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['name'];?>
 <b class="caret"></b></a>
                            <span class="dropdown-menu">
                            <a href="#" id="change_city_link">Изменить</a>
                        </span>
                    <?php }?>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="jumbotron top">
</div>
<div class="wow slideInLeft" >
    <ol class="breadcrumb">
        <li><a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>">Личный кабинет</a></li>
        <?php  $_smarty_tpl->tpl_vars['crumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->key => $_smarty_tpl->tpl_vars['crumb']->value) {
$_smarty_tpl->tpl_vars['crumb']->_loop = true;
?>
            <li><a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?><?php echo $_smarty_tpl->tpl_vars['crumb']->value['alias'];?>
/"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</a></li>
        <?php } ?>
    </ol>
    
    
    
    
    
    
    
    
    
</div>
<div>
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-2 bs-docs-sidebar sidebar-offcanvas" id="sidebar" role="navigation">
            <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('sidebar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="col-xs-12 col-sm-10 main-content">
            <div class="log">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <pre><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</pre><hr>
                <?php } ?>
            </div>

<?php }} ?>
