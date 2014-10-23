<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 10:23:51
         compiled from "/home/adok/WWW/andrew/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1406024864541c0437dc7365-60486074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f7bc9d95d86676d63e6f9056f9546be18a791a5' => 
    array (
      0 => '/home/adok/WWW/andrew/admin/themes/default/template/content.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406024864541c0437dc7365-60486074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c0437deebc6_05881869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c0437deebc6_05881869')) {function content_541c0437deebc6_05881869($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
