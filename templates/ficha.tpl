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
<input type="hidden" name="clientefichaId" id="clientefichaId" value="{$info.info.clienteId}">
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
					{include file="{$DOC_ROOT}/templates/lists/ficha.tpl"}
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
						{include file="{$DOC_ROOT}/templates/lists/claves.tpl"}
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
						{include file="{$DOC_ROOT}/templates/lists/venta.tpl"}
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
						{include file="{$DOC_ROOT}/templates/lists/tarea.tpl"}
					</div>
			</div>

		</div>
	</div>
	</div>
	</div>  
	<!--termina tab-->
	</div>		
</div>