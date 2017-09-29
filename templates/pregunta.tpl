<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
			{$info.nombre}
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">
			<a  href="{$WEB_ROOT}/encuesta"  class="btn yellow" >
				<i class="icon-plus"></i> Atras
			</a>
			<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
				<i class="icon-plus"></i> Agregar
			</a>
		 
		</div>
	</div>
	<input type="hidden" name="encuestaId" id="encuestaId" value="{$encuestaId}">
	<div class="portlet-body" id="tblContent">
		{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
	</div>
			
</div>