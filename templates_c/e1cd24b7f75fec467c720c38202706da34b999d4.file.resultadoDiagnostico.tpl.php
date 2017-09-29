<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:06
         compiled from "C:/wamp/www/ceva/templates/boxes/resultadoDiagnostico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30809556a3bcea4de76-62959398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1cd24b7f75fec467c720c38202706da34b999d4' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/boxes/resultadoDiagnostico.tpl',
      1 => 1428618902,
    ),
  ),
  'nocache_hash' => '30809556a3bcea4de76-62959398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<select class="span6 chosen" data-placeholder="Seleccione resultados"  name="resultadoId" id="resultadoId" tabindex="">
	<option value=""></option>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listResultados')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<option <?php if ($_smarty_tpl->getVariable('item')->value['resultadoId']==$_smarty_tpl->getVariable('info')->value['resultadoId']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
	<?php }} ?>
</select>

<script>
		App.init();	
</script>