<?php /* Smarty version Smarty3-b7, created on 2017-02-09 14:36:56
         compiled from "C:/wamp/www/le/templates/ingrediente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12937589cd2e8280a50-89086683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28dda31dd91604d4c15a3cf85cdb5d89dbbdd1c0' => 
    array (
      0 => 'C:/wamp/www/le/templates/ingrediente.tpl',
      1 => 1486672511,
    ),
  ),
  'nocache_hash' => '12937589cd2e8280a50-89086683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                Ingrediente
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
			<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
				<i class="icon-plus"></i> Agregar
			</a>
		 
		</div>
	</div>
	<b>Ingrediente</b>
	<form id="frmFiltro">
	<input type="type" name="fltNombre" onKeyup="buscar()" onKeyPress="buscar()">
	</form> <button class="btn yellow" onclick="buscar()">Buscar</button>
	<br>
	<br>
	<div class="portlet-body" id="tblContent">
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	</div>
			
</div>