<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box gray"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Campos Asignados</div>                
            </div>
            <div class="portlet-body form">
              
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
	
<table class="table table-striped table-bordered table-hover" id="sample_3">
	<tr>
		<th>Nombre dentro de la Base de Datos</th>
		<th>visualización de datos para el usuario</th>
	</tr>
    {foreach from=$lst item=item key=key}  
	<tr>
		<td>{$item.nombreCampo}</td>
		<td>{$item.nombreView}</td>
	</tr>
	{/foreach}
    </table>
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
	<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
   
</div>
    
</div>