<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:53:39
         compiled from "/home/adok/WWW/andrew/themes/blackhawk3.0/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1877407865421b3a32ff065-82074869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e443f7fa5ead4f165278035097b0db6dc41a7bd1' => 
    array (
      0 => '/home/adok/WWW/andrew/themes/blackhawk3.0/footer.tpl',
      1 => 1411494587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877407865421b3a32ff065-82074869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421b3a3337146_81125717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b3a3337146_81125717')) {function content_5421b3a3337146_81125717($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row">
						<div class="col-xs-12 ">
							<div class="footerblock">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							
							</div>
							
						</div>
						
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</body>
</html><?php }} ?>
