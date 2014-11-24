<?php /* Smarty version Smarty-3.1.19, created on 2014-11-21 18:21:20
         compiled from "/var/www/pro-gorod.loc/www/application/extensions/crud/templates/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591052299546a12396dcbb3-13099569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f781a5d775abed96ed3a803e62298d0d9ff47505' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/extensions/crud/templates/add.tpl',
      1 => 1416583255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591052299546a12396dcbb3-13099569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a123b8d77a0_61575030',
  'variables' => 
  array (
    'params' => 0,
    'value' => 0,
    'field' => 0,
    'key' => 0,
    'val' => 0,
    'row' => 0,
    'v' => 0,
    'button' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a123b8d77a0_61575030')) {function content_546a123b8d77a0_61575030($_smarty_tpl) {?><form method="post"
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='image') {?>enctype="multipart/form-data" <?php }?>
        <?php } ?>
      action="" xmlns="http://www.w3.org/1999/html">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <?php if (!$_smarty_tpl->tpl_vars['value']->value['ngroup']&&!$_smarty_tpl->tpl_vars['params']->value['ngroup']&&!$_smarty_tpl->tpl_vars['value']->value['group_nopen']!==false) {?>
            <div class="form-group">
        <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['value']->value['nrow']&&!$_smarty_tpl->tpl_vars['params']->value['nrow']&&!$_smarty_tpl->tpl_vars['value']->value['row_nopen']) {?>
        <div class="row">
    <?php }?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['value']->value['lg']||$_smarty_tpl->tpl_vars['value']->value['col']) {?>col-lg-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['lg'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['value']->value['col'] : $tmp);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['col']||$_smarty_tpl->tpl_vars['params']->value['lg']) {?>col-lg-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['lg'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['params']->value['col'] : $tmp);?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['md']||$_smarty_tpl->tpl_vars['value']->value['col']) {?>col-md-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['md'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['value']->value['col'] : $tmp);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['col']||$_smarty_tpl->tpl_vars['params']->value['md']) {?>col-md-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['md'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['params']->value['col'] : $tmp);?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['sm']||$_smarty_tpl->tpl_vars['value']->value['col']) {?>col-sm-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['sm'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['value']->value['col'] : $tmp);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['col']||$_smarty_tpl->tpl_vars['params']->value['sm']) {?>col-sm-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['sm'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['params']->value['col'] : $tmp);?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['xs']||$_smarty_tpl->tpl_vars['value']->value['col']) {?>col-xs-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['xs'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['value']->value['col'] : $tmp);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['col']||$_smarty_tpl->tpl_vars['params']->value['xs']) {?>col-xs-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['xs'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['params']->value['col'] : $tmp);?>
<?php }?>">
            <label><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='text'||$_smarty_tpl->tpl_vars['value']->value['type']=='password'||!$_smarty_tpl->tpl_vars['value']->value['type']) {?>
                <input name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['class'])===null||$tmp==='' ? 'form-control' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"<?php }?> type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['type'])===null||$tmp==='' ? 'text' : $tmp);?>
" <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['field']->value];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['placeholder']) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['value']->value['placeholder'];?>
"<?php }?>  <?php if ($_smarty_tpl->tpl_vars['value']->value['autocomplete']) {?>autocomplete="<?php echo $_smarty_tpl->tpl_vars['value']->value['autocomplete'];?>
"<?php }?> />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='textarea') {?>
                <textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['class'])===null||$tmp==='' ? 'form-control' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php if ($_smarty_tpl->tpl_vars['value']->value['placeholder']) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['value']->value['placeholder'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['cols']) {?>cols="<?php echo $_smarty_tpl->tpl_vars['value']->value['cols'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['rows']) {?>rows="<?php echo $_smarty_tpl->tpl_vars['value']->value['rows'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['field']->value];?>
</textarea>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='select') {?>
                <select name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['class'])===null||$tmp==='' ? 'form-control' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php if ($_smarty_tpl->tpl_vars['value']->value['placeholder']) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['value']->value['placeholder'];?>
"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['selected']||$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['field']->value]==$_smarty_tpl->tpl_vars['v']->value['value']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
</option>
                <?php } ?>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='checkbox') {?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['inner_group']) {?>
                    <div class="form-group">
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <label class="checkbox<?php if ($_smarty_tpl->tpl_vars['value']->value['inline']||$_smarty_tpl->tpl_vars['v']->value['inline']) {?>-inline<?php }?>">
                        <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value : $tmp);?>
"  class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['class'])===null||$tmp==='' ? '' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['disabled']) {?>disabled="disabled"<?php }?>/>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>

                    </label>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['inner_group']) {?>
                    </div>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='radio') {?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['inner_group']) {?>
                    <div class="form-group">
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <label class="radio<?php if ($_smarty_tpl->tpl_vars['value']->value['inline']||$_smarty_tpl->tpl_vars['v']->value['inline']) {?>-inline<?php }?>">
                        <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['class']) {?>class="<?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['disabled']) {?>disabled="disabled"<?php }?>/>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>

                    </label>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['inner_group']) {?>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='hidden') {?>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['field']->value];?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='image') {?>
                <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
"class="form-control">
                <input type="hidden" name="old_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['field']->value];?>
"
                
                    
                        
                            
                        
                        
                    
                    
                        
                        
                    
                
            <?php }?>
        </div>

    <?php if (!$_smarty_tpl->tpl_vars['value']->value['ngroup']&&!$_smarty_tpl->tpl_vars['params']->value['ngroup']&&!$_smarty_tpl->tpl_vars['value']->value['group_nclose']) {?>
        </div>
    <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['value']->value['nrow']&&!$_smarty_tpl->tpl_vars['params']->value['nrow']&&!$_smarty_tpl->tpl_vars['value']->value['row_nclose']) {?>
            </div>
        <?php }?>
    <?php } ?>
    <?php if (!$_smarty_tpl->tpl_vars['params']->value['button']['ngroup']&&!$_smarty_tpl->tpl_vars['params']->value['ngroup']&&!$_smarty_tpl->tpl_vars['params']->value['button']['group_nopen']) {?>
    <div class="form-group">
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['params']->value['button']['nrow']&&!$_smarty_tpl->tpl_vars['params']->value['nrow']&&!$_smarty_tpl->tpl_vars['params']->value['button']['row_nopen']) {?>
        <div class="row">
            <?php }?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['params']->value['button']['lg']) {?>col-lg-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['lg'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['button']->value['col']) {?>col-lg-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['col'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['params']->value['button']['md']) {?>col-md-<?php echo $_smarty_tpl->tpl_vars['button']->value['md'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['button']['col']) {?>col-md-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['col'];?>
<?php } else { ?>col-md-12<?php }?> <?php if ($_smarty_tpl->tpl_vars['params']->value['button']['sm']) {?>col-sm-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['sm'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['button']['col']) {?>col-sm-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['col'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['params']->value['button']['xs']) {?>col-xs-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['xs'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['button']['col']) {?>col-xs-<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['col'];?>
<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['button']->value['tag']=='button') {?>
                    <button class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['button']['class'])===null||$tmp==='' ? "btn btn-default" : $tmp);?>
" type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['button']['type'])===null||$tmp==='' ? 'submit' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['button']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['button']->value['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['button']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['button']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?>><?php echo (($tmp = @$_smarty_tpl->tpl_vars['button']->value['value'])===null||$tmp==='' ? 'Сохранить' : $tmp);?>
</button>
                <?php } elseif ($_smarty_tpl->tpl_vars['button']->value['tag']=='a') {?>
                    <a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['button']->value['class'])===null||$tmp==='' ? "btn btn-default" : $tmp);?>
" type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['button']->value['type'])===null||$tmp==='' ? 'submit' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['button']->value['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['button']->value['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['button']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['button']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['button']->value['href'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['button']->value['value'])===null||$tmp==='' ? 'Сохранить' : $tmp);?>
</a>
                <?php } else { ?>
                    <input name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['button']['name'])===null||$tmp==='' ? "add_button" : $tmp);?>
" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['button']['class'])===null||$tmp==='' ? "btn btn-default" : $tmp);?>
" type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['button']['type'])===null||$tmp==='' ? 'submit' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['params']->value['button']['id']) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['button']['id'];?>
"<?php }?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['button']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php } ?> value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['button']['value'])===null||$tmp==='' ? 'Сохранить' : $tmp);?>
" />
                <?php }?>
            </div>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['button']->value['ngroup']&&!$_smarty_tpl->tpl_vars['params']->value['ngroup']&&!$_smarty_tpl->tpl_vars['button']->value['group_nclose']) {?>
    </div>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['button']->value['nrow']&&!$_smarty_tpl->tpl_vars['params']->value['nrow']&&!$_smarty_tpl->tpl_vars['button']->value['row_nclose']) {?>
        </div>
    <?php }?>
</form>

<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function()
    {
        
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='image') {?>
        
        image_upload({
            'name': '<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
',
            'button': 'upload_crud_image_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
',
            'dir': <?php echo $_smarty_tpl->tpl_vars['value']->value['dir'];?>

        });
        
        <?php }?>
        <?php } ?>
        

    });
</script>

    

<?php }} ?>
