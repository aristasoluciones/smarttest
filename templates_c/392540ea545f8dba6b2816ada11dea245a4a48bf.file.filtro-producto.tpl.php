<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:37:52
         compiled from "C:/wamp/www/ceva/templates/forms/filtro-producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21148556a3bc0ba7fc1-64992333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392540ea545f8dba6b2816ada11dea245a4a48bf' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/filtro-producto.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '21148556a3bc0ba7fc1-64992333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	<div class="span4 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Nombre</label>
			<div class="controls">
						<input type="text" name="nombreF" id="nombreF" class="m-wrap span12" placeholder="Nombre"/>

			</div>
		</div>
	</div>

	<div class="span4">
		<div class="control-group">
			<label class="control-label" for="firstName">Via de administracion</label>
			<div class="controls">
				
				<select class="span12" name="vAdministracionF" id="vAdministracionF">
					<option value="">Todos</option>                                
					<option value="Inyectable"> Inyectable</option>
					<option value="Intramamario"> Intramamario</option>
				</select>
			</div>
		</div>
	</div>
	<div class="span4 ">
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
