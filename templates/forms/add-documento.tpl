<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="{$info.idReg}" />
				
					<div class="control-group">
                        <center>
                        	<h3>¿Que operacion desea realizar?</h3>
                        </center>
						
                    </div>
					
                  <div id="divForm">
                  </div>
				  
				  
                    </div>
                    
                </form>
                <!-- END FORM-->                  
           
        </div>
    </div>
    
    

    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    <div align="center" id="txtErrInfo" class="alert alert-info hide"></div>
	<div class="modal-footer">
    <button class="btn" onClick="Cancel()" data-dismiss="modal" aria-hidden="true">Cancelar</button>

	  <button class="btn yellow" id="btnSave" onclick="SaveTerminar()">Guardar y Terminar</button>	
			
    <button class="btn green" id="btnSave" onclick="saveLista()">{if $info.idReg}Actualizar{else}Guardar Y Agregar Otra Lista{/if}</button>
  
</div>
    
</div>