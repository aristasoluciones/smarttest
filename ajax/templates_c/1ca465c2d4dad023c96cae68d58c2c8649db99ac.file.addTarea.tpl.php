<?php /* Smarty version Smarty3-b7, created on 2017-02-25 21:24:33
         compiled from "C:/wamp/www/encuesta/templates/forms/addTarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2378358b24a71c525b1-92471215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca465c2d4dad023c96cae68d58c2c8649db99ac' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/forms/addTarea.tpl',
      1 => 1487981004,
    ),
  ),
  'nocache_hash' => '2378358b24a71c525b1-92471215',
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
                <input type="hidden" name="type" id="type" value="SaveTarea" />
                <input type="hidden" name="ventaId" id="ventaId" value="<?php echo $_smarty_tpl->getVariable('ventaId')->value;?>
" />
                <input type="hidden" name="tipo" id="tipo" value="<?php echo $_smarty_tpl->getVariable('tipo')->value;?>
" />
                <input type="hidden" name="tareaId" id="tareaId" value="<?php echo $_smarty_tpl->getVariable('tareaId')->value;?>
" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> descripcion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							<textarea name="descripcion" id="descripcion"><?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>
</textarea>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
                    </div>
					<?php if ($_smarty_tpl->getVariable('tipo')->value=="editar"){?>
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Estatus:</label>
                        <div class="controls">
                        	<select name="estatus">
								<option></option>
								<option value="abierto" <?php if ($_smarty_tpl->getVariable('info')->value['estatus']=="abierto"){?> selected <?php }?>>abierto</option>
								<option value="proceso" <?php if ($_smarty_tpl->getVariable('info')->value['estatus']=="proceso"){?> selected <?php }?>>proceso</option>
								<option value="cerrado" <?php if ($_smarty_tpl->getVariable('info')->value['estatus']=="cerrado"){?> selected <?php }?>>cerrado</option>
                        	</select>
                        </div>
                    </div>
					<?php }?>
				 
									
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
   
    
</div>