<?php /* Smarty version Smarty3-b7, created on 2016-04-28 13:37:17
         compiled from "C:/wamp/www/acervo/sistema/templates/forms/add-documento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324385722585db25342-82563098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24add5036b68e7a0330e5d7ddfa7860bb31d9dc' => 
    array (
      0 => 'C:/wamp/www/acervo/sistema/templates/forms/add-documento.tpl',
      1 => 1461868484,
    ),
  ),
  'nocache_hash' => '324385722585db25342-82563098',
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
                        <label class="control-label"><span class="reqIcon">*</span> Documento:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="documento" value="<?php echo $_smarty_tpl->getVariable('info')->value['documento'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['documento'];?>

                            <?php }?>
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Descripcion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <textarea name="descripcion"></textarea>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>

                            <?php }?>
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Observacion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <textarea name="observacion"></textarea>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['observacion'];?>

                            <?php }?>
                        </div>
						
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Dependencia:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							<select name="dependenciaId" id="dependenciaId">
									<option></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstDependencia')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
									<option value="<?php echo $_smarty_tpl->getVariable('item')->value['dependenciaId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>									
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>

                            <?php }?>
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Tipo de Documento:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
								<select name="tipodocumentoId" id="tipodocumentoId">
									<option></option> 
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstTipoDoc')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
									<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tipodocumentoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['documento'];?>
</option>									
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>

                            <?php }?>
                        </div>
						
                    </div>
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Portada:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="file" class="m-wrap span12" name="portada" value="<?php echo $_smarty_tpl->getVariable('info')->value['documento'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Archivo:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="file" class="m-wrap span12" name="archivo" value="<?php echo $_smarty_tpl->getVariable('info')->value['documento'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>

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
	<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveReg()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>
    
</div>