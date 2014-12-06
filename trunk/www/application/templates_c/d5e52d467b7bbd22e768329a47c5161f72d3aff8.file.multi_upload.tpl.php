<?php /* Smarty version Smarty-3.1.19, created on 2014-12-05 18:35:40
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/ajax/multi_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8929273785481cf7f3292f3-34887159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e52d467b7bbd22e768329a47c5161f72d3aff8' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/ajax/multi_upload.tpl',
      1 => 1417793733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8929273785481cf7f3292f3-34887159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5481cf7f3b14a5_32982926',
  'variables' => 
  array (
    'path' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481cf7f3b14a5_32982926')) {function content_5481cf7f3b14a5_32982926($_smarty_tpl) {?><div class="col-xs-3 multi_upload">
<div class="row">
    <div class="thumbnail">
        <div class="preview">
            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
            <input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
        </div>
        <div class="caption">
            <button id="upload_logo" type="button" class="btn btn-default">Изменить файл</button>
            <span class="status"></span>
        </div>
    </div>
</div>
</div><?php }} ?>
