<?php /*%%SmartyHeaderCode:17204890045421bdb8945891-71072357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a9c213afe774e76321510f824e667a134e0164' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blocksupplier/blocksupplier.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17204890045421bdb8945891-71072357',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5423368ac5fe69_14681573',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423368ac5fe69_14681573')) {function content_5423368ac5fe69_14681573($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://andrew.local/index.php?controller=supplier" title="Поставщики">
					Поставщики
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://andrew.local/index.php?id_supplier=1&amp;controller=supplier" 
					title="Подробнее о Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Все поставщики</option>
													<option value="http://andrew.local/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
