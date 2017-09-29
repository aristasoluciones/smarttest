<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i></div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="Asignar" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
                <input type="hidden" name="documentoId" id="documentoId" value="{$documentoId}" />
                  
                     <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Campos:</label>
                        <div class="controls">
                        	
								
								<select name="campoId">
									<option></option>
									<option value=""></option>
									{foreach from=$lst item=item}        	
									<option {if $info.campoId eq $item.campoId} selected {/if} value="{$item.campoId}">{$item.nombreCampo}</option>
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