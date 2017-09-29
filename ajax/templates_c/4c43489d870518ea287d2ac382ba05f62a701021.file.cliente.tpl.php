<?php /* Smarty version Smarty3-b7, created on 2017-01-26 16:58:46
         compiled from "C:/wamp/www/le/templates/forms/cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13246588a7f26c0e362-26375116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c43489d870518ea287d2ac382ba05f62a701021' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/cliente.tpl',
      1 => 1485384201,
    ),
  ),
  'nocache_hash' => '13246588a7f26c0e362-26375116',
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