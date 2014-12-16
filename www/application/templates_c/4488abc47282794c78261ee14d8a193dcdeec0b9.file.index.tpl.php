<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 23:41:51
         compiled from "C:\Sites\pro-gorod.loc\www\application\templates\pro-gorod\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824954908aff1f4941-44175313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4488abc47282794c78261ee14d8a193dcdeec0b9' => 
    array (
      0 => 'C:\\Sites\\pro-gorod.loc\\www\\application\\templates\\pro-gorod\\index.tpl',
      1 => 1415729129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824954908aff1f4941-44175313',
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
  'unifunc' => 'content_54908affcbe759_14801887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54908affcbe759_14801887')) {function content_54908affcbe759_14801887($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_header.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['template_dir']->value!=@constant('DS')) {?>
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['system']->value['template_folder']).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate (((@constant('TEMPLATE_DIR')).($_smarty_tpl->tpl_vars['system']->value['template_folder'])).($_smarty_tpl->tpl_vars['system']->value['template_file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('content_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('TEMPLATE_DIR')).('system_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






            
                
                    
                        
                        
                        
                        
                        
                    

                    
                
            
            
                
            
        





<?php }} ?>
