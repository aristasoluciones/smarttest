<?php /* Smarty version Smarty3-b7, created on 2017-01-26 10:02:41
         compiled from "C:/wamp/www/le/templates/forms/ingrediente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25519588a1da1033401-00584659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5316363ff65b1e6a05a0bfc3cba2ced37271c699' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/ingrediente.tpl',
      1 => 1485446557,
    ),
  ),
  'nocache_hash' => '25519588a1da1033401-00584659',
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
                    </div>
					
					<div class="control-group">
				
                        <label class="control-label"><span class="reqIcon">*</span> Proveedor:</label>
                        <div class="controls">
							<select name="proveedorId" >
								<option></option>
                        	<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstProveedor')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>   
								<option value="<?php echo $_smarty_tpl->getVariable('item2')->value['proveedorId'];?>
" <?php if ($_smarty_tpl->getVariable('item2')->value['proveedorId']==$_smarty_tpl->getVariable('info')->value['proveedorId']){?> selected <?php }?>><?php echo $_smarty_tpl->getVariable('item2')->value['nombre'];?>
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