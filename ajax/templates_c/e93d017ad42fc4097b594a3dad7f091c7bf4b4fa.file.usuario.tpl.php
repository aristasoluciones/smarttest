<?php /* Smarty version Smarty3-b7, created on 2016-04-17 19:27:53
         compiled from "C:/wamp/www/customerswm/templates/forms/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179257142a09bfe3d4-78303028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e93d017ad42fc4097b594a3dad7f091c7bf4b4fa' => 
    array (
      0 => 'C:/wamp/www/customerswm/templates/forms/usuario.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '1179257142a09bfe3d4-78303028',
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
                                <option value="operacion" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="operacion"){?>selected<?php }?>>Operacion</option>                                
                            </select> 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipo'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group" id="div_Establo" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']!="operacion"){?>style ="display:none;" <?php }?> >
						<label class="control-label">Establos<br>(Seleccion multiple)</label>
						<div class="controls">
							<select class="span12 m-wrap" id="establos" name="establos[]" multiple="multiple" data-placeholder="Choose a Category" tabindex="1">
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listEstablo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<option <?php if ($_smarty_tpl->getVariable('item')->value['check']=="1"){?>selected<?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['establoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>			
								<?php }} ?>
							</select>
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