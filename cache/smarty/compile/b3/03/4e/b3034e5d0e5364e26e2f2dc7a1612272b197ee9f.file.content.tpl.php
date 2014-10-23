<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 10:23:57
         compiled from "/home/adok/WWW/andrew/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:572255435541c043d92f6f5-28599037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3034e5d0e5364e26e2f2dc7a1612272b197ee9f' => 
    array (
      0 => '/home/adok/WWW/andrew/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '572255435541c043d92f6f5-28599037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c043d9367e1_04742623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c043d9367e1_04742623')) {function content_541c043d9367e1_04742623($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
