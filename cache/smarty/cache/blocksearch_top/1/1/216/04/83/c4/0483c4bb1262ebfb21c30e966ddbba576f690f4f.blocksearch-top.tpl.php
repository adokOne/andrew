<?php /*%%SmartyHeaderCode:10938298995421b39fee8e53-10985361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0483c4bb1262ebfb21c30e966ddbba576f690f4f' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blocksearch/blocksearch-top.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10938298995421b39fee8e53-10985361',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542334fe08b175_68284041',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542334fe08b175_68284041')) {function content_542334fe08b175_68284041($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-md-3 col-sm-4 ">
	<form id="searchbox" method="get" action="http://andrew.local/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Поиск</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
