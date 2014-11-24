<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 00:41:03
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/divisions/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894205998546e608a13c674-65602798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f22d2eab71dd39d76781bf3fae280857f8bf9d7' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/divisions/info.tpl',
      1 => 1416740352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894205998546e608a13c674-65602798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546e608a3d3dd8_17389055',
  'variables' => 
  array (
    'division' => 0,
    'system' => 0,
    'delay' => 0,
    'offset' => 0,
    'subdivision' => 0,
    'count_firms' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e608a3d3dd8_17389055')) {function content_546e608a3d3dd8_17389055($_smarty_tpl) {?>
<div class="row text-danger">
    <div class="col-xs-offset-1 col-md-offset-2">
        <h1><?php echo $_smarty_tpl->tpl_vars['division']->value['division_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['city']['name_genitive'];?>
</h1>
    </div>
</div>
<div class="col-md-offset-1 col-md-8 col-sm-10">
    <ul class="list-unstyled">
        <?php $_smarty_tpl->tpl_vars["delay"] = new Smarty_variable("0", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["offset"] = new Smarty_variable("0", null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['subdivision'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subdivision']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['division']->value['subdivisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subdivision']->key => $_smarty_tpl->tpl_vars['subdivision']->value) {
$_smarty_tpl->tpl_vars['subdivision']->_loop = true;
?>
        <div class="wow slideInLeft" data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['delay']->value;?>
s" data-wow-offset="-<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
            <img class="subdivision_icon" src="<?php echo @constant('SITE_DIR');?>
uploads/icons/subdivisions/30_<?php echo $_smarty_tpl->tpl_vars['subdivision']->value['id_subdivision'];?>
.png" />
            <?php if ($_smarty_tpl->tpl_vars['count_firms']->value[$_smarty_tpl->tpl_vars['subdivision']->value['id_subdivision']]) {?>
                <a class="subdivision_link"  href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/<?php echo $_smarty_tpl->tpl_vars['subdivision']->value['subdivision_alias'];?>
"><?php echo $_smarty_tpl->tpl_vars['subdivision']->value['subdivision_name'];?>
</a>
            <?php } else { ?>
                <span class="subdivision_link"><?php echo $_smarty_tpl->tpl_vars['subdivision']->value['subdivision_name'];?>
</span>
            <?php }?>
        </div>
            <?php $_smarty_tpl->tpl_vars["delay"] = new Smarty_variable($_smarty_tpl->tpl_vars['delay']->value+0.03, null, 0);?>
            <?php $_smarty_tpl->tpl_vars["offset"] = new Smarty_variable($_smarty_tpl->tpl_vars['offset']->value+30, null, 0);?>
        <?php } ?>
    </ul>
</div>
<div class="col-md-3 col-sm-2">
    <ul class="list-unstyled subdivision_badges">
        <?php  $_smarty_tpl->tpl_vars['subdivision'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subdivision']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['division']->value['subdivisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subdivision']->key => $_smarty_tpl->tpl_vars['subdivision']->value) {
$_smarty_tpl->tpl_vars['subdivision']->_loop = true;
?>
        <li>
            <?php if ($_smarty_tpl->tpl_vars['count_firms']->value[$_smarty_tpl->tpl_vars['subdivision']->value['id_subdivision']]) {?>
                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_firms']->value[$_smarty_tpl->tpl_vars['subdivision']->value['id_subdivision']];?>
</span>
            <?php } else { ?>
                <span class="badge zero-badge">0</span>
            <?php }?>
        </li>
        <?php } ?>
    </ul>
</div>

<?php }} ?>
