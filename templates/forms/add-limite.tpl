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
                   
				   <b>
					Limite:
				   </b>
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   <input type="text" name="limite" value="{$info.limite}">
				   <br>
				   <b>
					Paquete
				   </b>
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				      <input type="text" name="paquete" value="{$info.paquete}">
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>