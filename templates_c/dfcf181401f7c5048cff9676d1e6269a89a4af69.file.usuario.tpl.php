<?php /* Smarty version Smarty3-b7, created on 2016-08-03 21:24:46
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1982457a2a76e8b5a20-63555298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcf181401f7c5048cff9676d1e6269a89a4af69' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/usuario.tpl',
      1 => 1470277483,
    ),
  ),
  'nocache_hash' => '1982457a2a76e8b5a20-63555298',
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
                Administrar Usuarios
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    

<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			<li><a href="#portlet_tab2_2" data-toggle="tab">Ciudadanos</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Funcionarios</a></li>			
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
						<div class="portlet box purple">
				<div class="portlet-title">
					<div class="caption"><i class="icon-cogs"></i></div>
					<div class="actions">            
						<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
							<i class="icon-plus"></i> Agregar
						</a>
					 
					</div>
				</div>
				<div class="portlet-body" id="tblContent">
					<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>
			</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				<div class="portlet-title">
				<div class="caption"></div>
				<div class="actions">            
				<a href="javascript:void(0)" class="btn green" onclick="AddRegCiudadano()">
				<i class="icon-plus"></i> Agregar
				</a>

				</div>
				</div>
				<div class="portlet-body" id="tblContent2">
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/ciudadano.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_3">
				 
			</div>
		</div>
	</div>
</div>
</div>   
</div>