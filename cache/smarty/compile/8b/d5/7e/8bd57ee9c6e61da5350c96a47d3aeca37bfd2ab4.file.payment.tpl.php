<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 21:31:00
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10684377945421bc64440c59-92644862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd57ee9c6e61da5350c96a47d3aeca37bfd2ab4' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10684377945421bc64440c59-92644862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bc644c1bb8_78898268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bc644c1bb8_78898268')) {function content_5421bc644c1bb8_78898268($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a 
            class="bankwire" 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" 
            title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
            	<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div><?php }} ?>
