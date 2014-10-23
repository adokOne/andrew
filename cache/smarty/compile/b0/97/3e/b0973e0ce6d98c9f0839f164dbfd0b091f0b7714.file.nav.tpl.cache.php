<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:53:38
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9765189345421b3a2f1a134-76725736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0973e0ce6d98c9f0839f164dbfd0b091f0b7714' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/blockcontact/nav.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9765189345421b3a2f1a134-76725736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421b3a301f911_66994768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b3a301f911_66994768')) {function content_5421b3a301f911_66994768($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
</div><?php }} ?>
