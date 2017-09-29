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
		{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
	</div>
			
</div>