<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:13:53
         compiled from "/var/www/pro-gorod.loc/www/application/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:767928030546a10b1bffcd6-39178131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83d261a7b8f9159a288f19868dab4b111db9eb99' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/admin/index.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '767928030546a10b1bffcd6-39178131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'template_dir' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b2042c53_93367628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b2042c53_93367628')) {function content_546a10b2042c53_93367628($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['user']->value['id']>0) {?>
    <?php if ($_smarty_tpl->tpl_vars['template_dir']->value!=@constant('DS')) {?>
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['system']->value['template_folder']).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate (((@constant('TEMPLATE_DIR')).($_smarty_tpl->tpl_vars['system']->value['template_folder'])).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php }} ?>
