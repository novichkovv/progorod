<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 00:41:08
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/subdivisions/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165323541754725474e524f8-95168755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a51664d3b3890ce5960c3322a342c195456fcee0' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/subdivisions/list.tpl',
      1 => 1416778784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165323541754725474e524f8-95168755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'firms' => 0,
    'system' => 0,
    'firm' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547254754a27f1_50022430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547254754a27f1_50022430')) {function content_547254754a27f1_50022430($_smarty_tpl) {?><div class="row">
    <div class="col-md-12">
        <?php  $_smarty_tpl->tpl_vars['firm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firm']->key => $_smarty_tpl->tpl_vars['firm']->value) {
$_smarty_tpl->tpl_vars['firm']->_loop = true;
?>
            <div class="row">
                <h3><a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['parts'][0];?>
/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id_firm'];?>
"><?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['firm']->value['short_description'];?>
</small></a></h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="view view-first firms_list_img_container">
                        <img class="firms_list_img" src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/firms/logo/normal/<?php echo $_smarty_tpl->tpl_vars['firm']->value['id_firm'];?>
.jpg" />
                        <div class="mask">
                            <h2><?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
</h2>
                            <p><?php echo $_smarty_tpl->tpl_vars['firm']->value['short_description'];?>
</p>
                            <a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['parts'][0];?>
/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['id_firm'];?>
" class="info">Перейти</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div>
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td <?php if ($_smarty_tpl->tpl_vars['firm']->value['address']['id_mall']) {?>class="address_with_mall" <?php }?>>
                                    <span><?php echo $_smarty_tpl->tpl_vars['firm']->value['address']['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['firm']->value['address']['building'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['firm']->value['address']['id_mall']) {?>
                                        <div class="firms_mall_link">
                                            <a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/torgovie_centri/?id=<?php echo $_smarty_tpl->tpl_vars['firm']->value['address']['id_mall'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['firm']->value['address']['mall_short'];?>
 <?php echo $_smarty_tpl->tpl_vars['firm']->value['address']['mall_name'];?>

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
                                    <?php echo $_smarty_tpl->tpl_vars['firm']->value['address']['phone'];?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-time text-warning"></span>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('workdays.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('workdays'=>$_smarty_tpl->tpl_vars['firm']->value['address']['workdays']), 0);?>

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
                    </div>
                </div>
            </div>
            <hr>
        <?php } ?>
    </div>
</div><?php }} ?>
