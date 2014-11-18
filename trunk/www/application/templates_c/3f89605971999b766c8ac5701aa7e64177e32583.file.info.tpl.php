<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 18:20:33
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/malls/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1639624704546a2ce6016b25-41414035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f89605971999b766c8ac5701aa7e64177e32583' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/malls/info.tpl',
      1 => 1416258502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1639624704546a2ce6016b25-41414035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a2ce63ead60_74279800',
  'variables' => 
  array (
    'system' => 0,
    'mall' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a2ce63ead60_74279800')) {function content_546a2ce63ead60_74279800($_smarty_tpl) {?>
<div class="row firm_info">
    <div id="firm_logo">
        <div class="col-md-7">
            <p class="wow slideInLeft" >
                <img src="<?php echo @constant('SITE_DIR');?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['system']->value['city']['alias'];?>
/malls/logo/normal/<?php echo $_smarty_tpl->tpl_vars['mall']->value['id'];?>
.jpg" />
            </p>
        </div>
        <div class="col-md-5">
            <div class="wow bounceInDown" data-wow-delay="0.3s" data-wow-offset="3">
                <div>
                    <br><br>
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['mall']->value['address']['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['mall']->value['address']['building'];?>

                                </td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['mall']->value['address']['phone']) {?>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-phone text-primary"></span>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['mall']->value['address']['phone'];?>

                                </td>
                            </tr>
                            <?php }?>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-time text-warning"></span>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('workdays.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('workdays'=>$_smarty_tpl->tpl_vars['mall']->value['address']['workdays']), 0);?>

                                </td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['mall']->value['site']) {?>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-link text-success"></span>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['mall']->value['site'];?>
" target="_blank"><?php echo substr($_smarty_tpl->tpl_vars['mall']->value['site'],7);?>
</a>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bs-callout bs-callout-warning">
    <div class="page-header">
        <h1 class="wow slideInLeft" ><span style="color: #31b0d5"><?php echo $_smarty_tpl->tpl_vars['mall']->value['name'];?>
</span>  <small class="wow slideInRight" data-wow-delay="0.3s"><?php echo $_smarty_tpl->tpl_vars['mall']->value['short_description'];?>
</small></h1>
    </div>
</div><?php }} ?>
