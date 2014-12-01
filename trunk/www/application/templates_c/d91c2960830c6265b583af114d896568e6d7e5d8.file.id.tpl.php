<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 20:08:18
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/subdivisions/id.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338318828547ca0825f79e3-91948542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91c2960830c6265b583af114d896568e6d7e5d8' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/subdivisions/id.tpl',
      1 => 1417380600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338318828547ca0825f79e3-91948542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'firm' => 0,
    'system' => 0,
    'comment' => 0,
    'comments_count' => 0,
    'warning' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547ca082b08819_99166234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca082b08819_99166234')) {function content_547ca082b08819_99166234($_smarty_tpl) {?><br>
<div class="tabs">
    <div class="container">
        <div class="tab-button act">
            <a href="#comments" data-toggle="tab">Отзывы</a>
        </div>
        <div class="tab-button">
            <a href="#profile" data-toggle="tab">О фирме</a>
        </div>
        <div class="tab-button">
            <a href="#prices" data-toggle="tab">Цены</a>
        </div>
        <div class="tab-button">
            <a href="#news" data-toggle="tab">Новости</a>
        </div>
    </div>
</div>
<div class="tabs-footer">
</div>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="comments">
        <div class="container entity_container">
            <div class="row">
                <?php if (!$_smarty_tpl->tpl_vars['comments']->value) {?>
                    <div class="col-xs-12"><h2 id="no_entity">Отзывов пока нет. <small>Оставьте первый отзыв о компании <?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
 в <?php echo $_smarty_tpl->tpl_vars['system']->value['city']['name_prepositional'];?>
</small></h2></div>
                <?php } else { ?>
                    <div class="col-md-offset-1 col-xs-12"><h2>Отзывы о компании <?php echo $_smarty_tpl->tpl_vars['firm']->value['name'];?>
 в <?php echo $_smarty_tpl->tpl_vars['system']->value['city']['name_prepositional'];?>
</h2></div>
                    <?php  $_smarty_tpl->tpl_vars["comment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["comment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["comment"]->key => $_smarty_tpl->tpl_vars["comment"]->value) {
$_smarty_tpl->tpl_vars["comment"]->_loop = true;
?>
                    <div class="col-sm-12 col-md-11 col-lg-10 entity">
                        <div class="comment">
                            <div class="comment-container">
                                <div class="hidden-xs col-sm-3 col-md-2">
                                    <img src="<?php echo @constant('SITE_DIR');?>
images/images1.jpg"  style="max-height: 120px;"/><br>
                                    <div class="text-center comment-name"><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
</div>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-10">
                                    <img src="<?php echo @constant('SITE_DIR');?>
images/delimiter-gray.png"><br>
                                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['text'];?>

                                </div>
                            </div>
                            <div class="comment-stripe">
                            </div>
                            <div class="col-xs-5 col-sm-4">
                                <div class="comment-signature">
                                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>

                                </div>
                            </div>
                            <div class="col-xs-7 col-sm-8 text-center">
                                <?php if ($_smarty_tpl->tpl_vars['comments_count']->value>1) {?>
                                <div class="more_comments more_entities" data-action="more_comments" data-limit="5">
                                    Показать еще <?php if ($_smarty_tpl->tpl_vars['comments_count']->value-1<5) {?><?php echo $_smarty_tpl->tpl_vars['comments_count']->value-1;?>
 отзыв<?php if ($_smarty_tpl->tpl_vars['comments_count']->value-1!=1) {?>a<?php }?><?php } else { ?> 5 отзывов <?php if ($_smarty_tpl->tpl_vars['comments_count']->value-1!=5) {?>из <?php echo $_smarty_tpl->tpl_vars['comments_count']->value-1;?>
<?php }?><?php }?>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php }?>
            </div>
        </div><!--container-->
        
        
            
        
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <form method="post" name="comments_form" id="comments_form" action="">
                            <div class="text-danger col-sm-offset-3"><h3><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</h3></div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <textarea id="comment_textarea" name="comment_text" class="form-control" rows="4" placeholder="<?php if ($_SESSION['client']['name']) {?><?php echo $_SESSION['client']['name'];?>
, н<?php } else { ?>Н<?php }?>апишите свой отзыв" data-require="1"><?php echo $_POST['comment_text'];?>
</textarea>
                                    <div class="error-require">Необходимо ввести текст отзыва</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8">
                                <?php if ($_SESSION['client']['name']) {?>
                                    <input type="hidden" name="name" value="<?php echo $_SESSION['client']['name'];?>
">
                                    
                                <?php } else { ?>
                                    <input type="text" name="name" value="<?php echo $_POST['name'];?>
" class="form-control" placeholder="Имя" data-require="1" />
                                    <div class="error-require">Введите Ваше имя</div>
                                <?php }?>
                                <br>
                                <input type="hidden" name="id_firm" value="<?php echo $_smarty_tpl->tpl_vars['firm']->value['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
                                    <input type="hidden" name="creator" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                                <?php }?>
                                <button class="btn btn-info" type="submit" name="add_comment_btn" id="comment_btn">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--container -->
    </div><!--comment_tab-->
    <div class="tab-pane fade" id="profile">
    </div>
    <div class="tab-pane fade" id="dropdown1">
    </div>
    <div class="tab-pane fade" id="dropdown2">

    </div>
</div>
<?php }} ?>
