<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 20:08:18
         compiled from "/var/www/pro-gorod.loc/www/application/templates/pro-gorod/content_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90079902547ca082b16595-58875060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3740e5cd57727153ccb1173d01b4c5c92627a895' => 
    array (
      0 => '/var/www/pro-gorod.loc/www/application/templates/pro-gorod/content_footer.tpl',
      1 => 1415960596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90079902547ca082b16595-58875060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547ca082b5f544_26177463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca082b5f544_26177463')) {function content_547ca082b5f544_26177463($_smarty_tpl) {?><footer>
    <div class="footer-body">
        <div class="container">
            <div class="col-md-4">
                <h3>О проекте</h3>
                <p>Вся информация о магазинах, услугах и разалечениях города. Цены, отзывы, новости, контакты и другая информация собраны для Вас<br /> на одном сайте.</p>
            </div>
            <div class="col-md-4">
                <h3>Ссылки</h3>
                <ul>
                    <li>
                        <a href="">О нас</a>
                    </li>
                    <li>
                        <a href="">Представителям компаний</a>
                    </li>
                    <li>
                        <a href="">Реклама на сайте</a>
                    </li>
                    <li>
                        <a href="">Обратная связь</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Контакты</h3>
                <div class="col-md-4">
                    <img src="<?php echo @constant('SITE_DIR');?>
images/geo.png">
                </div>
                <div class="col-md-8">
                    <br>
                    8(916)472-06-80<br>
                    admin@pro-gorod.com
                </div>
            </div>
        </div>
    </div>
    <div class="footer-footer">
        <div class="container">
            <p id="copyright">© Pro-gorod.com</p>
        </div>
    </div>
</footer>
<form id="logout_form" method="post" action="">
    <input type="hidden"  name="logout" value="1">
</form><?php }} ?>
