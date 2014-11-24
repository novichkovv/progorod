<?php /* Smarty version Smarty-3.1.19, created on 2014-11-21 00:42:44
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2138739589546a10ad86e305-95730788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f42fd36444ade42b11fca6edd2d64ccb1b4260db' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/sidebar.tpl',
      1 => 1416431935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138739589546a10ad86e305-95730788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10ad88a759_63330816',
  'variables' => 
  array (
    'system' => 0,
    'divisions' => 0,
    'division' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10ad88a759_63330816')) {function content_546a10ad88a759_63330816($_smarty_tpl) {?><ul class="nav nav-list bs-docs-sidenav affix-top">
    <li class=""><a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/torgovie_centri/"><i class="icon-chevron-right"></i>Торговые центры</a></li>
    <?php  $_smarty_tpl->tpl_vars['division'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['division']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['divisions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['division']->key => $_smarty_tpl->tpl_vars['division']->value) {
$_smarty_tpl->tpl_vars['division']->_loop = true;
?>
        <li <?php if (array_key_exists($_smarty_tpl->tpl_vars['system']->value['parts'][0],$_smarty_tpl->tpl_vars['division']->value['subdivisions'])||$_smarty_tpl->tpl_vars['system']->value['parts'][0]==$_smarty_tpl->tpl_vars['division']->value['division_alias']) {?>class="active"<?php }?>><a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php echo $_smarty_tpl->tpl_vars['division']->value['division_alias'];?>
"><i class="icon-chevron-right"></i><?php echo $_smarty_tpl->tpl_vars['division']->value['division_name'];?>
</a></li>
        
        
        
        
        
        
        
        
    <?php } ?>
</ul><?php }} ?>
