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
                            <input type="text" class="m-wrap span12" name="nombre" required="required" value="{$info.nombre}" maxlength="255" />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Presentacion (ml)</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" class="m-wrap span12" onkeypress="return soloNumeros(event)" name="presentacion" required="required" value="{$info.presentacion}" maxlength="6"> 
                             {else}
                            	{$info.presentacion}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Costo:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" class="m-wrap span12" onkeypress="return soloNumeros(event)" name="costo" required="required"  value="{$info.costo}" maxlength="10"/>
                             {else}
                            	${$info.costo|number_format:2:'.':','}
                            {/if}
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Via de administracion:</label>
                        <div class="controls">
                        	{if !$info.view}
							<select class="span12" id="vAdministracion" name="vAdministracion">
								<option  value="">Seleccione una opcion</option>
								<option {if $info.vAdministracion eq 'Inyectable'} selected {/if} value="Inyectable">Inyectable</option>
								<option {if $info.vAdministracion eq 'Intramamario'} selected {/if} value="Intramamario">Intramamario</option>
							   
							</select>	
                           
                            {else}
                            	{$info.vAdministracion}
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