<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:37:59
         compiled from "C:/wamp/www/ceva/templates/forms/filtro-tratamiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31302556a3bc7956ed7-31325082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d41f33448b32f5ecf8be34008d5795b7e507d9' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/filtro-tratamiento.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '31302556a3bc7956ed7-31325082',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmSearch" id="frmSearch" action="#" class="form-search" method="post">
<div class="row-fluid">
	<div class="span3 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Numero</label>
			<div class="controls">
						<input type="text" name="numeroF" id="numeroF" class="m-wrap span12" placeholder="Numero"/>

			</div>
		</div>
	</div>
	<div class="span3 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Nombre</label>
			<div class="controls">
						<input type="text" name="nombreF" id="nombreF" class="m-wrap span12" placeholder="Nombre"/>

			</div>
		</div>
	</div>
	<div class="span3 ">
		<div class="control-group">
			<label class="control-label" for="firstName">Producto</label>
			<div class="controls">
						<input type="text" name="productoF" id="productoF" class="m-wrap span12" placeholder="Producto"/>

			</div>
		</div>
	</div>

	<div class="span3 ">
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
