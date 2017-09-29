<?php /* Smarty version Smarty3-b7, created on 2017-02-12 22:17:32
         compiled from "C:/wamp/www/le/templates/forms/dependencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255958a1335ca29653-85464787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0cd889dd19dd8353edefe4798ddc66f9fe6282c' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/dependencia.tpl',
      1 => 1470706084,
    ),
  ),
  'nocache_hash' => '255958a1335ca29653-85464787',
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
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Acrónimo:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="acronimo" value="<?php echo $_smarty_tpl->getVariable('info')->value['acronimo'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['acronimo'];?>

                            <?php }?>
                        </div>
                    </div>
					<!--
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Direccion:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="direccion" value="<?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>
" maxlength="60"> 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>

                            <?php }?>
                        </div>
                    </div>--><!--
					<div class="control-group">
                        <label class="control-label">Pagina Web:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="pagina" value="<?php echo $_smarty_tpl->getVariable('info')->value['web'];?>
" > 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['web'];?>

                            <?php }?>
                        </div>
                    </div>-->
					
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Email:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="email"  value="<?php echo $_smarty_tpl->getVariable('info')->value['mail'];?>
" />
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['mail'];?>

                            <?php }?>
                        </div>
                    </div> 
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Telefono:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="telefono" value="<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>
" > 
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Horario de Atención:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="horario" value="<?php echo $_smarty_tpl->getVariable('info')->value['horario'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['horario'];?>

                            <?php }?>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Secretaria:</label>
                        <div class="controls">
                        	
								
								<select name="secretariaId">
									<option></option>
									<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registrosDep')->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>        	
									<option <?php if ($_smarty_tpl->getVariable('info')->value['secretariaId']==$_smarty_tpl->getVariable('item')->value['secretariaId']){?> selected <?php }?> value="<?php echo $_smarty_tpl->getVariable('item')->value['secretariaId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
									<?php }} ?>
								</select>
                        
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