<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 20:08:17
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/subdivisions/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:841325212547ca0819019a9-84648645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5146a281f41764f1555f44ccb48ed4b612a9bb' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/subdivisions/info.tpl',
      1 => 1416778784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '841325212547ca0819019a9-84648645',
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
  'unifunc' => 'content_547ca081f24542_59699993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca081f24542_59699993')) {function content_547ca081f24542_59699993($_smarty_tpl) {?><?php if ($_GET['id']) {?>
    <div class="row firm_info">
        <div id="firm_logo">
            <div class="col-md-7">
                <p class="wow slideInLeft" >
                    <img src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/logo/normal/<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
.jpg" />
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
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate (((@constant('TEMPLATE_DIR')).($_smarty_tpl->tpl_vars['system']->value['template_folder'])).("list.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
