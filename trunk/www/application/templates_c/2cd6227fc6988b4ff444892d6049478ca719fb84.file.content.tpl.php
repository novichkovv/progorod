<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 18:14:07
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/firms/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:660044235546a10bfe2e2d2-44205494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd6227fc6988b4ff444892d6049478ca719fb84' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/firms/content.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '660044235546a10bfe2e2d2-44205494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a10c019bbd2_55871151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a10c019bbd2_55871151')) {function content_546a10c019bbd2_55871151($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user']->value['cities']) {?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h3 class="text-info">
        У Вас нет ни одной фирмы
    </h3>
    <p>
        Чтобы зарегистрировать фирму на портале, нажмите кнопку "Создать фирму".
    </p>
    <p>
        Если Вы хотите зарегистрировать торговый центр, перейдите в раздел <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>malls/">"Мои центры"</a>
    </p>
    <p>
        Если Вы регистрируете сеть фирм под одним брендом, находящихся в двух или более городах,  перейдите в раздел <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>nets/">"Мои сети"</a>
    </p>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>firms/?add=1" class="btn btn-lg btn-primary">Создать фирму</a>
    </div>
</div>
<?php }?><?php }} ?>
