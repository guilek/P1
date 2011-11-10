<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 19:00:00
         compiled from "/home/www/site2/prestashop/themes/prestashop/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19441906004eba8e68993158-61802356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '843d3ed81aaa0c96a99f470e8d8d7e939c5f4362' => 
    array (
      0 => '/home/www/site2/prestashop/themes/prestashop/store_infos.tpl',
      1 => 1306752056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19441906004eba8e68993158-61802356',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'Hours:'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days_datas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php }} ?>
</table>
