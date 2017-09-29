<?php /* Smarty version Smarty3-b7, created on 2017-01-13 12:48:11
         compiled from "C:/wamp/www/le/templates/add-ing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29559587920eb9cb5f9-55124182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0922c4e1b6c0ae8e9bca5438f979f98d9080b379' => 
    array (
      0 => 'C:/wamp/www/le/templates/add-ing.tpl',
      1 => 1484333285,
    ),
  ),
  'nocache_hash' => '29559587920eb9cb5f9-55124182',
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
				<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

            </h3>
			
        </div>
	
    </div>
    <!-- END PAGE HEADER-->
    	
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
   
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
			<a href="javascript:void(0)" class="btn green" onclick="AddIngrediente()">
				<i class="icon-plus"></i> Agregar Ingrediente
			</a>
			<a href="javascript:void(0)" class="btn blue" onclick="savePlatillook()">
				<i class="icon-plus"></i> Guardar Platillo
			</a>
		 
		</div>
	</div>
	
	<form id="frmGral">
	 <b>Minino</b> <input type="text" name="minimo" id="minimo" value="<?php echo $_smarty_tpl->getVariable('info')->value['minimo'];?>
">
	 <input type="hidden" name="platilloId" id="platilloId" value="<?php echo $_smarty_tpl->getVariable('info')->value['platilloId'];?>
">
	<div class="portlet-body" id="tblContent">
		 <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	</div>
	</form>	
</div>