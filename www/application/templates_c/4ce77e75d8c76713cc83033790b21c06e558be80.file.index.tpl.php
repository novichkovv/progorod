<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:14:00
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826157975546a10b8497b98-97221284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce77e75d8c76713cc83033790b21c06e558be80' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/index.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826157975546a10b8497b98-97221284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b880bcc9_43258627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b880bcc9_43258627')) {function content_546a10b880bcc9_43258627($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['template_dir']->value!=@constant('DS')) {?>
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['system']->value['template_folder']).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate (((@constant('TEMPLATE_DIR')).($_smarty_tpl->tpl_vars['system']->value['template_folder'])).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
