<?php /* Smarty version Smarty-3.1.19, created on 2014-12-02 18:25:20
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/malls/id.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279608876547ca058e8a7e3-15197626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59efe4d078b5bf9bfc8e88aec6f90be4e13a34eb' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/malls/id.tpl',
      1 => 1417533917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279608876547ca058e8a7e3-15197626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547ca0595cf575_74743884',
  'variables' => 
  array (
    'system' => 0,
    'firm' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca0595cf575_74743884')) {function content_547ca0595cf575_74743884($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/pro-gorod.loc/www/libs/Smarty/libs/plugins/function.math.php';
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
                    <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firm']->value['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td>
                                    <span><?php echo $_smarty_tpl->tpl_vars['address']->value['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['building'];?>
</span>
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
                        </table>
                        <br>
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
            <a href="#profile" data-toggle="tab">О центре</a>
        </div>
        <div class="tab-button">
            <a href="#prices" data-toggle="tab">Фирмы</a>
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
/malls/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> Редактировать центр</a>
                    <a class="btn btn-lg btn-danger" href="#delete_firm_modal" data-toggle="modal" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Удалить центр</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/malls/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-registration-mark"></i> Бренды центра</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/malls/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-picture"></i> Добавить изображения</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/malls/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
"><i class="glyphicon glyphicon-bullhorn"></i> Добавить новости</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete_firm_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Удаление центра</h4>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить центр? Все данные можно будет восстановить</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="">
                            <input type="hidden" name="id_mall" value="<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary" name="delete_mall_btn">Да</button>
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
