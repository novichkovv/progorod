<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 23:41:52
         compiled from "C:\Sites\pro-gorod.loc\www\application\templates\pro-gorod\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:384554908b00744412-17705183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51bae5dd7ad8a558ddf7f884608f0f5bc18daaf8' => 
    array (
      0 => 'C:\\Sites\\pro-gorod.loc\\www\\application\\templates\\pro-gorod\\sidebar.tpl',
      1 => 1416514570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '384554908b00744412-17705183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'system' => 0,
    'divisions' => 0,
    'division' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54908b00822ed4_71066888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54908b00822ed4_71066888')) {function content_54908b00822ed4_71066888($_smarty_tpl) {?><ul class="nav nav-list bs-docs-sidenav affix-top">
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
