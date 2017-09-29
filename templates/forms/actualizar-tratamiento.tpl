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
				
			
					<h4>INFORMACION DE LA INCIDENCIA</h4>
	<hr class="clearfix" />	
				
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Numero de Vaca:</label>
                        <div class="controls">
                        	
                            	{$info.numVaca}
                     
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Corral:</label>
                        <div class="controls">
                            	{$info.corral}
                        </div>
                    </div>

					<div class="control-group">
						<label class="control-label"><span class="reqIcon">*</span>Cuarto</label>
						<div class="controls">
							<div class="row-fluid">
							{*
								{foreach from=$listCuarto item=item key=key}
								<label class="checkbox line">
									<input type="checkbox" id="cuarto" name="cuarto[]" value="{$item.cuartoId}" /> {$item.nombre}
									</label>
								{/foreach}
							*}
								
				
                            	{foreach from=$infoCuartos item=item key=key}
								
									{if $item.marcado eq 'si'}
										{$item.nombre} [X]
									{else}
											{$item.nombre}
									{/if}
									<br>
								{/foreach}
            
							</div>
						</div>
					</div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Tipo de Mastitis:</label>
                        <div class="controls">

                            	{$info.nombreMastitis}
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Diagnostico :</label>
                        <div class="controls">
       
                            	{$info.nombreDiagnostico}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Protocolo:</label>
                        <div class="controls">
                      
                            	Nombre: {$info.nombreTratamiento} <br> Num: {$info.numTratamiento}
                           
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Productos :</label>
                        <div class="controls">
							{foreach from=$info.productos item=item key=key}
                            	{$key + 1}) {$item.nombre} - {$item.cantidad} ml - {$item.vAdministracion} <br>
							{/foreach}
               
                        </div>
                    </div>
					
	<h4>DATOS PARA ACTUALIZAR</h4>	
	<hr class="clearfix" />					

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Mejoro :</label>
                        <div class="controls">

                            {if !$infoCal.view}	
                       
								<label class="radio line">
								<input type="radio" name="mejoro" value="si" {if $infoCal.mejoro eq 'si'} checked {/if} />
								Si
								</label>
								<label class="radio line">
								<input type="radio" name="mejoro" value="no" {if $infoCal.mejoro eq 'no'} checked {/if}/>
								No
							{else}
                            	{$infoCal.mejoro}
                            {/if}
               
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Hoy se le dio?:</label>
                        <div class="controls">
							{if !$infoCal.view}
							  <select class="span12 chosen" data-placeholder="Seleccione accion del dia..."  name="accionActual" id="accionActual" onchange="AccionActual(this.value,'actualizar_tratamiento_1')" tabindex="1">
									<option value=""></option>
								{*	<option {if $infoCal.accion eq 'N'} selected {/if} value="N">N</option>	*}
									<option {if $infoCal.accion eq 'D'} selected {/if} value="D">Descarte</option>
									<option {if $infoCal.accion eq 'E'} selected {/if}value="E">Evaluacion</option>
									<option {if is_numeric($infoCal.accion)} selected {/if}value="T">Tratamiento</option>
									<option {if $infoCal.accion eq 'A'} selected {/if}value="A">Alta</option>
								</select>
							{else}
                            	{$infoCal.accion}
                            {/if}
                        </div>
                    </div>
					
					
					<div id="actualizar_tratamiento_1">
					
					{if $infoCal.accion > 0}
						{if $infoCal.tratamientoId > 0}
							{include file="{$DOC_ROOT}/templates/boxes/actualizar-tratamiento_1.tpl"}
						{/if}
					{/if}
				
					</div>
					
					
					
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Prueba:</label>
                        <div class="controls">
                        	{if !$infoCal.view}
							  <select class="span12 chosen" data-placeholder="Seleccione prueba"  name="pruebaId" id="pruebaId" onchange="Resultado(this.value)" tabindex="">
									<option value=""></option>
									{foreach from=$listPrueba item=item key=key}
										<option {if $item.pruebaId eq $infoCal.pruebaId} selected {/if} value="{$item.pruebaId}">{$item.nombre}</option>
									{/foreach}
								</select>
                            {else}
                            	{$infoCal.nombrePrueba}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Resultado de la prueba:</label>
                        <div class="controls">
                        	{if !$infoCal.view}
								<div id="resultadoDiagnostico">

								{include file="{$DOC_ROOT}/templates/boxes/resultadoDiagnostico.tpl"}
								</div>
                            {else}
                            	{$infoCal.nombreResultado}
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
										<option {if $infoCal.diagnosticoId eq $item.diagnosticoId} selected {/if}value="{$item.diagnosticoId}">{$item.nombre}</option>
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
                        	{if !$infoCal.view}
							<textarea class="span12 m-wrap" rows="3" id="observacion" name="observacion"  > {$infoCal.observacion} </textarea>
                            {else}
                            	{$infoCal.observacion}
                            {/if}
                        </div>
                    </div>
	
					

                   <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
                </form>
                <!-- END FORM-->                  
           </div>
        </div>
    </div>

</div>