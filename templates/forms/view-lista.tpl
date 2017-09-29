<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i></div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
                   
				   <table class="table table-striped table-bordered table-hover" id="sample_3">
						<tr>
							<td>Consecutivo</td>
							<td>Folio</td>
							<td>Cliente</td>
							<td>Acciones</td>
							<td>Editar</td>
						</tr>					
						{foreach from=$lst item=item key=key} 
						<tr>
							<td>{$key+1}</td>
							<td>{$item.listaId}</td>
							<td>{if $item.nombre eq ""} {$item.clienteNuevo} {else} {$item.nombre} {/if}</td>
							<td>
								<a href="javascript:void(0)" onClick="imprimeLista1({$item.listaId})"   style="background:#2E9AFE; color:white" style="width:100px">
									Imprimir Lista
								</a><br>
								<a href="javascript:void(0)" onClick="imprimeLista2({$item.listaId})"   style="background:#B43104; color:white" style="width:100px">
									Imprimir Lista Compras
								</a>
							</td>
							<td>
								<a  href="{$WEB_ROOT}/add-list/q/{$item.listaId}" title="Editar">
									<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
								</a>
							</td>
						</tr>
						{/foreach}
				   </table>
				   
				   
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>