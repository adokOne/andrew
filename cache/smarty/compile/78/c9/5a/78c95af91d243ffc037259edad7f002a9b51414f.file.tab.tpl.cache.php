<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:53:37
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1167485945421b3a11239b1-14301914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78c95af91d243ffc037259edad7f002a9b51414f' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/homefeatured/tab.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1167485945421b3a11239b1-14301914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421b3a11584d9_62975510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b3a11584d9_62975510')) {function content_5421b3a11584d9_62975510($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/adok/WWW/andrew/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
