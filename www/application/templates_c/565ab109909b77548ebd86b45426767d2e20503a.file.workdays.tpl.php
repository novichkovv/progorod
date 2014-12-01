<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 20:08:17
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/workdays.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171588843547ca081f35415-92713922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '565ab109909b77548ebd86b45426767d2e20503a' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/workdays.tpl',
      1 => 1416173180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171588843547ca081f35415-92713922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'workdays' => 0,
    'item' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547ca0823e1182_68780662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca0823e1182_68780662')) {function content_547ca0823e1182_68780662($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['workdays']->value['always']) {?>Круглосуточно
<?php } elseif ($_smarty_tpl->tpl_vars['workdays']->value['daily']) {?>
    Ежедневно <?php echo $_smarty_tpl->tpl_vars['workdays']->value['daily']['from'];?>
 - <?php echo $_smarty_tpl->tpl_vars['workdays']->value['daily']['to'];?>

<?php } elseif ($_smarty_tpl->tpl_vars['workdays']->value['schedule']) {?>
<span>
    <table class="workdays_table">
        <tr class="workdays_weekdays">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['workdays']->value['schedule']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['day']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['miss']) {?>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['last']) {?>
                    - <span class="<?php if ($_smarty_tpl->tpl_vars['day']->value=='Сб'||$_smarty_tpl->tpl_vars['day']->value=='Вс') {?>text-danger<?php } else { ?>text-info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span></td>
                <?php } else { ?>
                    <td><span class="<?php if ($_smarty_tpl->tpl_vars['day']->value=='Сб'||$_smarty_tpl->tpl_vars['day']->value=='Вс') {?>text-danger<?php } else { ?>text-info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span><?php if (!$_smarty_tpl->tpl_vars['item']->value['first']) {?></td><?php }?>
                <?php }?>
            <?php } ?>
        </tr>
        <tr class="workdays_time">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['workdays']->value['schedule']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['day']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['miss']) {?>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['last']) {?>

                <?php } else { ?>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['from'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['to'];?>
</td>
                <?php }?>
            <?php } ?>
        </tr>
    </table>
</span>

<?php }?>

<?php }} ?>
