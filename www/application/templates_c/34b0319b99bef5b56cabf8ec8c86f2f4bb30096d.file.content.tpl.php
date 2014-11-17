<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 19:07:39
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/malls/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894239101546a1c788cf449-23937658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b0319b99bef5b56cabf8ec8c86f2f4bb30096d' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/malls/content.tpl',
      1 => 1416240459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894239101546a1c788cf449-23937658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a1c788d1bc3_67200776',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a1c788d1bc3_67200776')) {function content_546a1c788d1bc3_67200776($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user']->value['cities']) {?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3 class="text-info">
            У Вас нет ни одного торгового центра
        </h3>
        <p>
            Чтобы зарегистрировать торговый центр на портале, нажмите кнопку "Создать торговый центр".
        </p>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>malls/?add=1" class="btn btn-lg btn-primary">Создать торговый центр</a>
        </div>
    </div>
<?php }?><?php }} ?>
