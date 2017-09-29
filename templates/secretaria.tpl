<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                <!--Dependencia-->
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
			<li><a href="#portlet_tab2_2" data-toggle="tab">Direcciones</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Secretaria</a></li>			
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
				<div class="portlet-title">
				<div class="caption"><i class="icon-cogs"></i>Secretaria</div>
				<div class="actions">            
				<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
				<i class="icon-plus"></i> Agregar
				</a>
				<!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
				</div>
				</div>
				<div class="portlet-body" id="tblContent">
				{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
				</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				<div class="portlet-title">
				<div class="caption"><i class="icon-cogs"></i>Direccion</div>
				<div class="actions">            
				<a href="javascript:void(0)" class="btn green" onclick="AddRegDep()">
				<i class="icon-plus"></i> Agregar
				</a>
				<!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
				</div>
				</div>
				<div class="portlet-body" id="tblContent2">
				{include file="{$DOC_ROOT}/templates/lists/dependencia.tpl"}
				</div>
			</div>
		
		</div>

	
	
	
	
	
        
    </div>
    </div>
    </div>
