<?php /* Smarty version Smarty3-b7, created on 2016-08-13 10:49:12
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/add-chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2743657af4178005917-61075079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c6e5af96102abb11e2a0fbb1f6e513da4d1583' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/add-chat.tpl',
      1 => 1471103349,
    ),
  ),
  'nocache_hash' => '2743657af4178005917-61075079',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Nuevo Mensaje</div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> para:</label>
                        <div class="controls">
							<select name="usuarioId">
							<option></option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstUsuarios')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<optgroup label="<?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
">
									<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['usuarios']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
										<option value="<?php echo $_smarty_tpl->getVariable('item2')->value['usuarioId'];?>
"><?php echo $_smarty_tpl->getVariable('item2')->value['nombre'];?>
 <?php echo $_smarty_tpl->getVariable('item2')->value['apaterno'];?>
 <?php echo $_smarty_tpl->getVariable('item2')->value['amaterno'];?>
</option>					
									<?php }} ?>
								</optgroup>
							<?php }} ?>
							
							</select>
                        </div>
						
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Mensaje:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <textarea name="mensaje" style="width:800px; height:100px"></textarea>
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
    <button class="btn yellow" onclick="SaveReg()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Enviar<?php }?></button>
    <?php }?>
</div>
    
</div>