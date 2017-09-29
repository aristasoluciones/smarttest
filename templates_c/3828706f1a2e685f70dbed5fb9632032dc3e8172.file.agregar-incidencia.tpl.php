<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:06
         compiled from "C:/wamp/www/ceva/templates/forms/agregar-incidencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21664556a3bce0f7249-62651950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3828706f1a2e685f70dbed5fb9632032dc3e8172' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/forms/agregar-incidencia.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '21664556a3bce0f7249-62651950',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
	
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
				
			
				
				
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Numero de Vaca:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							<div class="row-fluid">
								<input type="text" class="m-wrap span6" name="numVaca" value="<?php echo $_smarty_tpl->getVariable('info')->value['numVaca'];?>
" onkeypress="return soloNumeros(event)" onchange="ComprobarVaca(this.value)" maxlength="10" />
								<div align="center" id="loaderNumVaca"></div>
							</div>
							<div class="row-fluid">
								
							
								<div align="center" id="txtErrMsgNumVaca" class="alert alert-error hide span6"></div>                           
						
							</div>
						  <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['numVaca'];?>

                            <?php }?>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label">Reincidencia:</label>
                        <div class="controls">
						
							<div class="row-fluid">					
								<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
									<label class="radio line">
									<input type="radio" name="reincidencia" id="reincidencia" class="reincidencia" value="si" />
									Si
									</label>
									<label class="radio line">
									<input type="radio" name="reincidencia" id="reincidencia" class="reincidencia" value="no"  />
									No
									</label> 
								 <?php }else{ ?>
									<?php echo $_smarty_tpl->getVariable('info')->value['reincidencia'];?>

								<?php }?>
							</div>
							<div class="row-fluid">	
								<div align="center" id="txtErrMsgReincidencia" class="alert alert-info hide span6">"*Reincidencia automatica"</div>
							</div>
                        </div>
                    </div>
					
					
					
                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Lactancia:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span6" name="lactancia"  value="<?php echo $_smarty_tpl->getVariable('info')->value['lactancia'];?>
" onkeypress="return soloNumeros(event)" maxlength="10"/>
                             <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['lactancia'];?>

                            <?php }?>
                        </div>
                    </div> 
					

                    <div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Corral:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							  <select class="span6 chosen" data-placeholder="Seleccione corral..."  name="corral" id="corral" tabindex="1">
									<option value=""></option>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listCorral')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<option value="<?php echo $_smarty_tpl->getVariable('item')->value['numeroCorral'];?>
">Corral <?php echo $_smarty_tpl->getVariable('item')->value['numeroCorral'];?>
</option>
								<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['corral'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Bacteriologia:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							  <select class="span6 chosen" data-placeholder="Seleccione bacteriologia..."  name="aislamientoBacId" id="aislamientoBacId" tabindex="1">
									<option value=""></option>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listaAislamientoBac')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<option value="<?php echo $_smarty_tpl->getVariable('item')->value['aislamientoBacId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
								<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombreAislamientoBacteriologico'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> DEL</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span6" name="del" value="<?php echo $_smarty_tpl->getVariable('info')->value['del'];?>
" maxlength="10">
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['del'];?>

                            <?php }?>
                        </div>
                    </div>

					<div class="control-group">
						<label class="control-label"><span class="reqIcon">*</span>Cuarto</label>
						<div class="controls">
							<div class="row-fluid">
								<div class="span4">
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listCuarto')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<label class="checkbox line">
									<input type="checkbox" id="cuarto" name="cuarto[]" value="<?php echo $_smarty_tpl->getVariable('item')->value['cuartoId'];?>
" /> <?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>

									</label>
								<?php }} ?>
								
								</div>
								<div class="span6">
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/cuartos.png" width="110" border="0">
								</div>
							</div>
						</div>
					</div>
					

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Produccion de Leche (L)</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="number" class="m-wrap span6" name="produccionLeche" value="<?php echo $_smarty_tpl->getVariable('info')->value['produccionLeche'];?>
" onkeypress="return soloNumeros(event)" maxlength="10">
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['produccionLeche'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Tipo de Mastitis:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							  <select class="span6 chosen" data-placeholder="Selecciona tipo de mastitis..."  name="tipoMastitisId" id="tipoMastitisId" tabindex="1">
								<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listTipoMastitis')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tipoMastitisId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipoMastitis'];?>

                            <?php }?>
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha de Ingreso</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							<div class="input-icon left">
								<i class="icon-calendar"></i>
								<input type="text" class="m-wrap span6"  name="fechaIngreso" id="fechaIngreso" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaIngreso'];?>
" onchange="ReincidenciaAutomatica()" onmousemove="Calendario('fechaIngreso')">
                            </div>
							<?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['fechaIngreso'];?>

                            <?php }?>
                        </div>
                    </div>
										
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Tratamiento:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							  <select class="span6 chosen" data-placeholder="Seleccione tratamiento"  name="tratamientoId" id="tratamientoId" tabindex="1">
									<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listTratamiento')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<option value="<?php echo $_smarty_tpl->getVariable('item')->value['tratamientoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['numTratamiento'];?>
::<?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipoMastitis'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Dias de tratamiento</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="number" class="m-wrap span6" name="diaTratamiento" value="<?php echo $_smarty_tpl->getVariable('info')->value['diaTratamiento'];?>
" maxlength="10" onkeypress="return soloDigito(event)">
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['diaTratamiento'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Fecha de Tratamiento</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							<div class="input-icon left">
								<i class="icon-calendar"></i>
									<input type="text" class="m-wrap span6" name="fechaTratamiento" id="fechaTratamiento" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechaTratamiento'];?>
" onmousemove="Calendario('fechaTratamiento')" >
                            </div>
							<?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['fechaTratamiento'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Prueba:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							  <select class="span6 chosen" data-placeholder="Seleccione prueba"  name="pruebaId" id="pruebaId" onchange="Resultado(this.value)" tabindex="">
									<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listPrueba')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<option value="<?php echo $_smarty_tpl->getVariable('item')->value['pruebaId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipoMastitis'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Resultado de la prueba:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
								<div id="resultadoDiagnostico">
								<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/resultadoDiagnostico.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

								</div>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipoMastitis'];?>

                            <?php }?>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Diagnostico :</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							  <select class="span6 chosen" data-placeholder="Seleccione diagnostico"  name="diagnosticoId" id="diagnosticoId"  tabindex="">
									<option value=""></option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listDiagnostico')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<option value="<?php echo $_smarty_tpl->getVariable('item')->value['diagnosticoId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
									<?php }} ?>
								</select>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['tipoMastitis'];?>

                            <?php }?>
                        </div>
                    </div>
					
					
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span>Observaciones </label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
							<textarea class="span6 m-wrap" rows="3" id="observacion" name="observacion" value="<?php echo $_smarty_tpl->getVariable('info')->value['observacion'];?>
" ></textarea>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['observacion'];?>

                            <?php }?>
                        </div>
                    </div>
                   
					<div class="form-actions">
						<span class="reqIcon">*</span> Campos requeridos
						<div align="center" id="loader"></div>
						<div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
						<button type="button" onclick="SaveReg()" class="btn blue">Guardar</button>
						<button type="button" class="btn">Cancel</button>
					</div>
                   
                </form>
                <!-- END FORM-->                  
 
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>