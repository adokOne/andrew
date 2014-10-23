<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 13:34:41
         compiled from "/home/adok/WWW/andrew/odmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149556386541c06c1d7a979-22148535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a5b0a42c60c5ed0da4b927faa8318c219c289cf' => 
    array (
      0 => '/home/adok/WWW/andrew/odmin/themes/default/template/content.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149556386541c06c1d7a979-22148535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c06c1d84514_63705592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c06c1d84514_63705592')) {function content_541c06c1d84514_63705592($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
