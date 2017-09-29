<?php /* Smarty version Smarty3-b7, created on 2016-07-01 13:44:46
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/asignar-campo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194285776ba1e28a617-59844607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b529c4541bd6a3cb20dcf3420385d5539371d1e3' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/asignar-campo.tpl',
      1 => 1467398420,
    ),
  ),
  'nocache_hash' => '194285776ba1e28a617-59844607',
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
                <input type="hidden" name="type" value="Asignar" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                <input type="hidden" name="documentoId" id="documentoId" value="<?php echo $_smarty_tpl->getVariable('documentoId')->value;?>
" />
                  
                     <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Campos:</label>
                        <div class="controls">
                        	
								
								<select name="campoId">
									<option></option>
									<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lst')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>        	
									<option <?php if ($_smarty_tpl->getVariable('info')->value['campoId']==$_smarty_tpl->getVariable('item')->value['campoId']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['campoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombreCampo'];?>
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