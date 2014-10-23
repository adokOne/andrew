<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 13:35:30
         compiled from "/home/adok/WWW/andrew/odmin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:645207951541c06f2e4b587-18988519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4cf504956e6880e00717d9f66f16dccd2ca2c3' => 
    array (
      0 => '/home/adok/WWW/andrew/odmin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645207951541c06f2e4b587-18988519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c06f2e82199_02604682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c06f2e82199_02604682')) {function content_541c06f2e82199_02604682($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
