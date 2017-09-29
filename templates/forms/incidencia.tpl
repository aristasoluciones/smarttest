<div class="row-fluid">
																			
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>{if !$info.view}Ingrese los {/if}Datos</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
				
			
				
				
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Numero de Vaca:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="numVaca" value="{$info.numVaca}" onkeypress="return soloNumeros(event)" maxlength="10" />
                            {else}
                            	{$info.numVaca}
                            {/if}
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label">Reincidencia:</label>
                        <div class="controls">
						
					
						
						
                        	{if !$info.view}
								<label class="radio line">
								<input type="radio" name="reincidencia" value="si" />
								Si
								</label>
								<label class="radio line">
								<input type="radio" name="reincidencia" value="no" checked />
								No
								</label> 
                             {else}
                            	{$info.reincidencia}
                            {/if}
                        </div>
                    </div>
					
					
					
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Lactancia:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="lactancia"  value="{$info.lactancia}" onkeypress="return soloNumeros(event)" maxlength="10"/>
                             {else}
                            	{$info.lactancia}
                            {/if}
                        </div>
                    </div> 
					

                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Corral:</label>
                        <div class="controls">
                        	{if !$info.view}
							  <select class="span12 chosen" data-placeholder="Seleccione corral..."  name="corral" id="corral" tabindex="1">
									<option value=""></option>
								{foreach from=$listCorral item=item key=key}
									<option value="{$item.numeroCorral}">Corral {$item.numeroCorral}</option>
								{/foreach}
								</select>
                            {else}
                            	{$info.corral}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Bacteriologia:</label>
                        <div class="controls">
                        	{if !$info.view}
							  <select class="span6 chosen" data-placeholder="Seleccione bacteriologia..."  name="aislamientoBacId" id="aislamientoBacId" tabindex="1">
									<option value=""></option>
								{foreach from=$listaAislamientoBac item=item key=key}
									<option value="{$item.aislamientoBacId}">{$item.nombre}</option>
								{/foreach}
								</select>
                            {else}
                            	{$info.nombreAislamientoBacteriologico}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> DEL</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="del" value="{$info.del}" maxlength="10">
                            {else}
                            	{$info.del}
                            {/if}
                        </div>
                    </div>

					<div class="control-group">
						<label class="control-label"><span class="reqIcon">*</span>Cuarto</label>
						<div class="controls">
							<div class="row-fluid">
				
								
							{if !$info.view}
                            <input type="text" class="m-wrap span12" name="del" value="{$info.del}" maxlength="10">
                            {else}
                            	{foreach from=$infoCuartos item=item key=key}
								
									{if $item.marcado eq 'si'}
										{$item.nombre} [X]
									{else}
											{$item.nombre}
									{/if}
									<br>
								{/foreach}
                            {/if}

								
						
							</div>
						</div>
					</div>
					

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Produccion de Leche</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="produccionLeche" value="{$info.produccionLeche}" maxlength="255">
                            {else}
                            	{$info.produccionLeche}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Tipo de Mastitis:</label>
                        <div class="controls">
                        	{if !$info.view}
							  <select class="span12 chosen" data-placeholder="Selecciona tipo de mastitis..."  name="tipoMastitisId" id="tipoMastitisId" tabindex="1">
								<option value=""></option>
									{foreach from=$listTipoMastitis item=item key=key}
										<option value="{$item.tipoMastitisId}">{$item.nombre}</option>
									{/foreach}
								</select>
                            {else}
                            	{$info.nombreMastitis}
                            {/if}
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha de Ingreso</label>
                        <div class="controls">
                        	{if !$info.view}
							<div class="input-icon left">
								<i class="icon-calendar"></i>
								<input type="text" class="m-wrap span12"  readonly name="fechaIngreso" id="fechaIngreso" value="{$info.fechaIngreso}" onmousemove="Calendario('fechaIngreso')">
                            </div>
							{else}
                            	{$info.fechaIngreso}
                            {/if}
                        </div>
                    </div>
										
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Tratamiento:</label>
                        <div class="controls">
                        	{if !$info.view}
							  <select class="span12 chosen" data-placeholder="Seleccione tratamiento"  name="tratamientoId" id="tratamientoId" tabindex="1">
									<option value=""></option>
									{foreach from=$listTratamiento item=item key=key}
										<option value="{$item.tratamientoId}">{$item.numTratamiento}::{$item.nombre}</option>
									{/foreach}
								</select>
                            {else}
                            	{$info.numTratamiento}::{$info.nombreTratamiento}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Dias de tratamiento</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="number" class="m-wrap span12" name="diaTratamiento" value="{$info.diaTratamiento}" maxlength="10" onkeypress="return soloDigito(event)">
                            {else}
                            	{$info.diaTratamiento}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha de Tratamiento</label>
                        <div class="controls">
                        	{if !$info.view}
							<div class="input-icon left">
								<i class="icon-calendar"></i>
									<input type="text" class="m-wrap span12" name="fechaTratamiento" id="fechaTratamiento" value="{$info.fechaTratamiento}" onmousemove="Calendario('fechaTratamiento')" >
                            </div>
							{else}
                            	{$info.fechaTratamiento}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Prueba:</label>
                        <div class="controls">
                        	{if !$info.view}
							  <select class="span12 chosen" data-placeholder="Seleccione prueba"  name="pruebaId" id="pruebaId" onchange="Resultado(this.value)" tabindex="">
									<option value=""></option>
									{foreach from=$listPrueba item=item key=key}
										<option value="{$item.pruebaId}">{$item.nombre}</option>
									{/foreach}
								</select>
                            {else}
                            	{$info.nombrePrueba}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Resultado de la prueba:</label>
                        <div class="controls">
                        	{if !$info.view}
								<div id="resultadoDiagnostico">
								{include file="{$DOC_ROOT}/templates/boxes/resultadoDiagnostico.tpl"}
								</div>
                            {else}
                            	{$info.nombreResultado}
                            {/if}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Diagnostico :</label>
                        <div class="controls">
                        	{if !$info.view}
							  <select class="span12 chosen" data-placeholder="Seleccione diagnostico"  name="diagnosticoId" id="diagnosticoId"  tabindex="">
									<option value=""></option>
									{foreach from=$listDiagnostico item=item key=key}
										<option value="{$item.diagnosticoId}">{$item.nombre}</option>
									{/foreach}
								</select>
                            {else}
                            	{$info.nombreDiagnostico}
                            {/if}
                        </div>
                    </div>
					
					
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Observaciones </label>
                        <div class="controls">
                        	{if !$info.view}
							<textarea class="span12 m-wrap" rows="3" id="observacion" name="observacion" value="{$info.observacion}" ></textarea>
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

</div>