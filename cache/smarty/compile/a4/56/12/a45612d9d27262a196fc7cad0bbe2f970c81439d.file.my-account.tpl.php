<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 21:36:40
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13921934865421bdb876a7b9-43032172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a45612d9d27262a196fc7cad0bbe2f970c81439d' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockwishlist/my-account.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13921934865421bdb876a7b9-43032172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bdb87b9ce9_10654076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bdb87b9ce9_10654076')) {function content_5421bdb87b9ce9_10654076($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
