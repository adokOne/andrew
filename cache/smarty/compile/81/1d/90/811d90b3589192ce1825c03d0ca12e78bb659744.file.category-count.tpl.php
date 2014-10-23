<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:54:14
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14608980815421b3c653b599-17578794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '811d90b3589192ce1825c03d0ca12e78bb659744' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/category-count.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14608980815421b3c653b599-17578794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421b3c655c700_47236124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b3c655c700_47236124')) {function content_5421b3c655c700_47236124($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>
