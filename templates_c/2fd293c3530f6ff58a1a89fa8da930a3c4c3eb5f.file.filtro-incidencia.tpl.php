<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:21
         compiled from "C:/wamp/www/ceva/templates/forms/filtro-incidencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31999556a3bddba7089-51486657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fd293c3530f6ff58a1a89fa8da930a3c4c3eb5f' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/filtro-incidencia.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '31999556a3bddba7089-51486657',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	<div class="span1 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Vaca</label>
			<div class="controls">
						<input type="text" name="vacaF" id="vacaF" class="m-wrap span12" placeholder="Vaca"/>

			</div>
		</div>
	</div>
	<div class="span1">
		<div class="control-group">
			<label class="control-label" for="firstName">Mastitis</label>
			<div class="controls">
				
				<select class="span12" name="tipoMastitisIdF" id="tipoMastitisIdF">
					<option value="">Todos</option>                                
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listTipoMastitis')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tipoMastitisId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
					<?php }} ?>
				</select>
			</div>
		</div>
	</div>
	<div class="span1 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Cuarto</label>
			<div class="controls">
					
				<select class="span12" name="cuartoF" id="cuartoF">
					<option value="">Todos</option>                                
					<option value="1">1</option>                                
					<option value="2">2</option>                                
					<option value="3">3</option>                                
					<option value="4">4</option>                                
					
				</select>

			</div>
		</div>
	</div>
	
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha de ingreso (desde)</label>
			<div class="controls">
						<input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaIngresoInicio'];?>
" name="fechaIngresoInicioF" id="fechaIngresoInicioF" class="m-wrap span12" onmousemove="Calendario('fechaIngresoInicioF')" />

			</div>
		</div>
	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha de ingreso (hasta)</label>
			<div class="controls">
						<input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaIngresoFin'];?>
" name="fechaIngresoFinF" id="fechaIngresoFinF" class="m-wrap span12" onmousemove="Calendario('fechaIngresoFinF')" />

			</div>
		</div>
	</div>
	
	<div class="span2">
		<div class="control-group">
			<label class="control-label" for="firstName">Diagnostico</label>
			<div class="controls">

				<select class="span12" name="diagnosticoF" id="diagnosticoF">
					<option value="">Todos</option>                                
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listDiagnostico')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option value="<?php echo $_smarty_tpl->getVariable('item')->value['diagnosticoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
					<?php }} ?>
				</select>
				
			</div>
		</div>
	</div>
	
	<div class="span1">
		<div class="control-group">
			<label class="control-label" for="firstName">Reincidencia</label>
			<div class="controls">
				
				<select class="span12" name="reincidenciaF" id="reincidenciaF">
					<option value="">Todos</option>                                
					<option value="si"> Si</option>
					<option value="no"> No</option>
				</select>
			</div>
		</div>
	</div>

	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search(0)">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span3 ">
		
	</div>
	<div class="span3">
		<div class="control-group">
			<label class="control-label" for="firstName">Mes</label>
			<div class="controls">
				
				<select class="span12" name="mesF" id="mesF">
					<option value="">Todos</option>                                
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listMes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option <?php if ($_smarty_tpl->getVariable('info')->value['mes']==$_smarty_tpl->getVariable('item')->value['mes']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['mes'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
					<?php }} ?>
				</select>
			</div>
		</div>
	</div>
	<div class="span3 ">
		<div class="control-group">
			<label class="control-label" for="firstName">A&ntilde;o</label>
			<div class="controls">
				
				<select class="span12" name="anioF" id="anioF">
					<option value="">Todos</option>                                
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listAnio')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option <?php if ($_smarty_tpl->getVariable('info')->value['anio']==$_smarty_tpl->getVariable('item')->value['anio']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['anio'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['anio'];?>
</option>
					<?php }} ?>
				</select>
			</div>
		</div>
	</div>
	
	<div class="span3 ">
		
	</div>
	
</div>

<hr class="clearfix" />

</form>
