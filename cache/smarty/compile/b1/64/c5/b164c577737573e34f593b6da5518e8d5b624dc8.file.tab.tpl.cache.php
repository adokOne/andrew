<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:53:36
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blocknewproducts/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8578228625421b3a0f0f7d4-70900104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b164c577737573e34f593b6da5518e8d5b624dc8' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blocknewproducts/tab.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8578228625421b3a0f0f7d4-70900104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421b3a1011a56_12769050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b3a1011a56_12769050')) {function content_5421b3a1011a56_12769050($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/adok/WWW/andrew/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>
