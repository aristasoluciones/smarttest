<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:46
         compiled from "C:/wamp/www/ceva/templates/lists/reporte-costo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5845556a3bf6acf482-06051817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27bb1e421bb65c4f3273957818c0eecafd5715e2' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/reporte-costo.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '5845556a3bf6acf482-06051817',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_default')) include 'C:\wamp\www\ceva\libs\plugins\modifier.default.php';
?><h3 class="form-section">Costo por Protocolo</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Vacas</th>
					<th class="">Veces administrado</th>
					<th class="">Productos</th>
					<th class="">Costo por protocolo</th>
					<th class="">Costo total</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listaTratamiento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
 # <?php echo $_smarty_tpl->getVariable('item')->value['numTratamiento'];?>
</td>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['totalIncidencia'];?>
</td>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['totalAdministradoProtocolo'];?>
</td>
					<td class="">
					<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['productos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
					
					<?php echo $_smarty_tpl->getVariable('key2')->value+1;?>
) <?php echo $_smarty_tpl->getVariable('item2')->value['nombre'];?>
<br>
					<?php }} ?>
					</td>
					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['costo'],2,'.',',');?>
</td>
					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['costoTotalProtocolo'],2,'.',',');?>
</td>
				</tr>
				 <?php }} else { ?>
				<tr class="odd gradeX">
					<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				<?php } ?>
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalIncidencia'];?>
</span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalAdministradoProtocolo'];?>
</span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold">$<?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['costo'],2,'.',',');?>
</span></td>
					<td><span class="text bold">$<?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['costoTotalProtocolo'],2,'.',',');?>
</span> </td>
				</tr>
			</tfoot>
		
		</table>
		
<h3 class="form-section">Costo de Descarte</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Vacas</th>
					<th class="">Total de dias de descarte</th>
					<th class=""> Litros de descarte</th>
					<th class="">Costo de descarte</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listaTratamiento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
 # <?php echo $_smarty_tpl->getVariable('item')->value['numTratamiento'];?>
</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['totalIncidencia'],0);?>
</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['totalAdministradoDescarte'],0);?>
</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['litroDescarte'],0);?>
</td>
					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['costoDescarte'],2,'.',',');?>
</td>
				</tr>
				 <?php }} else { ?>
				<tr class="odd gradeX">
					<td colspan="5"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				<?php } ?>
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalIncidencia'];?>
</span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalAdministradoDescarte'];?>
</span></td>

					<td><span class="text bold"><?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['litroDescarte'],2,'.',',');?>
</span></td>
					<td><span class="text bold">$<?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['costoDescarte'],2,'.',',');?>
</span></td>
					
				</tr>
			</tfoot>
		
		</table>
		
<h3 class="form-section">Costo Total por Mastitis</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Costo de tratamiento</th>
					<th class="">Costo de descarte</th>
					<th class="">Costo total</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listaTratamiento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
 # <?php echo $_smarty_tpl->getVariable('item')->value['numTratamiento'];?>
</td>
					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['costoTotalProtocolo'],2,'.',',');?>
</td>
					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['costoDescarte'],2,'.',',');?>
</td>
					<td class="">$<?php echo number_format($_smarty_tpl->getVariable('item')->value['costoTotalMastis'],2,'.',',');?>
</td>
				</tr>
				 <?php }} else { ?>
				<tr class="odd gradeX">
					<td colspan="4"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				<?php } ?>
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales</span></td>
					<td><span class="text bold">$<?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['costoTotalProtocolo'],2,'.',',');?>
</span> </td>
					<td><span class="text bold">$<?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['costoDescarte'],2,'.',',');?>
</span></td>
					<td><span class="text bold">$<?php echo number_format($_smarty_tpl->getVariable('registros')->value['array_totales']['costoTotalMastis'],2,'.',',');?>
</span></td>
					
				</tr>
			</tfoot>
		
		</table>
		


<div class="row-fluid">
		
		<div class="span3 "></div>
		<div class="span6 ">
			<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/reporte_costo.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >
		</div>
		<div class="span3 "></div>
</div>



