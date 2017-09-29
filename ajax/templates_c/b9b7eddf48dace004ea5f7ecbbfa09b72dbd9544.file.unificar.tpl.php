<?php /* Smarty version Smarty3-b7, created on 2016-05-26 18:12:03
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/unificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30196574782c38164c5-61891367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9b7eddf48dace004ea5f7ecbbfa09b72dbd9544' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/unificar.tpl',
      1 => 1464304229,
    ),
  ),
  'nocache_hash' => '30196574782c38164c5-61891367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Direccion Anterior:</label>
                        <div class="controls">
                        	<select name="dependenciaId">
									<option></option>
									<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstDependencia')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>        	
									<option <?php if ($_smarty_tpl->getVariable('info')->value['dependenciaId']==$_smarty_tpl->getVariable('item')->value['dependenciaId']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['dependenciaId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
									<?php }} ?>
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