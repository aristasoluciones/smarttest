<?php /* Smarty version Smarty3-b7, created on 2016-07-12 16:53:37
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/add-documento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13558578566e1ac1fb6-12655141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced08bc1bbd893be32e96358cd27e5370a868234' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/add-documento.tpl',
      1 => 1468360329,
    ),
  ),
  'nocache_hash' => '13558578566e1ac1fb6-12655141',
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
                        <label class="control-label"><span class="reqIcon">*</span>Tipo de Documento:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
								<select name="tipodocumentoId" id="tipodocumentoId" onChange="eligeForm()">
									<option></option> 
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstTipoDoc')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
									<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tipodocumentoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['documento'];?>
</option>									
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>

                            <?php }?>
                        </div>
						
                    </div>
					
                  <div id="divForm">
                  </div>
				  
				  
                    </div>
                    
                </form>
                <!-- END FORM-->                  
           
        </div>
    </div>
    
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    <div align="center" id="txtErrInfo" class="alert alert-info hide"></div>
	<div class="modal-footer">
    <button class="btn" onClick="Cancel()" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" id="btnSave" onclick="SaveReg()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>
    
</div>