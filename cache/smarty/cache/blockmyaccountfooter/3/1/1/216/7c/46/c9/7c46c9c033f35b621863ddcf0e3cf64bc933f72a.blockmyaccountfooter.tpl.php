<?php /*%%SmartyHeaderCode:21377925915421b3a2983fc1-68618136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c46c9c033f35b621863ddcf0e3cf64bc933f72a' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21377925915421b3a2983fc1-68618136',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bc20278383_33618002',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bc20278383_33618002')) {function content_5421bc20278383_33618002($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://andrew.local/index.php?controller=my-account" title="Управление моей учетной записью покупателя" rel="nofollow">Моя учетная запись</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://andrew.local/index.php?controller=history" title="Мои заказы" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://andrew.local/index.php?controller=order-slip" title="Мои кредитные квитанции" rel="nofollow">Мои кредитные квитанции</a></li>
			<li><a href="http://andrew.local/index.php?controller=addresses" title="Мои адреса" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://andrew.local/index.php?controller=identity" title="Управление моими персональными данными" rel="nofollow">Моя информация</a></li>
						
            <li><a href="http://andrew.local/index.php?mylogout" title="Выйти" rel="nofollow">Выйти</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
