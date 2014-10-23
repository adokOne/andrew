<?php /*%%SmartyHeaderCode:14728899495421bdb86bc1a6-21922967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c2f0f8293d0b930d5aff9837e05c48677643ba' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14728899495421bdb86bc1a6-21922967',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bdb87666d7_47788457',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bdb87666d7_47788457')) {function content_5421bdb87666d7_47788457($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://andrew.local/index.php?controller=manufacturer" title="Производители">
						Производители
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://andrew.local/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Больше чем Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Все производители</option>
													<option value="http://andrew.local/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
