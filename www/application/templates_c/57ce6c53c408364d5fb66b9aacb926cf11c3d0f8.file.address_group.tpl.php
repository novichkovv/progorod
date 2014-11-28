<?php /* Smarty version Smarty-3.1.19, created on 2014-11-28 19:04:05
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/firms/ajax/address_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1987409887546a1a8224d408-97143278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ce6c53c408364d5fb66b9aacb926cf11c3d0f8' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/firms/ajax/address_group.tpl',
      1 => 1417190617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987409887546a1a8224d408-97143278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a1a8291ba25_94818413',
  'variables' => 
  array (
    'i' => 0,
    'hours' => 0,
    'hour' => 0,
    'minutes' => 0,
    'minute' => 0,
    'weekdays' => 0,
    'name' => 0,
    'label' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a1a8291ba25_94818413')) {function content_546a1a8291ba25_94818413($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group address-group" id="address_group_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
            <label>Адрес</label>
            <div class="row">
                <div class="col-xs-8">
                    <input type="text" placeholder="Улица" class="street-input form-control" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][street]" value="" autocomplete="OFF" data-require="1">
                    <div class="error-require">Неодбходимо ввести улицу</div>
                    <div class="suggests"></div>
                </div>
                <div class="col-xs-4">
                    <input type="text" placeholder="Здание" disabled="disabled" class="building-input form-control" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][building]" value="" autocomplete="OFF" data-require="1">
                    <div class="error-require">Неодбходимо ввести здание</div>
                    <div class="suggests"></div>
                </div>
            </div>
            <div class="form-group">
                <label>Телефон</label>
                <input class="form-control phone" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][phone]" value="">
            </div>
            <div class="form-group workdays-group">
                <label>Режим работы</label>
                <div class="radio">
                    <ul class="list-unstyled">
                        <li>
                            <label>
                                <input type="radio" class="workdays_radio" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][radio]" value="24" checked="checked">
                                Круглосуточно
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" class="workdays_radio"  name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][radio]" value="daily">
                                Ежедневно
                            </label>
                            <ul class="list-unstyled daily hidden">
                                <li>
                                    <label>С</label>
                                    <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][daily][from][hour]">
                                        <?php  $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hour']->key => $_smarty_tpl->tpl_vars['hour']->value) {
$_smarty_tpl->tpl_vars['hour']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['hour']->value=='09') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                                    <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][daily][from][minute]">
                                        <?php  $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['minute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['minutes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['minute']->key => $_smarty_tpl->tpl_vars['minute']->value) {
$_smarty_tpl->tpl_vars['minute']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                                    <label>По</label>
                                    <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][daily][to][hour]">
                                        <?php  $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hour']->key => $_smarty_tpl->tpl_vars['hour']->value) {
$_smarty_tpl->tpl_vars['hour']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['hour']->value=='20') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                                    <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][daily][to][minute]">
                                        <?php  $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['minute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['minutes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['minute']->key => $_smarty_tpl->tpl_vars['minute']->value) {
$_smarty_tpl->tpl_vars['minute']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <label>
                                <input type="radio" class="workdays_radio" value="schedule"  name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][radio]">
                                Выбрать дни
                            </label>
                            <ul class="list-unstyled choose hidden">
                                <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['weekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
                                    <li>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][checked]" <?php if ($_smarty_tpl->tpl_vars['name']->value!='sat'&&$_smarty_tpl->tpl_vars['name']->value!='sun') {?>checked="checked" <?php }?>>
                                                <span class="weekday_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</span>
                                                <?php echo $_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['from']['hour'];?>

                                            </label>
                                            <label>С</label>
                                            <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][from][hour]">
                                                <?php  $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hour']->key => $_smarty_tpl->tpl_vars['hour']->value) {
$_smarty_tpl->tpl_vars['hour']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['hour']->value=='09') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                            <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][from][minute]">
                                                <?php  $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['minute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['minutes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['minute']->key => $_smarty_tpl->tpl_vars['minute']->value) {
$_smarty_tpl->tpl_vars['minute']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                            <label>По</label>
                                            <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][to][hour]">
                                                <?php  $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hour']->key => $_smarty_tpl->tpl_vars['hour']->value) {
$_smarty_tpl->tpl_vars['hour']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['hour']->value=='20') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                            <select name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][to][minute]">
                                                <?php  $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['minute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['minutes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['minute']->key => $_smarty_tpl->tpl_vars['minute']->value) {
$_smarty_tpl->tpl_vars['minute']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <button class="btn btn-sm btn-success add-address-group" type="button">Добавить еще адрес</button>
                <button class="btn btn-sm btn-warning close-address-group" type="button">Отменить</button>
            </div>
        </div>
    </div>
</div><?php }} ?>
