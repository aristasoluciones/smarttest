<?php /* Smarty version Smarty3-b7, created on 2017-02-23 15:11:06
         compiled from "C:/wamp/www/le/templates/platillo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1071458af4fea085357-05484989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb4183ec69752e805e6fbb6c5c3dd8443ee9298' => 
    array (
      0 => 'C:/wamp/www/le/templates/platillo.tpl',
      1 => 1487884255,
    ),
  ),
  'nocache_hash' => '1071458af4fea085357-05484989',
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
                Platillo
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
	
		<form id="frmFiltro">
			<b>Platillo</b>
			<input type="type" name="fltNombre" onKeyup="buscar()" onKeyPress="buscar()">
			<b>tipo de Platillo</b>
			<select name="flttipoplatilloId" onchange="buscar()">
					<option></option>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstPlatillo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
						<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tipoplatilloId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
					<?php }} ?>
			</select>
			<b>Cantidad de Ingredientes</b>
			<input type="type" name="fltNumero" >
	</form> 
	
	<button class="btn yellow" onclick="buscar()">Buscar</button>
	<br>
	<br>
	<div class="portlet-body" id="tblContent">
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	</div>
			
</div>