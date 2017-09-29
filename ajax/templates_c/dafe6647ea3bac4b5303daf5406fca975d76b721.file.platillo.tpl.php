<?php /* Smarty version Smarty3-b7, created on 2017-01-13 09:41:38
         compiled from "C:/wamp/www/le/templates/forms/platillo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151635878f532c2de41-68168520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dafe6647ea3bac4b5303daf5406fca975d76b721' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/platillo.tpl',
      1 => 1484322096,
    ),
  ),
  'nocache_hash' => '151635878f532c2de41-68168520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i><?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>Ingrese los <?php }?>Datos</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
" maxlength="60" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
						
						<label class="control-label"><span class="reqIcon">*</span> Tipo:</label>
                        <div class="controls">
                        
								<select name="tipoId" id="tipoId">
									<option></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lsttipo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>  
									<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tipoplatilloId'];?>
" <?php if ($_smarty_tpl->getVariable('item')->value['tipoplatilloId']==$_smarty_tpl->getVariable('info')->value['tipoId']){?> selected <?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
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
   
    
</div>