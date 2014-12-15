<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 17:37:04
         compiled from "/var/www/pro-gorod.loc/www/application/templates/admin/system_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209905797546a10b2051234-26918684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4891969e286d18f55dcf1f629e1db49ca416b2' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/admin/system_header.tpl',
      1 => 1417380600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209905797546a10b2051234-26918684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b22920a6_83149952',
  'variables' => 
  array (
    'style' => 0,
    'href' => 0,
    'script' => 0,
    'src' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b22920a6_83149952')) {function content_546a10b22920a6_83149952($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo @constant('SITE_DIR');?>
images/main/favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/bootstrap/bootstrap.theme.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/bootstrap/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/<?php echo @constant('PROJECT');?>
/dashboard.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/<?php echo @constant('PROJECT');?>
/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/<?php echo @constant('PROJECT');?>
/common.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/wow/animate.css" />
        <?php  $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['href']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['style']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['href']->key => $_smarty_tpl->tpl_vars['href']->value) {
$_smarty_tpl->tpl_vars['href']->_loop = true;
?>
            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" />
        <?php } ?>
        <script type="text/javascript" src="<?php echo @constant('SITE_DIR');?>
js/jquery/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="<?php echo @constant('SITE_DIR');?>
js/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo @constant('SITE_DIR');?>
js/wow/wow.js"></script>
        <script type="text/javascript" src="<?php echo @constant('SITE_DIR');?>
js/<?php echo @constant('PROJECT');?>
/script.js"></script>
        <script type="text/javascript" src="<?php echo @constant('SITE_DIR');?>
js/<?php echo @constant('PROJECT');?>
/common.js"></script>
        <?php  $_smarty_tpl->tpl_vars['src'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['src']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['script']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['src']->key => $_smarty_tpl->tpl_vars['src']->value) {
$_smarty_tpl->tpl_vars['src']->_loop = true;
?>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
"></script>
        <?php } ?>
        <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
        <!--endif]-->
        <title><?php echo $_smarty_tpl->tpl_vars['system']->value['title'];?>
</title>
    </head>
    <body><?php }} ?>
