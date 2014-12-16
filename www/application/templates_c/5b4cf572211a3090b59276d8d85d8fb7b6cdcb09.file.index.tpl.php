<?php /* Smarty version Smarty-3.1.19, created on 2014-12-15 23:26:56
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1552293173548f4410ad0202-81340630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4cf572211a3090b59276d8d85d8fb7b6cdcb09' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/index.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552293173548f4410ad0202-81340630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548f4411491340_00655760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f4411491340_00655760')) {function content_548f4411491340_00655760($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['template_dir']->value!=@constant('DS')) {?>
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['system']->value['template_folder']).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate (((@constant('TEMPLATE_DIR')).($_smarty_tpl->tpl_vars['system']->value['template_folder'])).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






            
                
                    
                        
                        
                        
                        
                        
                    

                    
                
            
            
                
            
        





<?php }} ?>
