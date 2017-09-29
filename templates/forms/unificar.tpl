<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i></div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="SaveUnificar" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Direccion Anterior:</label>
                        <div class="controls">
                        	<select name="dependenciaId">
									<option></option>
									<option value=""></option>
									{foreach from=$lstDependencia item=item}        	
									<option {if $info.dependenciaId eq $item.dependenciaId} selected {/if} value="{$item.dependenciaId}">{$item.nombre}</option>
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