<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 18:59:23
         compiled from "/home/www/site2/prestashop/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21037009494eba8e439c9b26-25390520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb9ddb2f759d30b858931d3d28450087991b00d' => 
    array (
      0 => '/home/www/site2/prestashop/themes/prestashop/footer.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21037009494eba8e439c9b26-25390520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
