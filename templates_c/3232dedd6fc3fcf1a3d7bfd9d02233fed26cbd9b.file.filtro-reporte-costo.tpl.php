<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:46
         compiled from "C:/wamp/www/ceva/templates/forms/filtro-reporte-costo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12172556a3bf69a27c5-33526763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3232dedd6fc3fcf1a3d7bfd9d02233fed26cbd9b' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/filtro-reporte-costo.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '12172556a3bf69a27c5-33526763',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">

	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha desde</label>
			<div class="controls">
						<input type="text" name="fechaInicioF" id="fechaInicioF" class="m-wrap span12" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaInicioF'];?>
" onmousemove="Calendario('fechaInicioF')" />

			</div>
		</div>
	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Fecha hasta</label>
			<div class="controls">
						<input type="text" name="fechaFinF" id="fechaFinF" class="m-wrap span12" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaFinF'];?>
" onmousemove="Calendario('fechaFinF')" />

			</div>
		</div>
	</div>
	
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Diagnostico</label>
			<div class="controls">
				<select class="span12 chosen"   name="diagnosticoIdF" id="diagnosticoIdF" >
					<option value="">Todo</option>
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
	
	<div class="span4 ">
	
	
	

	</div>
	<div class="span2 ">
		<div class="control-group">
			<label class="control-label" for="firstName">&nbsp;</label>
			<div class="controls">

			<button type="button" class="btn blue" onclick="Search()">Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
									
			</div>
		</div>
	</div>
</div>

<hr class="clearfix" />

</form>
