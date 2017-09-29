<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i></div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" id="type" value="SaveTarea" />
                <input type="hidden" name="ventaId" id="ventaId" value="{$ventaId}" />
                <input type="hidden" name="tipo" id="tipo" value="{$tipo}" />
                <input type="hidden" name="tareaId" id="tareaId" value="{$tareaId}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> descripcion:</label>
                        <div class="controls">
                        	{if !$info.view}
							<textarea name="descripcion" id="descripcion">{$info.descripcion}</textarea>
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
					{if $tipo eq "editar"}
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Estatus:</label>
                        <div class="controls">
                        	<select name="estatus">
								<option></option>
								<option value="abierto" {if $info.estatus eq "abierto"} selected {/if}>abierto</option>
								<option value="proceso" {if $info.estatus eq "proceso"} selected {/if}>proceso</option>
								<option value="cerrado" {if $info.estatus eq "cerrado"} selected {/if}>cerrado</option>
                        	</select>
                        </div>
                    </div>
					{/if}
				 
									
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
   
    
</div>