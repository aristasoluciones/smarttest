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
                        <label class="control-label"><span class="reqIcon">*</span> Pregunta:</label>
                        <div class="controls">
                        	{if !$info.view}
                    		<textarea name="pregunta" >{$info.pregunta}</textarea>
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Tipo:</label>
                        <div class="controls">
                        	<select name="tipo" id="tipo" onChange="checaTipopregunta()">
								<option value=""></option>
								<option value="punto" {if $info.tiporespuesta eq "punto"} selected {/if}>Puntos</option>
								<option value="opcional" {if $info.tiporespuesta eq "opcional"} selected {/if}>Opcional</option>
								<option value="abierta" {if $info.tiporespuesta eq "abierta"} selected {/if}>Abierta</option>
                        	</select>
                        </div>
                    </div>
					
					<div class="control-group" id="div_rango"  {if $info.tiporespuesta ne "punto"} style="display:none" {/if}>
                        <label class="control-label"><span class="reqIcon">*</span> Rango:</label>
						 <div class="controls">
							DE:<input type="text" name="de" value="{$de}" style="width:50px"> A:<input type="text" name="a" value="{$a}" style="width:50px">
						</div>
                    </div>
					
                  	<div class="control-group" id="div_par" {if $info.tiporespuesta ne "opcional"} style="display:none" {/if}>
                        <label class="control-label"><span class="reqIcon">*</span> Parametros Opcional:</label>
						 <div class="controls">
							Opcion 1.<input type="text" name="res_1" value="{$o1}">
							Opcion 2.<input type="text" name="res_2" value="{$o2}">
							Opcion 3.<input type="text" name="res_3" value="{$o3}">
							Opcion 4.<input type="text" name="res_4" value="{$o4}">
							Opcion 5.<input type="text" name="res_5" value="{$o5}">
						</div>
                    </div>
					
					<div class="control-group" id="div_car" {if $info.tiporespuesta ne "abierta"} style="display:none" {/if}>
                        <label class="control-label"><span class="reqIcon">*</span>Num. Caracteres:</label>
						 <div class="controls">
							<input type="text" name="caracter">
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