<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 10:23:52
         compiled from "/home/adok/WWW/andrew/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1083441276541c043869d0e7-33707287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a2d02fd6b4aad59ccd5ba314323a3b0bdcedc2' => 
    array (
      0 => '/home/adok/WWW/andrew/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083441276541c043869d0e7-33707287',
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
  'unifunc' => 'content_541c04386a5f39_31731874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c04386a5f39_31731874')) {function content_541c04386a5f39_31731874($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
