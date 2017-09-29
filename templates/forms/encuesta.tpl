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
                            <input type="text" class="m-wrap span12" name="nombre" value="{$info.nombre}" maxlength="60" />
                            {else}
                            	{$info.nombre}
                            {/if}
                        </div>
                    </div>

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Inicio:</label>
                        <div class="controls">
                        	{if !$info.view}
                           <input type="text" class="m-wrap span12" name="inicio" id="inicio" value="{$info.inicio}" maxlength="60" onClick="dateInicio()"/>
                            {else}
                            	{$info.amaterno}
                            {/if}
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Fin:</label>
                        <div class="controls">
                        	{if !$info.view}
                            <input type="text" class="m-wrap span12" name="fin" id="fin" value="{$info.fin}" maxlength="60" onClick="dateFin()"/>
                            {else}
                            	{$info.amaterno}
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