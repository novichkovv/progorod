<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 00:40:26
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/system_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928930582546a10ad1ddc71-38466353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37bba2a7fac3b5bcb85c3219a15a78ca3192ff4d' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/system_header.tpl',
      1 => 1416778784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928930582546a10ad1ddc71-38466353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10ad496d72_33122722',
  'variables' => 
  array (
    'system' => 0,
    'style' => 0,
    'href' => 0,
    'script' => 0,
    'src' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10ad496d72_33122722')) {function content_546a10ad496d72_33122722($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['system']->value['title'];?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo @constant('SITE_DIR');?>
images/main/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/bootstrap/bootstrap.theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/<?php echo @constant('PROJECT');?>
/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @constant('SITE_DIR');?>
css/<?php echo @constant('PROJECT');?>
/theme.css" />
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
    <![endif]-->
</head><?php }} ?>
