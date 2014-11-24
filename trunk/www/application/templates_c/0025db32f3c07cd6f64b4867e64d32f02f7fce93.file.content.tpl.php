<?php /* Smarty version Smarty-3.1.19, created on 2014-11-21 17:44:29
         compiled from "/var/www/pro-gorod.loc/www/application/extensions/crud/templates/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132094969546a123903bb30-10365400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0025db32f3c07cd6f64b4867e64d32f02f7fce93' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/extensions/crud/templates/content.tpl',
      1 => 1416581067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132094969546a123903bb30-10365400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a12396c7398_89192095',
  'variables' => 
  array (
    'temp_dir' => 0,
    'system' => 0,
    'params' => 0,
    'field' => 0,
    'name' => 0,
    'tmp' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a12396c7398_89192095')) {function content_546a12396c7398_89192095($_smarty_tpl) {?><?php if ($_GET['add']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['temp_dir']->value).('add.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
 <div class="row">
     <a href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['alias'];?>
/?add=1<?php echo $_smarty_tpl->tpl_vars['params']->value['add_link_params'];?>
" class="btn btn-primary"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['add_button']['value'])===null||$tmp==='' ? 'Добавить' : $tmp);?>
</a>
 </div>
 <br>
<div class="row">
 <div class="panel panel-default">
     <div class="panel-heading">
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['header'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['system']->value['title'] : $tmp);?>

     </div>
     <div class="panel-body">
         <table class="table table-bordered">
             <thead>
                <tr>
             <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                 <?php if (!$_smarty_tpl->tpl_vars['field']->value['ignore']&&!$_smarty_tpl->tpl_vars['field']->value['not_show']) {?>
                     <th>
                         <?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['label'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['name']->value : $tmp);?>

                     </th>
                 <?php }?>
             <?php } ?>
                <?php if (!$_smarty_tpl->tpl_vars['params']->value['no_cdate']&&!$_smarty_tpl->tpl_vars['params']->value['not_show_cdate']) {?>
                    <th>
                        Дата
                    </th>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['params']->value['no_actions']) {?>
                    <th>
                        Действия
                    </th>
                <?php }?>
                </tr>
             </thead>
             <tbody>
             <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tmp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                 <tr>
                 <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                     <?php if (!$_smarty_tpl->tpl_vars['field']->value['ignore']&&!$_smarty_tpl->tpl_vars['field']->value['not_show']) {?>
                         <td>
                             <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value];?>

                         </td>
                     <?php }?>
                 <?php } ?>
                     <?php if (!$_smarty_tpl->tpl_vars['params']->value['no_cdate']&&!$_smarty_tpl->tpl_vars['params']->value['not_show_cdate']) {?>
                         <td>
                             <?php echo $_smarty_tpl->tpl_vars['item']->value['cdate'];?>

                         </td>
                     <?php }?>
                     <?php if (!$_smarty_tpl->tpl_vars['params']->value['no_actions']) {?>
                         <td>
                             <a class="btn btn-default" href="<?php echo @constant('SITE_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['system']->value['alias'];?>
/?add=1&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> </a>
                            <?php if (!$_smarty_tpl->tpl_vars['params']->value['limits']['delete']) {?>
                                <a class="btn btn-warning" href="#modal" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-toggle="modal" role="button"><i class="glyphicon glyphicon-ban-circle"></i> </a>
                            <?php }?>
                         </td>
                     <?php }?>
                 </tr>

             <?php } ?>
             </tbody>
         </table>
     </div>
 </div>
 </div>
<?php if (!$_smarty_tpl->tpl_vars['params']->value['limits']['delete']) {?>
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header"><button class="close" type="button" data-dismiss="modal">x</button>
                <h4 class="modal-title" id="myModalLabel">Удалить строку?</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <form method="post" action="">
                    <button class="btn btn-primary" name="delete_item_btn" type="submit">Да</button>
                    <input type="hidden" name="item_id" value="">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Нет</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php }?>

    <script type="text/javascript">
        $ = jQuery.noConflict();
        $(document).ready(function()
        {
            $("a[data-toggle='modal']").click(function()
            {
                $("input[name='item_id']").val($(this).data('id'));
            });
        });
    </script>
<?php }} ?>
