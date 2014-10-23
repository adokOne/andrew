<?php /*%%SmartyHeaderCode:4042735725421bbd8014d48-72008991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de6ff2e256a737e5cdb68abfb9e0f98ea7babf1c' => 
    array (
      0 => '/home/adok/WWW/andrew/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1406806960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4042735725421bbd8014d48-72008991',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54233b9f7ed496_83279301',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54233b9f7ed496_83279301')) {function content_54233b9f7ed496_83279301($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Телевизор Samsung UE-32H5500 http://andrew.local/index.php?id_product=2&controller=product');">
				<i class="icon-twitter"></i> Твит
				<!-- <img src="http://andrew.local/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Поделиться
				<!-- <img src="http://andrew.local/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://andrew.local/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
										<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('http://andrew.local/img/p/5/5-thickbox_default.jpg');">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://andrew.local/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
