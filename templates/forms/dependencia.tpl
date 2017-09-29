<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i></div>                
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
                            <input type="text" class="m-wrap span12" name="nombre" value="{$info.nombre}"  />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Acrónimo:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="acronimo" value="{$info.acronimo}"  />
                            {else}
                            	{$info.acronimo}
                            {/if}
                        </div>
                    </div>
					<!--
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Direccion:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="direccion" value="{$info.direccion}" maxlength="60"> 
                             {else}
                            	{$info.direccion}
                            {/if}
                        </div>
                    </div>--><!--
					<div class="control-group">
                        <label class="control-label">Pagina Web:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="pagina" value="{$info.web}" > 
                             {else}
                            	{$info.web}
                            {/if}
                        </div>
                    </div>-->
					
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Email:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="email"  value="{$info.mail}" />
                             {else}
                            	{$info.mail}
                            {/if}
                        </div>
                    </div> 
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Telefono:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="telefono" value="{$info.telefono}" > 
                             {else}
                            	{$info.telefono}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Horario de Atención:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="horario" value="{$info.horario}"  />
                            {else}
                            	{$info.horario}
                            {/if}
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Secretaria:</label>
                        <div class="controls">
                        	
								
								<select name="secretariaId">
									<option></option>
									<option value=""></option>
									{foreach from=$registrosDep.result item=item}        	
									<option {if $info.secretariaId eq $item.secretariaId} selected {/if} value="{$item.secretariaId}">{$item.nombre}</option>
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
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>