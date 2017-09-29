<?php /* Smarty version Smarty3-b7, created on 2016-04-17 09:07:01
         compiled from "C:/wamp/www/customerswm/templates/forms/listar-establo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112857139885a9f595-80647493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31aee14eaa967977d2a5a4ae0697532d28aca8f' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/forms/listar-establo.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '112857139885a9f595-80647493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="control-group">
	<label class="control-label">Establos:</label>
	<div class="controls">
		<select class="span3 chosen" data-placeholder="Choose a Category" onchange="GuardarEstablo(this.value)">
			<option value="">Seleccionar Establo</option>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listEstablos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>        	
			<option <?php if ($_smarty_tpl->getVariable('usr')->value['establoId']==$_smarty_tpl->getVariable('item')->value['establoId']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['establoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
			<?php }} ?>
		</select>
	</div>
</div>