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
					{foreach from=$lstPlatillo item=item key=key} 
						<option value="{$item.tipoplatilloId}">{$item.nombre}</option>
					{/foreach}
			</select>
			<b>Cantidad de Ingredientes</b>
			<input type="type" name="fltNumero" >
	</form> 
	
	<button class="btn yellow" onclick="buscar()">Buscar</button>
	<br>
	<br>
	<div class="portlet-body" id="tblContent">
		{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
	</div>
			
</div>