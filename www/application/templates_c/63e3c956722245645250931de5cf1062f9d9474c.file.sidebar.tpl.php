<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:14:00
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10846047546a10b8e8a839-76512214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63e3c956722245645250931de5cf1062f9d9474c' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/sidebar.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10846047546a10b8e8a839-76512214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'system' => 0,
    'sidebar' => 0,
    'bar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b91e7280_06420760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b91e7280_06420760')) {function content_546a10b91e7280_06420760($_smarty_tpl) {?><ul class="nav nav-list bs-docs-sidenav affix-top">
    <li  <?php if (!$_smarty_tpl->tpl_vars['system']->value['parts'][0]) {?> class="active"<?php }?>><a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>">Кабинет</a></li>
    <?php  $_smarty_tpl->tpl_vars['bar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bar']->key => $_smarty_tpl->tpl_vars['bar']->value) {
$_smarty_tpl->tpl_vars['bar']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['system']->value['parts'][0]==$_smarty_tpl->tpl_vars['bar']->value['alias']) {?>class="active"<?php }?>><a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?><?php echo $_smarty_tpl->tpl_vars['bar']->value['alias'];?>
/"><?php echo $_smarty_tpl->tpl_vars['bar']->value['title'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['parts'][0]==$_smarty_tpl->tpl_vars['bar']->value['alias']) {?>

        <?php }?>
    <?php } ?>
</ul><?php }} ?>