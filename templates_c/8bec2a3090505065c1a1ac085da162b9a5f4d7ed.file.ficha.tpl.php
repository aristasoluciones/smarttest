<?php /* Smarty version Smarty3-b7, created on 2017-02-23 23:33:54
         compiled from "C:/wamp/www/aristax/templates/ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406558afc5c277bc60-14088342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bec2a3090505065c1a1ac085da162b9a5f4d7ed' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/ficha.tpl',
      1 => 1487914383,
    ),
  ),
  'nocache_hash' => '406558afc5c277bc60-14088342',
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
                Ficha Tecnica
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<!--<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
			<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
				<i class="icon-plus"></i> Agregar
			</a>
		 
		</div>-->
	</div>
<input type="hidden" name="clientefichaId" id="clientefichaId" value="<?php echo $_smarty_tpl->getVariable('info')->value['info']['clienteId'];?>
">
<div class="portlet-body" id="tblContent">
			<!--inicia tab-->
<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			
						

			<li class=""><a href="#portlet_tab2_5" data-toggle="tab">Tareas</a></li>
			<li class=""><a href="#portlet_tab2_4" data-toggle="tab">Archivos</a></li>	
			<li class=""><a href="#portlet_tab2_3" data-toggle="tab">Contratos</a></li>
			<li ><a href="#portlet_tab2_2" data-toggle="tab">Claves de Acceso</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Ficha Tecnica</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12">           
							<h3 class="page-title">
							</h3>
						</div>
					</div>
					<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
					</div>
					<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/ficha.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>	
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				 <div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">           
								<h3 class="page-title">
								</h3>
							</div>
						</div>
						<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						</div>
						<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/claves.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>
			</div>
			
			<div class="tab-pane" id="portlet_tab2_3">
				 <div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">           
								<h3 class="page-title">
								</h3>
							</div>
						</div>
						<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						</div>
						<div id="div_venta">
						<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/venta.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

						</div>
					</div>
			</div>
			
			<div class="tab-pane" id="portlet_tab2_4">
				 <div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">           
								<h3 class="page-title">
								</h3>
							</div>
						</div>
						<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						</div>
						
					</div>
			</div>
			
			<div class="tab-pane" id="portlet_tab2_5">
				 <div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">           
								<h3 class="page-title">
								</h3>
							</div>
						</div>
						<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						</div>
						<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/tarea.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>
			</div>

		</div>
	</div>
	</div>
	</div>  
	<!--termina tab-->
	</div>		
</div>