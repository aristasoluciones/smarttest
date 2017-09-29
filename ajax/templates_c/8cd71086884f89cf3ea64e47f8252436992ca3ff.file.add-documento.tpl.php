<?php /* Smarty version Smarty3-b7, created on 2017-02-08 22:47:06
         compiled from "C:/wamp/www/le/templates/forms/add-documento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17082589bf44ab64816-83006693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd71086884f89cf3ea64e47f8252436992ca3ff' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/add-documento.tpl',
      1 => 1486613636,
    ),
  ),
  'nocache_hash' => '17082589bf44ab64816-83006693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
				
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
			
    <button class="btn green" id="btnSave" onclick="saveLista()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar Y Agregar Otra Lista<?php }?></button>
  
</div>
    
</div>