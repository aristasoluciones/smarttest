<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
               
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Titulo del Documento:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="documento" value="{$info.documento}"  />
                            {else}
                            	{$info.documento}
                            {/if}
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Descripcion:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <textarea name="descripcion"></textarea>
                            {else}
                            	{$info.descripcion}
                            {/if}
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Observacion:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <textarea name="observacion"></textarea>
                            {else}
                            	{$info.observacion}
                            {/if}
                        </div>
						
                    </div>
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha de Elaboración:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12"onClick="fechaEla()" id="fechaElaboracion" name="fechaElaboracion" value="{$info.fechaElaboracion}"  />
                            {else}
                            	{$info.fechaElaboracion}
                            {/if}
                        </div>
						
                    </div>
					
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Portada:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="file" class="m-wrap span12" name="portada" value="{$info.documento}"  />
                            {else}
                            	{$info.descripcion}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Archivo:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="file" class="m-wrap span12" name="archivo" value="{$info.documento}"  />
                            {else}
                            	{$info.descripcion}
                            {/if}
                        </div>
						
                    </div> 
					{foreach from=$lts item=item key=key} 
						
						
							<div class="control-group">
								<label class="control-label"><span class="reqIcon">*</span>{$item.nombreView}:</label>
								<div class="controls">
									{if !$info.view}
										<input type="text" name="{$item.nombreCampo}"> 
									{else}
										<input type="text" name="{$item.nombreCampo}"> 
									{/if}
								</div>
								
							</div>
						
						
					{/foreach}
                   
                    
              
                <!-- END FORM-->                  
            </div>
      
    </div>
    
    
</div>