<?php /* Smarty version Smarty3-b7, created on 2016-05-08 18:58:29
         compiled from "C:/wamp/www/acervo/sistema/templates/forms/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14651572fd2a57ae602-67886066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c42e1fdc998b477cb58936bef913586087518df' => 
    array (
      0 => 'C:/wamp/www/acervo/sistema/templates/forms/usuario.tpl',
      1 => 1462751901,
    ),
  ),
  'nocache_hash' => '14651572fd2a57ae602-67886066',
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
                        <label class="control-label">Tel&eacute;fono:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="telefono" value="<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>
" maxlength="60"> 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Email:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="email"  value="<?php echo $_smarty_tpl->getVariable('info')->value['email'];?>
" maxlength="80"/>
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['email'];?>

                            <?php }?>
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Usuario:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="usuario" value="<?php echo $_smarty_tpl->getVariable('info')->value['usuario'];?>
" maxlength="13" />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['usuario'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Contrase&ntilde;a:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="passwd" value="<?php echo $_smarty_tpl->getVariable('info')->value['passwd'];?>
" maxlength="100">
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['passwd'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Tipo:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <select class="m-wrap span12" name="tipo" id="tipo" onchange="ShowEstablo(this.value)" >
                                <option value="admin" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="admin"){?>selected<?php }?>>Administrador</option>                                
                                <option value="funcionario" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="funcionario"){?>selected<?php }?>>Funcionario</option>                                
                                <option value="ciudadano" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="ciudadano"){?>selected<?php }?>>Ciudadano</option>                                
                            </select> 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipo'];?>

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