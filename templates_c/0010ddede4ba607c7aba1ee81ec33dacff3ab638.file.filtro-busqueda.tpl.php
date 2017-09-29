<?php /* Smarty version Smarty3-b7, created on 2016-06-08 20:09:23
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/filtro-busqueda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84295758c1c3b4b359-29804925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0010ddede4ba607c7aba1ee81ec33dacff3ab638' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/filtro-busqueda.tpl',
      1 => 1465434561,
    ),
  ),
  'nocache_hash' => '84295758c1c3b4b359-29804925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	<div class="span1 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Usuario</label>
			<div class="controls">
				
			</div>
		</div>
	</div>
	<div class="span1">
		<div class="control-group">
			<label class="control-label" for="firstName">direccion</label>
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
			<label class="control-label" for="firstName">Tipo de Documento</label>
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
			<label class="control-label" for="firstName">Rango de Fecha (desde)</label>
			<div class="controls">
						<input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaIngresoInicio'];?>
" name="fechaIngresoInicioF" id="fechaIngresoInicioF" class="m-wrap span12" onmousemove="Calendario('fechaIngresoInicioF')" />

			</div>
		</div>
	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha de Fecha (hasta)</label>
			<div class="controls">
						<input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaIngresoFin'];?>
" name="fechaIngresoFinF" id="fechaIngresoFinF" class="m-wrap span12" onmousemove="Calendario('fechaIngresoFinF')" />

			</div>
		</div>
	</div>
	
	<div class="span2">
		<div class="control-group">
			<label class="control-label" for="firstName">Busco Por</label>
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
	
	

	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search(0)">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>


<hr class="clearfix" />

</form>
