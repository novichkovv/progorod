<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 17:37:05
         compiled from "/var/www/pro-gorod.loc/www/application/templates/admin/content_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104375617546a10b229cf26-68034627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21ed9ac61d2a0e5e28aafaeea2def4b6ec5de6f' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/admin/content_header.tpl',
      1 => 1417380600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104375617546a10b229cf26-68034627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b26dacc5_42858891',
  'variables' => 
  array (
    'user' => 0,
    'sidebar' => 0,
    'bar' => 0,
    'system' => 0,
    'child' => 0,
    'log' => 0,
    'item' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b26dacc5_42858891')) {function content_546a10b26dacc5_42858891($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['id']>0) {?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Настройки</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#" onclick="document.getElementById('logout_form').submit();">Выйти</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        <?php }?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['id']>0) {?>
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <?php  $_smarty_tpl->tpl_vars['bar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bar']->key => $_smarty_tpl->tpl_vars['bar']->value) {
$_smarty_tpl->tpl_vars['bar']->_loop = true;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['bar']->value['alias']==$_smarty_tpl->tpl_vars['system']->value['alias']) {?>class="active"<?php }?>>
                        <a href="<?php if (!$_smarty_tpl->tpl_vars['bar']->value['children']) {?><?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?><?php echo $_smarty_tpl->tpl_vars['bar']->value['alias'];?>
<?php } else { ?>#<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['bar']->value['badge']) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bar']->value['badge'];?>
</span> <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['bar']->value['title'];?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['bar']->value['children']) {?>
                            <ul class="nav nav-sidebar sidebar-second closed">
                                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bar']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                                    <li>
                                        <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?><?php echo $_smarty_tpl->tpl_vars['child']->value['alias'];?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['child']->value['badge']) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value['badge'];?>
</span> <?php }?>
                                            <?php echo $_smarty_tpl->tpl_vars['child']->value['title'];?>

                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php }?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <?php if ($_smarty_tpl->tpl_vars['log']->value) {?>
                <div id="log">
                    <pre>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<hr>
                        <?php } ?>
                    </pre>
                </div>
                <div id="log-button"></div>
            <?php }?>
            <ol class="breadcrumb">
                <li><a href="<?php echo @constant('SITE_DIR');?>
">Главная</a></li>
                <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
                    <li><a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['alias'];?>
"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
</a></li>
                <?php } ?>
            </ol>
        <?php }?><?php }} ?>
