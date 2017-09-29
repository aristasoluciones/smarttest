<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:13:42
         compiled from "C:/wamp/www/ceva/templates/forms/listar-establo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25258556a3616243be4-10791549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a226074cfffed80b15a396137089ea92908abc27' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/listar-establo.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '25258556a3616243be4-10791549',
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