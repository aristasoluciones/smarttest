<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:14:30
         compiled from "C:/wamp/www/ceva/templates/forms/establo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11197556a3646c4c031-98232959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b438d95f6321288e15b0b5aaa5ffbeea5346fd8' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/establo.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '11197556a3646c4c031-98232959',
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
" maxlength="150" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Direccion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="direccion" value="<?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>
" maxlength="150" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tel&eacute;fono:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="telefono" value="<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>
" maxlength="15"> 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Contacto:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="contacto"  value="<?php echo $_smarty_tpl->getVariable('info')->value['contacto'];?>
" maxlength="60"/>
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['contacto'];?>

                            <?php }?>
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Responsable:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="responsable" value="<?php echo $_smarty_tpl->getVariable('info')->value['responsable'];?>
" maxlength="150" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['responsable'];?>

                            <?php }?>
                        </div>
                    </div>

				
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Costo 1 litro Leche :</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="costoLitro" value="<?php echo $_smarty_tpl->getVariable('info')->value['costoLitro'];?>
" onkeypress="return soloNumeros(event)" maxlength="5" />
                            <?php }else{ ?>
                            	$<?php echo number_format($_smarty_tpl->getVariable('info')->value['costoLitro'],2,'.',',');?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Cantidad de Corrales:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="number" class="m-wrap span12" name="cantidadCorral" value="<?php echo $_smarty_tpl->getVariable('info')->value['cantidadCorral'];?>
" onkeypress="return soloNumeros(event)" maxlength="2" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['cantidadCorral'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Dias para reincidencia automatica:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="number" class="m-wrap span12" name="reincidenciaAutomatico" value="<?php echo $_smarty_tpl->getVariable('info')->value['reincidenciaAutomatico'];?>
" onkeypress="return soloDigito(event)" maxlength="3" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['reincidenciaAutomatico'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Vacas Hato:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="number" class="m-wrap span12" name="ordenaMes" value="<?php echo $_smarty_tpl->getVariable('info')->value['ordenaMes'];?>
" onkeypress="return soloDigito(event)" maxlength="5" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['ordenaMes'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha Expiracion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="fechaExpiracion" id="fechaExpiracion" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaExpiracion'];?>
" onmousemove="Calendario('fechaExpiracion')" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['fechaExpiracion'];?>

                            <?php }?>
                        </div>
                    </div>
                    
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Comentarios</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="comentario" value="<?php echo $_smarty_tpl->getVariable('info')->value['comentario'];?>
" maxlength="255">
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['comentario'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Activo:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="checkbox" name="activo" value="1" <?php if ($_smarty_tpl->getVariable('info')->value['activo']=="1"){?>checked<?php }?> />
                             <?php }else{ ?>
                            	<?php if ($_smarty_tpl->getVariable('info')->value['activo']==1){?>S&iacute;<?php }else{ ?>No<?php }?>
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
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>