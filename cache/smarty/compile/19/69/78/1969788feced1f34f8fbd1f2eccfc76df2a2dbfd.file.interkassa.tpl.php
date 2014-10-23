<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 21:31:00
         compiled from "/home/adok/WWW/andrew/modules/interkassa/interkassa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15334305715421bc645ec6b5-86577975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1969788feced1f34f8fbd1f2eccfc76df2a2dbfd' => 
    array (
      0 => '/home/adok/WWW/andrew/modules/interkassa/interkassa.tpl',
      1 => 1411123031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15334305715421bc645ec6b5-86577975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_path' => 0,
    'total' => 0,
    'id_cart' => 0,
    'purse' => 0,
    'sign_hash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bc6463e628_30886300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bc6463e628_30886300')) {function content_5421bc6463e628_30886300($_smarty_tpl) {?><p class="payment_module">
<a href="javascript:$('#interkassa').submit();" title="Оплатить через Интеркассу">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
interkassa.gif" style="float:left;" />
		<br />Оплатить через Интеркассу<br />
		<br style="clear:both;" />
</a>
</p>

<form id="interkassa" accept-charset="windows-1251" method="POST" action="https://interkassa.com/lib/payment.php">
<input type="hidden" name="ik_payment_amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
<input type="hidden" name="ik_payment_desc" value="Оплата заказа №<?php echo $_smarty_tpl->tpl_vars['id_cart']->value;?>
">
<input type="hidden" name="ik_payment_id" value="<?php echo $_smarty_tpl->tpl_vars['id_cart']->value;?>
">
<input type="hidden" name="ik_shop_id" value="<?php echo $_smarty_tpl->tpl_vars['purse']->value;?>
">
<input type="hidden"   name="ik_sign_hash" value="<?php echo $_smarty_tpl->tpl_vars['sign_hash']->value;?>
">
</form><?php }} ?>
