<?php /* Smarty version Smarty3-b7, created on 2017-02-23 21:47:29
         compiled from "C:/wamp/www/aristax/templates/forms/clave.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1797158afacd159a4e7-11326019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efb607623117f775545e469b2fd7fa6799ce047c' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/forms/clave.tpl',
      1 => 1487907967,
    ),
  ),
  'nocache_hash' => '1797158afacd159a4e7-11326019',
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
                <input type="hidden" name="type" id="type" value="save" />
                <input type="hidden" name="clienteId" id="clienteId" value="<?php echo $_smarty_tpl->getVariable('clienteId')->value;?>
" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                           
							<textarea name="tipo" ><?php echo $_smarty_tpl->getVariable('info')->value['tipo'];?>
</textarea>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
                    </div>
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Password:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <textarea name="password" ><?php echo $_smarty_tpl->getVariable('info')->value['password'];?>
</textarea>
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