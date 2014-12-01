<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 20:08:35
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/firms/id.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1050870760547ca09356f9c4-84298217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a66065b7ef8c73455c1ba03d896af39b6d1778b' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/firms/id.tpl',
      1 => 1417380600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1050870760547ca09356f9c4-84298217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'system' => 0,
    'firm' => 0,
    'i' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547ca093d8b366_05120162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca093d8b366_05120162')) {function content_547ca093d8b366_05120162($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/pro-gorod.loc/www/libs/Smarty/libs/plugins/function.math.php';
?><div class="row firm_info">
    <div id="firm_logo">
        <div class="col-md-7">
            <p class="wow slideInLeft" >
                <img src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/logo/normal/<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
.jpg?<?php echo smarty_function_math(array('equation'=>rand()),$_smarty_tpl);?>
" />
            </p>
        </div>
        <div class="col-md-5">
            
            <div class="animate_down">
                <div>
                    <br><br>
                    <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firm']->value['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value>0) {?><div class="additional-addresses"><?php }?>
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td <?php if ($_smarty_tpl->tpl_vars['address']->value['id_mall']) {?>class="address_with_mall" <?php }?>>
                                    <span><?php echo $_smarty_tpl->tpl_vars['address']->value['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['building'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['address']->value['id_mall']) {?>
                                        <div class="firms_mall_link">
                                            <a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/torgovie_centri/?id=<?php echo $_smarty_tpl->tpl_vars['address']->value['id_mall'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['address']->value['mall_short'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['mall_name'];?>

                                            </a>
                                        </div>
                                    <?php }?>
                                </td>
                            </tr>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-phone text-primary"></span>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['address']->value['phone'];?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-time text-warning"></span>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('workdays.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('workdays'=>$_smarty_tpl->tpl_vars['address']->value['workdays']), 0);?>

                                </td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon glyphicon-link text-success"></span>
                                    </td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['firm']->value['site'];?>
" target="_blank"><?php echo substr($_smarty_tpl->tpl_vars['firm']->value['site'],7);?>
</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </table>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value>0) {?>
                            <?php if (count($_smarty_tpl->tpl_vars['firm']->value['address'])==$_smarty_tpl->tpl_vars['i']->value+1) {?>
                                <div class="btn btn-sm btn-default additional_address_hide_btn">Скрыть</div>
                            <?php }?>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value==0&&count($_smarty_tpl->tpl_vars['firm']->value['address'])>1) {?>
                            <div type="button" class="btn btn-sm btn-default additional_address_btn">Показать все адреса (<?php echo count($_smarty_tpl->tpl_vars['firm']->value['address']);?>
)</div>
                        <?php }?>
                        <br>
                        <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bs-callout bs-callout-warning">
    <div class="page-header">
        <h1  ><span class="wow slideInLeft" style="color: #31b0d5"><?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
</span>  <small class="animate_fade"><?php echo $_smarty_tpl->tpl_vars['firm']->value['short_description'];?>
</small></h1>
    </div>
</div>
<br>
<div class="tabs">
    <div class="container">
        <div class="tab-button act">
            <a href="#actions" data-toggle="tab">Действия</a>
        </div>
        <div class="tab-button">
            <a href="#profile" data-toggle="tab">О фирме</a>
        </div>
        <div class="tab-button">
            <a href="#prices" data-toggle="tab">Цены</a>
        </div>
        <div class="tab-button">
            <a href="#news" data-toggle="tab">Новости</a>
        </div>
    </div>
</div>
<div class="tabs-footer">
</div>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in with-padding" id="actions">
            <br><br>
            <div class="jumbotron">
                <div class="row text-center">
                    <a class="btn btn-lg btn-info" href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> Редактировать фирму</a>
                    <a class="btn btn-lg btn-danger" href="#delete_firm_modal" data-toggle="modal" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Удалить фирму</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-shopping-cart"></i> Добавить товары и услуги</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-picture"></i> Добавить изображения</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-bullhorn"></i> Добавить новости</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete_firm_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Удаление фирмы</h4>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить фирму? Все данные можно будет восстановить</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="">
                            <input type="hidden" name="id_firm" value="<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary" name="delete_firm_btn">Да</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="row">

        </div>
        <div class="tab-pane fade" id="profile">
        </div>
        <div class="tab-pane fade" id="dropdown1">
        </div>
        <div class="tab-pane fade" id="dropdown2">

        </div>
    </div>
<hr>

<?php }} ?>
