<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>{if !$info.view}Ingrese los {/if}Datos</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="nombre" value="{$info.nombre}" maxlength="60" />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
						
						<label class="control-label"><span class="reqIcon">*</span> Tipo:</label>
                        <div class="controls">
                        
								<select name="tipoId" id="tipoId">
									<option></option>
									{foreach from=$lsttipo item=item key=key}  
									<option value="{$item.tipoplatilloId}" {if $item.tipoplatilloId eq $info.tipoId} selected {/if}>{$item.nombre}</option>
									{/foreach}
								</select>
                           
                        </div>
                    </div>
					
									
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
   
    
</div>