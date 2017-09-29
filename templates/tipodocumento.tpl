<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
               Tipo de Documento
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
		<!-- BEGIN TAB PORTLET-->   
<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			<li><a href="#portlet_tab2_3" data-toggle="tab">Asignar Campos</a></li>
			<li><a href="#portlet_tab2_2" data-toggle="tab">Crear Campo</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Tipo de Documento</a></li>			
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
				<div class="portlet-title">
				
				<div class="actions">            
				<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
				<i class="icon-plus"></i> Agregar
				</a>
				</div>
				</div>
				<div class="portlet-body" id="tblContent1">
				{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
				</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				 <div class="portlet-title">
					<div class="caption"></div>
					<div class="actions">            
						<a onclick="AddRegC()"class="btn green" >
							<i class="icon-plus"></i> Agregar Campo
						</a>
					</div>
				</div>
				<div class="portlet-body" id="tblContent2">
					{include file="{$DOC_ROOT}/templates/lists/campo.tpl"}
				</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_3">
				 <div class="portlet box purple">
					<div class="portlet-title">
						<div class="caption"></div>
						<div class="actions">            
						</div>
					</div>
					<div class="portlet-body" id="tblContent3">
						{include file="{$DOC_ROOT}/templates/lists/asignar-campo.tpl"}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>   
</div>