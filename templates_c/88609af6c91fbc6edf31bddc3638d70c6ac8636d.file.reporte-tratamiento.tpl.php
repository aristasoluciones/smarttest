<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:50
         compiled from "C:/wamp/www/ceva/templates/lists/reporte-tratamiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19281556a3bfa96c545-95050131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88609af6c91fbc6edf31bddc3638d70c6ac8636d' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/reporte-tratamiento.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '19281556a3bfa96c545-95050131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_string_format')) include 'C:\wamp\www\ceva\libs\plugins\modifier.string_format.php';
if (!is_callable('smarty_modifier_default')) include 'C:\wamp\www\ceva\libs\plugins\modifier.default.php';
?><h3 class="form-section">Protocolo de Tratamiento</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Vacas</th>
					<th class="">Porcentaje</th>
					<th class="">Total de dias de enfermeria</th>
					<th class="">Dias de tratamiento</th>
					<th class="">dia de descarte</th>
					<th class="">dia de evaluacion</th>
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
					<td class=""><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje'],"%.2f");?>
 %</td>
					<td class=""><?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['totalDiasEnfermeria'],0);?>
</td>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['diaEnfermeria'];?>
</td>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['diaDescarte'];?>
</td>
					<td class=""><?php echo $_smarty_tpl->getVariable('item')->value['diaEvaluacion'];?>
</td>
					
				</tr>
				 <?php }} else { ?>
				<tr class="odd gradeX">
					<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
						
				<?php } ?>
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalIncidencia'];?>
</span></td>
					<td><span class="text bold"><?php echo smarty_modifier_string_format($_smarty_tpl->getVariable('registros')->value['array_totales']['porcentaje'],"%.2f");?>
 %</span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalDiaEnfermeria'];?>
</span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['diaEnfermeria'];?>
</span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['diaDescarte'];?>
</span> </td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['diaEvaluacion'];?>
</span> </td>
				</tr>
			</tfoot>
		
		</table>
		
<h3 class="form-section">Eficiancia</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Tipo de mastitis</th>
					<th class="">Vacas</th>
					<th class="">porcentaje</th>
					<th class="">Dias de tratamiento</th>
					<th class="">Dias promedio por protocolo por vaca</th>
					<th class="">Vacas curadas con el protocolo</th>
					<th class="">Porcentaje curadas</th>
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
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['mastitis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo $_smarty_tpl->getVariable('item2')->value['nombre'];?>
 <br>
						<?php }} ?>
						
						
					</td>
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['mastitis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo smarty_modifier_default($_smarty_tpl->getVariable('item2')->value['totalVaca'],0);?>
 <br>
						<?php }} ?>
						
						
					
					</td>
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['mastitis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php if ($_smarty_tpl->getVariable('item')->value['totalporcentaje']!='0'){?>
								<?php echo smarty_modifier_string_format((($_smarty_tpl->getVariable('item2')->value['totalVaca']*100)/$_smarty_tpl->getVariable('item')->value['totalporcentaje']),"%.2f");?>
 %<br>
							<?php }?>
						<?php }} ?>
					</td>
					
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['mastitis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php echo smarty_modifier_default($_smarty_tpl->getVariable('item2')->value['diaTratamiento'],0);?>
 <br>
						<?php }} ?>
					
					</td>
					<td class="">
						<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['mastitis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
							<?php if ($_smarty_tpl->getVariable('item2')->value['totalVaca']!='0'){?>
								<?php echo smarty_modifier_string_format((($_smarty_tpl->getVariable('item2')->value['diaTratamiento'])/$_smarty_tpl->getVariable('item2')->value['totalVaca']),"%.2f");?>
 <br>
							<?php }else{ ?>
							<br>
							<?php }?>
						<?php }} ?>
					</td>
					
					<td class="">
						<?php echo smarty_modifier_default($_smarty_tpl->getVariable('item')->value['curadasProtocolo'],0);?>

					
					</td>
					
					<td class="">
						<?php echo smarty_modifier_default(smarty_modifier_string_format($_smarty_tpl->getVariable('item')->value['porcentaje_curadasProtocolo'],"%.2f"),0);?>
 %
					</td>
				</tr>
				 <?php }} else { ?>
				<tr class="odd gradeX">
					<td colspan="8"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				<?php } ?>
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['totalVaca'];?>
</span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"><?php echo $_smarty_tpl->getVariable('registros')->value['array_totales']['diaTratamiento'];?>
</span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
				</tr>
			</tfoot>
		
		</table>
		

<div class="row-fluid">
		
		<div class="span3 "></div>
		<div class="span6 ">
			<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/curada_protocolo.jpg?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >
		</div>
		<div class="span3 "></div>
</div>

<div class="row-fluid">
		
		<div class="span3 "></div>
		<div class="span6 ">
			<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/grafica/usado_protocolo.jpg?<?php echo rand(2,200);?>
" alt="Smiley face" class="span12" >
		</div>
		<div class="span3 "></div>
</div>



