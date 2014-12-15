<?php /* Smarty version Smarty-3.1.19, created on 2014-12-08 20:13:13
         compiled from "/var/www/pro-gorod.loc/www/application/templates/user/images/images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13069102275481be56796531-96117108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e5a43f9f76439796bc2f7970df859be7d33a95' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/user/images/images.tpl',
      1 => 1418058792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13069102275481be56796531-96117108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5481be5679b0e9_95315946',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481be5679b0e9_95315946')) {function content_5481be5679b0e9_95315946($_smarty_tpl) {?><h3 class="text-center">Добавление изображений</h3>
<form name="firm_image" action="" method="post">
    <div class="row">
        <div class="col-xs-3 multi_upload">
            <div class="row">
                <div class="thumbnail">
                    <div class="preview">
                        <img id="try" src="http://user.pro-gorod.loc/uploads/temp/2761730563_9016801.jpg" />
                    </div>
                    <div class="caption">
                        <button type="button" class="btn btn-default">Выбрать файл</button>
                        <span class="status"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 multi_upload">
            <div class="row">
                <div class="thumbnail">
                    <div class="preview">
                    </div>
                    <div class="caption">
                        <button id="upload_logo" type="button" class="btn btn-default">Выбрать файл</button>
                        <span class="status"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3  multi_upload">
            <br>
            <button id="multi_upload" type="button" class="btn btn-primary">Загрузить изображение</button>
        </div>
    </div>
    <div class="row text-center">
        <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <input type="hidden" name="id_firm" value="<?php echo $_GET['id'];?>
">
        <input type="submit" value="Сохранить" name="save_firm_images">
    </div>
</form>

<?php }} ?>
