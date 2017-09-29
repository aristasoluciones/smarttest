<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:32
         compiled from "C:/wamp/www/ceva/templates/forms/filtro-tratamiento-animal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17956556a3be8f12d88-84728011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd026d2524eec6a8c97186f58f0303fe8b2c828a5' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/filtro-tratamiento-animal.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '17956556a3be8f12d88-84728011',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	
	
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha</label>
			<div class="controls">
						<input type="text" name="fechaF" id="fecha" value="<?php echo $_smarty_tpl->getVariable('info')->value['fecha'];?>
" class="m-wrap span12" onmousemove="Calendario('fecha')" />

			</div>
		</div>
	</div>
	<div class="span2">
		<div class="control-group">
			<label class="control-label" for="firstName">Estado</label>
			<div class="controls">
					
				<select class="span12" name="estadoF" id="estadoF">
					<option value="">Todos</option>                                
					<option value="1"> En tratamiento</option>                                
					<option value="D">En descarte</option>                                
					<option value="O">En observacion</option>                                                   
					
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
	
	<div class="span2">
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
