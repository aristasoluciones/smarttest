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
                            <input type="text" class="m-wrap span12" name="nombre" value="{$info.nombre}" maxlength="150" />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Direccion:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="direccion" value="{$info.direccion}" maxlength="150" />
                            {else}
                            	{$info.direccion}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tel&eacute;fono:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="telefono" value="{$info.telefono}" maxlength="15"> 
                             {else}
                            	{$info.telefono}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Contacto:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="contacto"  value="{$info.contacto}" maxlength="60"/>
                             {else}
                            	{$info.contacto}
                            {/if}
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Responsable:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="responsable" value="{$info.responsable}" maxlength="150" />
                            {else}
                            	{$info.responsable}
                            {/if}
                        </div>
                    </div>

				{*	<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>  Litros por vaca diarios (promedio):</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="litroVaca" value="{$info.litroVaca}" onkeypress="return soloNumeros(event)" maxlength="3" />
                            {else}
                            	{$info.litroVaca}
                            {/if}
                        </div>
                    </div> *}
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Costo 1 litro Leche :</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="costoLitro" value="{$info.costoLitro}" onkeypress="return soloNumeros(event)" maxlength="5" />
                            {else}
                            	${$info.costoLitro|number_format:2:'.':','}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Cantidad de Corrales:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" class="m-wrap span12" name="cantidadCorral" value="{$info.cantidadCorral}" onkeypress="return soloNumeros(event)" maxlength="2" />
                            {else}
                            	{$info.cantidadCorral}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Dias para reincidencia automatica:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" class="m-wrap span12" name="reincidenciaAutomatico" value="{$info.reincidenciaAutomatico}" onkeypress="return soloDigito(event)" maxlength="3" />
                            {else}
                            	{$info.reincidenciaAutomatico}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Vacas Hato:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" class="m-wrap span12" name="ordenaMes" value="{$info.ordenaMes}" onkeypress="return soloDigito(event)" maxlength="5" />
                            {else}
                            	{$info.ordenaMes}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha Expiracion:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="fechaExpiracion" id="fechaExpiracion" value="{$info.fechaExpiracion}" onmousemove="Calendario('fechaExpiracion')" />
                            {else}
                            	{$info.fechaExpiracion}
                            {/if}
                        </div>
                    </div>
                    
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Comentarios</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="comentario" value="{$info.comentario}" maxlength="255">
                            {else}
                            	{$info.comentario}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Activo:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="checkbox" name="activo" value="1" {if $info.activo == "1"}checked{/if} />
                             {else}
                            	{if $info.activo == 1}S&iacute;{else}No{/if}
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