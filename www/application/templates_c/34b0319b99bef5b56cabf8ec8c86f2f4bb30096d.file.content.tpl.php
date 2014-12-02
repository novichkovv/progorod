<?php /* Smarty version Smarty-3.1.19, created on 2014-12-02 18:27:39
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/malls/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1236407030547dda6b217732-10184025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b0319b99bef5b56cabf8ec8c86f2f4bb30096d' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/malls/content.tpl',
      1 => 1417451158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236407030547dda6b217732-10184025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_cities' => 0,
    'system' => 0,
    'malls' => 0,
    'user_city' => 0,
    'firm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547dda6b5a21c6_14424604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dda6b5a21c6_14424604')) {function content_547dda6b5a21c6_14424604($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user_cities']->value) {?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3 class="text-info">
            У Вас нет ни одного торгового центра
        </h3>
        <p>
            Чтобы зарегистрировать торговый центр на портале, нажмите кнопку "Создать торговый центр".
        </p>
    </div>
    <div class="row text-center">
        <div class="col-xs-12">
            <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>malls/?add=1" class="btn btn-lg btn-primary">Создать торговый центр</a>
        </div>
    </div>
<?php } else { ?>
<div class="row text-center">
    <div class="col-xs-12">
        <a href="<?php echo @constant('SITE_DIR');?>
<?php if ($_smarty_tpl->tpl_vars['system']->value['city']['alias']) {?><?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php }?>malls/?add=1" class="btn btn-lg btn-primary">Создать торговый центр</a>
    </div>
</div>
    <div class="col-xs-offset-1">
        <?php  $_smarty_tpl->tpl_vars['firm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['malls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firm']->key => $_smarty_tpl->tpl_vars['firm']->value) {
$_smarty_tpl->tpl_vars['firm']->_loop = true;
?>
            <div class="row">
                <h3><a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['user_city']->value['alias'];?>
/malls/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['firm']->value['short_description'];?>
</small></a></h3>
            </div>
            <div class="row">
                <div class="col-xs-11 col-sm-6 firms_list_logo">
                    <div class="view view-first firms_list_img_container">
                        <img  class="firms_list_img" src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['user_city']->value['alias'];?>
/malls/logo/mini/<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
" /></a>
                        <div class="mask">
                            <a  class="info" href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['user_city']->value['alias'];?>
/malls/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
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
