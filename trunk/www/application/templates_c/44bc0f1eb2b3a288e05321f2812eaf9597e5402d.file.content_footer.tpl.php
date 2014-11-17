<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:13:54
         compiled from "/var/www/pro-gorod.loc/www/application/templates/admin/content_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59841594546a10b2791576-78622592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44bc0f1eb2b3a288e05321f2812eaf9597e5402d' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/admin/content_footer.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59841594546a10b2791576-78622592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10b27d86e2_48558836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10b27d86e2_48558836')) {function content_546a10b27d86e2_48558836($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value['id']>0) {?></div><?php }?>
<form id="logout_form" method="post" action="">
    <input type="hidden"  name="logout" value="1">
</form>
        </div>
    </div>
</body><?php }} ?>
