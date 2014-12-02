<?php /* Smarty version Smarty-3.1.19, created on 2014-12-02 19:38:06
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/malls/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:520671236547dd9eae5d6d6-88687545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3c7e8b39d38ff8580108e7e7155307a2d692512' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/malls/add.tpl',
      1 => 1417538277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520671236547dd9eae5d6d6-88687545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547dd9ec377700_28331014',
  'variables' => 
  array (
    'warning' => 0,
    'check_firms' => 0,
    'values' => 0,
    'regions' => 0,
    'region' => 0,
    'cities' => 0,
    'id_region' => 0,
    'item' => 0,
    'city' => 0,
    'user_city' => 0,
    'i' => 0,
    'hours' => 0,
    'hour' => 0,
    'minutes' => 0,
    'minute' => 0,
    'weekdays' => 0,
    'name' => 0,
    'label' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dd9ec377700_28331014')) {function content_547dd9ec377700_28331014($_smarty_tpl) {?><form action="" method="post" id="firm_form">
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-7 col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="text-center text-danger"><h2><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</h2></div>
                <?php if ($_smarty_tpl->tpl_vars['check_firms']->value) {?>
                    <input type="hidden" name="city" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['city'];?>
">
                <?php } else { ?>
                    <div class="form-group select-group">
                        <label>Город</label>
                        <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                           data-content="Выберите область, а затем город, в котором находится ваш торговый ценр"></i>
                        <div class="form-group">
                            <select name="region" class="form-control" data-require="1">
                                <option value="">Выберите область</option>
                                <?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['values']->value['region']==$_smarty_tpl->tpl_vars['region']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['region']->value['name'];?>
</option>
                                <?php } ?>
                            </select>
                            <div class="error-require">
                                Вы не выбрали область
                            </div>
                        </div>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id_region'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id_region']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['values']->value['region']!=$_smarty_tpl->tpl_vars['id_region']->value) {?>child_select<?php }?> region_select" id="region_children_<?php echo $_smarty_tpl->tpl_vars['id_region']->value;?>
">
                                <select class="form-control" <?php if ($_smarty_tpl->tpl_vars['values']->value['region']==$_smarty_tpl->tpl_vars['id_region']->value) {?>name="city"<?php }?>>
                                    <option value="">Выберите город</option>
                                    <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['values']->value['city']==$_smarty_tpl->tpl_vars['city']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
</option>
                                    <?php } ?>
                                </select>
                                <div class="error-require">
                                    Вы не выбрали город
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>
                <br>
                <div class="form-group">
                    <label>Логотип</label>
                    <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Загрузите изображение с логотипом вашего торгового центра. Лучше всего вписываются логотипы в альбомной ориентации.
                        Если логотипа нет,
                       Вы можете использовать макет визитки или качественную фотографию вывески."></i>
                    <div class="row">
                        <div class="thumbnail">
                            <div class="preview">
                                <?php if ($_smarty_tpl->tpl_vars['values']->value['image']&&$_smarty_tpl->tpl_vars['values']->value['image']!='1') {?>
                                    <img src="<?php echo @constant('SITE_DIR');?>
uploads/temp/<?php echo $_POST['image'];?>
" />
                                <?php } elseif ($_GET['id']) {?>
                                    <img src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['user_city']->value['alias'];?>
/malls/logo/normal/<?php echo $_smarty_tpl->tpl_vars['values']->value['id'];?>
.jpg" />
                                <?php }?>
                                <input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['image'];?>
" data-require="1" />
                            </div>
                            <div class="caption">
                                <button id="upload_logo" type="button" class="btn btn-default">Выбрать файл</button>
                                <span class="status"></span>
                            </div>
                            <div class="error-require">
                                Необходимо загрузить логотип
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['name'];?>
" data-require="1">
                    <div class="error-require">Необходимо ввести название фирмы</div>
                </div>
                <div class="form-group">
                    <label>Краткое описание</label>
                    <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Два-три слова, описывающих специализацию торгового центра. Краткое описание ставится
                       рядом с названием центра для более точной идентификации. Пример: 'Торгово-развлекательный центр' или 'Строительный центр'"></i>
                    <input class="form-control" name="short_description" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['short_description'];?>
"  data-require="1">
                    <div class="error-require">Необходимо ввести краткое описание фирмы</div>
                    <p class="help-block">Пример "Торгово-развлекательный центр"</p>
                </div>
                <div class="form-group">
                    <label>Web-сайт</label>
                    <input class="form-control" name="site" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['site'];?>
">
                </div>
                <hr>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group address-group">
                            <label>Адрес</label>
                            <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                               data-content="Адрес, телефон и часы работы центра."></i>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" placeholder="Улица" <?php if (!$_smarty_tpl->tpl_vars['values']->value['city']||$_smarty_tpl->tpl_vars['check_firms']->value) {?>disabled="disabled"<?php }?> class="street-input form-control" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][street]" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['street'];?>
" autocomplete="OFF" data-require="1">
                                    <div class="error-require">Неодбходимо ввести улицу</div>
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" placeholder="Здание" <?php if (!$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]||$_smarty_tpl->tpl_vars['check_firms']->value) {?>disabled="disabled"<?php }?> class="building-input form-control" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][building]" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['building'];?>
" autocomplete="OFF" data-require="1">
                                    <div class="error-require">Неодбходимо ввести здание</div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['check_firms']->value) {?>
                                    <input type="hidden" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][street]" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['street'];?>
">
                                    <input type="hidden" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][building]" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['building'];?>
">
                                    <input type="hidden" name="check_firms" value="1">
                                <?php }?>
                            </div>
                            <div class="form-group">
                                <label>Телефон</label>
                                <input class="form-control phone" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][phone]" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['phone'];?>
">
                            </div>
                            <div class="form-group workdays-group">
                                <label>Режим работы</label>
                                <div class="radio">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>
                                                <input type="radio" class="workdays_radio" <?php if ($_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['radio']!='daily'||$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['radio']!='schedule') {?>checked="checked"<?php }?> name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][radio]" value="24">
                                                Круглосуточно
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" class="workdays_radio" <?php if ($_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['radio']=='daily') {?>checked="checked" <?php }?> name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][radio]" value="daily">
                                                Ежедневно
                                            </label>
                                            <ul class="list-unstyled daily <?php if ($_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['radio']!='daily') {?>hidden<?php }?>">
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
" <?php if ($_smarty_tpl->tpl_vars['hour']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['daily']['from']['hour']) {?>selected="selected" <?php } elseif (!$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['daily']['from']['hour']&&$_smarty_tpl->tpl_vars['hour']->value=='09') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
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
" <?php if ($_smarty_tpl->tpl_vars['minute']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['daily']['from']['minute']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
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
"  <?php if ($_smarty_tpl->tpl_vars['hour']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['daily']['to']['hour']) {?>selected="selected" <?php } elseif (!$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['daily']['to']['hour']&&$_smarty_tpl->tpl_vars['hour']->value=='20') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
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
" <?php if ($_smarty_tpl->tpl_vars['minute']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['daily']['to']['minute']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" class="workdays_radio" value="schedule" <?php if ($_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['radio']=='schedule') {?>checked="checked" <?php }?>  name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][workdays][radio]">
                                                Выбрать дни
                                            </label>
                                            <ul class="list-unstyled choose <?php if ($_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']['radio']!='schedule') {?>hidden<?php }?>">
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
][checked]" <?php if ($_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['checked']) {?>checked="checked"<?php } elseif (!$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays']&&$_smarty_tpl->tpl_vars['name']->value!='sat'&&$_smarty_tpl->tpl_vars['name']->value!='sun') {?>checked="checked" <?php }?>>
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
" <?php if ($_smarty_tpl->tpl_vars['hour']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['from']['hour']) {?>selected="selected" <?php } elseif (!$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['from']['hour']&&$_smarty_tpl->tpl_vars['hour']->value=='09') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
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
" <?php if ($_smarty_tpl->tpl_vars['minute']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['from']['minute']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
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
" <?php if ($_smarty_tpl->tpl_vars['hour']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['to']['hour']) {?>selected="selected" <?php } elseif (!$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['to']['hour']&&$_smarty_tpl->tpl_vars['hour']->value=='20') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
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
" <?php if ($_smarty_tpl->tpl_vars['minute']->value==$_smarty_tpl->tpl_vars['values']->value['address'][$_smarty_tpl->tpl_vars['i']->value]['workdays'][$_smarty_tpl->tpl_vars['name']->value]['to']['minute']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
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
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11 col-md-offset-2 col-md-8">
            <div class="form-group">
                <label>Опишите торговый центр</label>
                <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                   data-content="Напишите небольшой текст (не более 3000 знаков), описывающий ваш торговый центр."></i>
                <textarea class="ckeditor" id="editor1" name="description" data-require="1"><?php echo $_smarty_tpl->tpl_vars['values']->value['description'];?>
</textarea>
                <div class="error-require">Необходимо заполнить описание торгового центра</div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <?php if ($_GET['id']) {?>
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>
">
        <?php }?>
        <input type="hidden" name="id_user" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['values']->value['creator'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['id'] : $tmp);?>
">
        <div class="error-form">Не все поля заполнены правильно</div>
        <input class="btn btn-lg btn-primary" type="submit" name="add_firm_btn" value="Сохранить">
    </div>
    <br>
</form>

<?php }} ?>
