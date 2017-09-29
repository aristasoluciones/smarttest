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
			<a href="javascript:void(0)" class="btn green" onclick="AddIngrediente()">
				<i class="icon-plus"></i> Agregar Ingrediente
			</a>
			<a href="javascript:void(0)" class="btn blue" onclick="savePlatillook()">
				<i class="icon-plus"></i> Guardar Platillo
			</a>
		 
		</div>
	</div>
	
	<form id="frmGral">
	 <b>Minino</b> <input type="text" name="minimo" id="minimo" value="{$info.minimo}">
	 <input type="hidden" name="platilloId" id="platilloId" value="{$info.platilloId}">
	<div class="portlet-body" id="tblContent">
		 {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
	</div>
	</form>	
</div>