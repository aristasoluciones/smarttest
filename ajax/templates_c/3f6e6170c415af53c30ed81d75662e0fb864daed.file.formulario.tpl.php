<?php /* Smarty version Smarty3-b7, created on 2016-07-09 19:20:00
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/formulario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21806578194b07c80e2-44224715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6e6170c415af53c30ed81d75662e0fb864daed' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/formulario.tpl',
      1 => 1468109966,
    ),
  ),
  'nocache_hash' => '21806578194b07c80e2-44224715',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
               
					 <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Titulo del Documento:</label>
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
                        <label class="control-label"><span class="reqIcon">*</span>Fecha de Elaboración:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12"onClick="fechaEla()" id="fechaElaboracion" name="fechaElaboracion" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaElaboracion'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['fechaElaboracion'];?>

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
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
						
						
							<div class="control-group">
								<label class="control-label"><span class="reqIcon">*</span><?php echo $_smarty_tpl->getVariable('item')->value['nombreView'];?>
:</label>
								<div class="controls">
									<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
										<input type="text" name="<?php echo $_smarty_tpl->getVariable('item')->value['nombreCampo'];?>
"> 
									<?php }else{ ?>
										<input type="text" name="<?php echo $_smarty_tpl->getVariable('item')->value['nombreCampo'];?>
"> 
									<?php }?>
								</div>
								
							</div>
						
						
					<?php }} ?>
                   
                    
              
                <!-- END FORM-->                  
            </div>
      
    </div>
    
    
</div>