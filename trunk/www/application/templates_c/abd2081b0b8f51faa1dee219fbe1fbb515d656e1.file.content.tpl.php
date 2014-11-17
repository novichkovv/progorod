<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:13:54
         compiled from "/var/www/pro-gorod.loc/www/application/templates/admin/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1205387771546a10b26f5793-78278187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd2081b0b8f51faa1dee219fbe1fbb515d656e1' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/admin/content.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205387771546a10b26f5793-78278187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b2788b69_86178691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b2788b69_86178691')) {function content_546a10b2788b69_86178691($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value['id_user_group']<1) {?>
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('login_form.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php }?><?php }} ?>
