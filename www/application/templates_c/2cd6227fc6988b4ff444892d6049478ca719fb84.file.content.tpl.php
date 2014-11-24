<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 18:44:22
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/firms/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1115247315546e2ae76a6e21-20618700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd6227fc6988b4ff444892d6049478ca719fb84' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/firms/content.tpl',
      1 => 1416843858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1115247315546e2ae76a6e21-20618700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546e2ae7a3e8b3_29307645',
  'variables' => 
  array (
    'user_cities' => 0,
    'system' => 0,
    'firms' => 0,
    'city' => 0,
    'firm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e2ae7a3e8b3_29307645')) {function content_546e2ae7a3e8b3_29307645($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user_cities']->value) {?>
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
    <div class="row text-center">
        <div class="col-xs-offset-1 col-xs-12">
            <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>firms/?add=1" class="btn btn-lg btn-primary">Создать фирму</a>
        </div>
    </div>
<?php } else { ?>
    <div class="row text-center">
        <div class="col-xs-offset-1 col-xs-12">
            <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>firms/?add=1" class="btn btn-lg btn-primary">Создать фирму</a>
        </div>
    </div>
<div class="col-xs-offset-1">
    <?php  $_smarty_tpl->tpl_vars['firm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firm']->key => $_smarty_tpl->tpl_vars['firm']->value) {
$_smarty_tpl->tpl_vars['firm']->_loop = true;
?>
        <div class="row">
            <h3><a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['city']->value['alias'];?>
/firms/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['firm']->value['short_description'];?>
</small></a></h3>
        </div>
        <div class="row">
            <div class="col-xs-11 col-sm-6 firms_list_logo">
                <div class="view view-first firms_list_img_container">
                    <img  class="firms_list_img" src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['city']->value['alias'];?>
/firms/logo/mini/<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
" /></a>
                    <div class="mask">
                        <a  class="info" href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['city']->value['alias'];?>
/firms/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-11 col-sm-5">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <span class="badge">8</span>Фотографии
                    </a>
                    <a href="#" class="list-group-item"><span class="badge">45</span>Цены</a>
                    <a href="#" class="list-group-item"><span class="badge">0</span>Новости</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <label>Полнота информации</label>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
<?php }?><?php }} ?>
