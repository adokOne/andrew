<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:53:37
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5413336995421b3a1358ab2-33150386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e643a61227e600efd195e89d0eb4e489394a55c4' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockbestsellers/tab.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5413336995421b3a1358ab2-33150386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421b3a13ad2d9_55368776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b3a13ad2d9_55368776')) {function content_5421b3a13ad2d9_55368776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/adok/WWW/andrew/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>
