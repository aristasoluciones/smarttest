<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>{if !$info.view}Ingrese los {/if}Datos</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" id="type" value="save" />
                <input type="hidden" name="clienteId" id="clienteId" value="{$clienteId}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre:</label>
                        <div class="controls">
                        	{if !$info.view}
                           
							<textarea name="tipo" >{$info.tipo}</textarea>
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Password:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <textarea name="password" >{$info.password}</textarea>
                            {else}
                            	{$info.direccion}
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
   
    
</div>