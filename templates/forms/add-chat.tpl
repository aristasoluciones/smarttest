<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Nuevo Mensaje</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> para:</label>
                        <div class="controls">
							<select name="usuarioId">
							<option></option>
							{foreach from=$lstUsuarios item=item key=key}
								<optgroup label="{$item.nombre}">
									{foreach from=$item.usuarios item=item2 key=key}
										<option value="{$item2.usuarioId}">{$item2.nombre} {$item2.apaterno} {$item2.amaterno}</option>					
									{/foreach}
								</optgroup>
							{/foreach}
							
							</select>
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Mensaje:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <textarea name="mensaje" style="width:800px; height:100px"></textarea>
                            {else}
                            	{$info.descripcion}
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
	<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    {if !$info.view}
    <button class="btn yellow" onclick="SaveReg()">{if $info.idReg}Actualizar{else}Enviar{/if}</button>
    {/if}
</div>
    
</div>