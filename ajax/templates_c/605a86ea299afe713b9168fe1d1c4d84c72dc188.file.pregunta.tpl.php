<?php /* Smarty version Smarty3-b7, created on 2017-02-28 18:20:57
         compiled from "C:/wamp/www/encuesta/templates/forms/pregunta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263658b613e926bab2-47053086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '605a86ea299afe713b9168fe1d1c4d84c72dc188' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/forms/pregunta.tpl',
      1 => 1488327653,
    ),
  ),
  'nocache_hash' => '263658b613e926bab2-47053086',
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
                        <label class="control-label"><span class="reqIcon">*</span> Pregunta:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                    		<textarea name="pregunta" ><?php echo $_smarty_tpl->getVariable('info')->value['pregunta'];?>
</textarea>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
                    </div>

					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Tipo:</label>
                        <div class="controls">
                        	<select name="tipo" id="tipo" onChange="checaTipopregunta()">
								<option value=""></option>
								<option value="punto" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']=="punto"){?> selected <?php }?>>Puntos</option>
								<option value="opcional" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']=="opcional"){?> selected <?php }?>>Opcional</option>
								<option value="abierta" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']=="abierta"){?> selected <?php }?>>Abierta</option>
                        	</select>
                        </div>
                    </div>
					
					<div class="control-group" id="div_rango"  <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']!="punto"){?> style="display:none" <?php }?>>
                        <label class="control-label"><span class="reqIcon">*</span> Rango:</label>
						 <div class="controls">
							DE:<input type="text" name="de" value="<?php echo $_smarty_tpl->getVariable('de')->value;?>
" style="width:50px"> A:<input type="text" name="a" value="<?php echo $_smarty_tpl->getVariable('a')->value;?>
" style="width:50px">
						</div>
                    </div>
					
                  	<div class="control-group" id="div_par" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']!="opcional"){?> style="display:none" <?php }?>>
                        <label class="control-label"><span class="reqIcon">*</span> Parametros Opcional:</label>
						 <div class="controls">
							Opcion 1.<input type="text" name="res_1" value="<?php echo $_smarty_tpl->getVariable('o1')->value;?>
">
							Opcion 2.<input type="text" name="res_2" value="<?php echo $_smarty_tpl->getVariable('o2')->value;?>
">
							Opcion 3.<input type="text" name="res_3" value="<?php echo $_smarty_tpl->getVariable('o3')->value;?>
">
							Opcion 4.<input type="text" name="res_4" value="<?php echo $_smarty_tpl->getVariable('o4')->value;?>
">
							Opcion 5.<input type="text" name="res_5" value="<?php echo $_smarty_tpl->getVariable('o5')->value;?>
">
						</div>
                    </div>
					
					<div class="control-group" id="div_car" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']!="abierta"){?> style="display:none" <?php }?>>
                        <label class="control-label"><span class="reqIcon">*</span>Num. Caracteres:</label>
						 <div class="controls">
							<input type="text" name="caracter">
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