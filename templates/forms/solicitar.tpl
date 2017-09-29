<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Solicitar</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$id}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Comentario:</label>
                        <div class="controls">
                        	{if !$info.view}
							<textarea name="comentario" id="comentario"></textarea>
                            {else}
                            	{$info.documento}
                            {/if}
                        </div>
						
                    </div>
					
                      
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    {if !$info.view}
    <button class="btn yellow" onclick="SaveSolicitud()">{if $info.idReg}Actualizar{else}Guardar{/if}</button>
    {/if}
</div>