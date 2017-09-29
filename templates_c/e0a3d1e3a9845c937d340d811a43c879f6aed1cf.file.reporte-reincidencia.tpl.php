<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:52
         compiled from "C:/wamp/www/ceva/templates/lists/reporte-reincidencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84556a3bfc8f77e2-72174127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a3d1e3a9845c937d340d811a43c879f6aed1cf' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/reporte-reincidencia.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '84556a3bfc8f77e2-72174127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_default')) include 'C:\wamp\www\ceva\libs\plugins\modifier.default.php';
?><h3 class="form-section">Reincidencia</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Vacas</th>
					<th class="">Reincidencia</th>
					<th class="">Fecha de Registro</th>
					<th class="">fecha de Alta</th>
					<th class="">Protocolo</th>
					<th class="">Dia al Evento anterior</th>
					<th class="">Costo</th>
					<th class="">Costo Total</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['new_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['numVaca'];?>
</td>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['totalReincidencia'];?>
</td>
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['infoIncidencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo $_smarty_tpl->getVariable('item2')->value['fechaIngreso'];?>
 <br>
						<?php }} ?>
					</td>
					
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['infoIncidencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo $_smarty_tpl->getVariable('item2')->value['fechaAlta'];?>
 <br>
						<?php }} ?>
					</td>
					
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['infoIncidencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo $_smarty_tpl->getVariable('item2')->value['nombreTratamiento'];?>
 <br>
						<?php }} ?>
					</td>
					
					<td class="">
					<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['infoIncidencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo $_smarty_tpl->getVariable('item2')->value['diasEventoAnterior'];?>
<br>
						<?php }} ?>
					</td>
					
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['infoIncidencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							$<?php echo number_format($_smarty_tpl->getVariable('item2')->value['costo'],2,'.',',');?>
 <br>
						<?php }} ?>
					</td>

					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['totalCosto'],2,'.',',');?>
</td>
				
				
					
				</tr>
				 <?php }} else { ?>
				<tr class="odd gradeX">
					<td colspan="8"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				<?php } ?>
			</tbody>
		
		</table>
		
	
	<h3 class="form-section"></h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">0 - <?php echo $_smarty_tpl->getVariable('registros')->value['infoEstablo']['reincidenciaAutomatico'];?>
</th>
						<th class="">num - 50</th>
						<th class="">51 - 100</th>
						<th class="">mayor a 100</th>
					</tr>
				</thead>
				
				<tbody>
				<tr>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('registros')->value['array_reincidencia']['0_automatico'],0);?>
</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('registros')->value['array_reincidencia']['automatico_50'],0);?>
</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('registros')->value['array_reincidencia']['50_100'],0);?>
</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('registros')->value['array_reincidencia'][100],0);?>
</td>
					

				
				</tr>

				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/reincidencia.jpg?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

		</div>
	</div>

