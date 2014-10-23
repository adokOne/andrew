<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 10:23:59
         compiled from "/home/adok/WWW/andrew/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:847813123541c043f3ea385-04638409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0156734b1b77a59010c4973473e4e8f42bdb091d' => 
    array (
      0 => '/home/adok/WWW/andrew/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847813123541c043f3ea385-04638409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c043f3f8410_18261610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c043f3f8410_18261610')) {function content_541c043f3f8410_18261610($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
