<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:38
         compiled from "C:/wamp/www/ceva/templates/lists/estadistica-caso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8336556a3beecf4d89-33854577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95949a3f5c57abcca2dc1b1c7f146ba589ad3da8' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/estadistica-caso.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '8336556a3beecf4d89-33854577',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_string_format')) include 'C:\wamp\www\ceva\libs\plugins\modifier.string_format.php';
if (!is_callable('smarty_modifier_default')) include 'C:\wamp\www\ceva\libs\plugins\modifier.default.php';
?><?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<!-- BEGIN FORM-->
<div class="form-horizontal form-view">

	<h3 class="form-section">Informacion General</h3>
	<div class="row-fluid">
		<div class="span6 ">
			<div class="control-group">
				<label class="control-label" for="firstName">Rancho:</label>
				<div class="controls">
					<span class="text"><?php echo $_smarty_tpl->getVariable('registros')->value['infoEstablo']['nombre'];?>
</span>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="span6 ">
			
		</div>
		<!--/span-->
	</div>
	<!--/row-->
	<div class="row-fluid">
		<div class="span6 ">
			<div class="control-group">
				<label class="control-label" >Responsable:</label>
				<div class="controls">
					<span class="text"><?php echo $_smarty_tpl->getVariable('registros')->value['infoEstablo']['responsable'];?>
</span> 
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="span6 ">
			
		</div>
		<!--/span-->
	</div>
	<!--/row-->        
	<div class="row-fluid">
		<div class="span6 ">
			<div class="control-group">
				<label class="control-label" >Casos Total:</label>
				<div class="controls">
						<span class="text"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['incidenciaTotal'];?>
</span> 
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="span6 ">
			
		</div>
		<!--/span-->
	</div>
	<!--/row-->  

	
	<h3 class="form-section">Cuarto</h3>
	
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">Cuartos</th>
						<th class="">Vaca</th>
						<th class="">Porcentaje (%)</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listCuarto']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<tr>
						<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
 - <?php echo $_smarty_tpl->getVariable('item')->value['complemento'];?>
</td>
						<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['totalCuarto'];?>
</td>
						<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %</td>
					</tr>
					<?php }} ?>
				</tbody>
			
				<tfoot>
					<tr>
						<td><span class="text bold">Totales: </span></td>
						<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['cuartoVaca'];?>
</span></td>
						<td><span class="text bold"><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('registros')->value['info']['cuartoPorcentaje'],"%.2f");?>
 %</span> </td>
					</tr>
				</tfoot>
			
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/cuarto.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

		</div>
	</div>
	
<!-- 	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">Cuartos Enfermos</th>
						<th class="">Vaca</th>
						<th class="">Porcentaje (%)</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listCuarto']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<tr>
						<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
 - <?php echo $_smarty_tpl->getVariable('item')->value['complemento'];?>
</td>
						<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['totalCuarto'];?>
</td>
						<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %</td>
					</tr>
					<?php }} ?>
				</tbody>
			
				<tfoot>
					<tr>
						<td><span class="text bold">Totales: </span></td>
						<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['cuartoVaca'];?>
</span></td>
						<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['cuartoPorcentaje'];?>
 %</span> </td>
					</tr>
				</tfoot>
			
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/cuarto.jpg?<?php echo rand(1,20);?>
" alt="Smiley face" class="span12" >

		</div>
	</div> -->
	
	<h3 class="form-section">Diagnostico</h3>
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">Diagnostico</th>
						<th class="">Vaca</th>
						<th class="">Porcentaje (%)</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listDiagnostico']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<tr>
						<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
						<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['totalDiagnostico'];?>
</td>
						<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %</td>
					</tr>
					<?php }} ?>
				</tbody>
			
				<tfoot>
					<tr>
						<td><span class="text bold">Totales: </span></td>
						<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['diagnosticoVaca'];?>
</span></td>
						<td><span class="text bold"><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('registros')->value['info']['diagnosticoPorcentaje'],"%.2f");?>
 %</span> </td>
					</tr>
				</tfoot>
			
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/diagnostico.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	<h3 class="form-section">Por dias</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class=""></th>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_info_dia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<th class=""><?php echo $_smarty_tpl->getVariable('item')->value['nombreCorto'];?>
</th>
						<?php }} ?>
						<th class="">Total</th>
					</tr>
				</thead>
				
				<tbody>
				<tr>
					<td class="">Vaca</td>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_info_dia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['cantidadVaca'],0);?>
</td>
					<?php }} ?>
					<td class=""><?php echo $_smarty_tpl->getVariable('registros')->value['info']['diaVaca'];?>
</td>
				</tr>
				<tr>
					<td class="">%</td>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_info_dia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
</td>
					<?php }} ?>
					<td class=""><?php echo $_smarty_tpl->getVariable('registros')->value['info']['diaPorcentaje'];?>
</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/por_dia.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	
	
	<h3 class="form-section">DEL</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class=""></th>
						<th class="">0 - 5</th>
						<th class="">6 - 50</th>
						<th class="">51 - 100</th>
						<th class="">101 - 150</th>
						<th class="">151 - 200</th>
						<th class="">201 - 250</th>
						<th class="">251 - 300</th>
						<th class="">> 301</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="">V</td>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_del']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['cantidad'],0);?>
</td>
							
						<?php }} ?>				
					</tr>
					
					<tr>
						<td class="">%</td>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_del']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
</td>
						<?php }} ?>				
					</tr>

				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/del.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	<h3 class="form-section">Lactancia</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class=""></th>
						<th class="">1</th>
						<th class="">2</th>
						<th class="">3</th>
						<th class="">4</th>
						<th class="">5</th>
						<th class="">6</th>
						<th class="">7</th>
						<th class="">8</th>
						<th class=""> < 9 </th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="">V</td>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_lactancia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['cantidad'],0);?>
</td>
							
						<?php }} ?>				
					</tr>
					
					<tr>
						<td class="">%</td>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['array_lactancia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
</td>
						<?php }} ?>				
					</tr>

				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/lactancia.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<h3 class="form-section">Tipo de Mastitis</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
							Mastitis
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listTipoMastitis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<div class="row-fluid">
							<div class="span2 ">
								<?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>

									
							</div>
							<div class="span2 ">
									<?php echo $_smarty_tpl->getVariable('item')->value['totalMastitis'];?>

							</div>
							<div class="span2 ">
									<?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %
							</div>
						</div>
					<?php }} ?>

					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['mastitisVaca'];?>
</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold"><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('registros')->value['info']['mastitisPorcentaje'],"%.2f");?>
 %</span>
								
						</div>
					</div>
				</div>
					<div class="span5 ">
				
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/mastitis.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >
	
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<h3 class="form-section">Bacteriologia</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
							<span class="text bold">Bacterias</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listaAislamientoBac']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					
						<div class="row-fluid">
							<div class="span2 ">
								<?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>

									
							</div>
							<div class="span2 ">
									<?php echo $_smarty_tpl->getVariable('item')->value['TotalBacteriologia'];?>

							</div>
							<div class="span2 ">
									<?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %
							</div>
						</div>
					
					<?php }} ?>	
					
					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['bacteriologiaVaca'];?>
</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold"><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('registros')->value['info']['bacteriologiaPorcentaje'],"%.2f");?>
 %</span>
								
						</div>
					</div>
				</div>
				<div class="span5 ">
			
				<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/bacteria.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

				</div>

				</div>
			</div>
		</div>
	</div>
	
	<h3 class="form-section">Corrales</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
						<span class="text bold">Corral</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listCorral']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<div class="row-fluid">
							<div class="span2 ">
								<?php echo $_smarty_tpl->getVariable('item')->value['numeroCorral'];?>

									
							</div>
							<div class="span2 ">
									<?php echo $_smarty_tpl->getVariable('item')->value['totalCorral'];?>

							</div>
							<div class="span2 ">
									<?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %
							</div>
						</div>
					<?php }} ?>
					
					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['info']['corralVaca'];?>
</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold"><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('registros')->value['info']['corralPorcentaje'],"%.2f");?>
 %</span>
								
						</div>
					</div>
				</div>
				<div class="span5 ">
			
				<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/corrales.png?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >

				</div>


				</div>
			</div>
		</div>
	</div>
	
	
</div>
<!-- END FORM--> 


<!-- BEGIN PIE CHART PORTLET-->
				
				<!-- END PIE CHART PORTLET-->