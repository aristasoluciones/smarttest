<?php /* Smarty version Smarty3-b7, created on 2017-02-23 20:24:36
         compiled from "C:/wamp/www/aristax/templates/forms/proveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2985658af996435d7a0-62195024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21521741bb4f6f10f18647e64ae2a2639bfbca9' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/forms/proveedor.tpl',
      1 => 1485384201,
    ),
  ),
  'nocache_hash' => '2985658af996435d7a0-62195024',
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
                        <label class="control-label"><span class="reqIcon">*</span> Direcion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="direccion" value="<?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>
" maxlength="60" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>

                            <?php }?>
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