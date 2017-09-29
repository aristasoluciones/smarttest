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
                            <input type="text" class="m-wrap span12" name="nombre" id="nombre" required="required" value="{$info.nombre}"  maxlength="255" />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Numero de tratamiento</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" onkeypress="return soloDigito(event)" class="m-wrap span12" name="numTratamiento" required="required" value="{$info.numTratamiento}" maxlength="10"> 
                             {else}
                            	{$info.numTratamiento}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Producto:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="producto" id="producto" required="required" value="" onKeyDown="CompleteProduct()" placeholder="Agregar Producto" maxlength="255" />
                            {else}
                            	{$info.producto}
                            {/if}
                        </div>
                    </div>
					
					<div id="enumerarProducto">
					 {include file="{$DOC_ROOT}/templates/lists/enumerarProducto.tpl"}
					</div>

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Dias de descarte:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" onkeypress="return soloNumeros(event)"  class="m-wrap span12" name="diaDescarte" required="required"  value="{$info.diaDescarte}" maxlength="10"/>
                             {else}
                            	{$info.diaDescarte}
                            {/if}
                        </div>
                    </div> 
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Observaciones:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="observacion" required="required"  value="{$info.observacion}" maxlength="255"/>
                             {else}
                            	{$info.observacion}
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