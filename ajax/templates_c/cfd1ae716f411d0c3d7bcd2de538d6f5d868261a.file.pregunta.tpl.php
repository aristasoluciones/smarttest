<?php /* Smarty version Smarty3-b7, created on 2017-02-24 20:08:26
         compiled from "C:/wamp/www/aristax/templates/forms/pregunta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503458b0e71aa38d52-40054204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd1ae716f411d0c3d7bcd2de538d6f5d868261a' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/forms/pregunta.tpl',
      1 => 1487988504,
    ),
  ),
  'nocache_hash' => '503458b0e71aa38d52-40054204',
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
                        	<select name="tipo">
								<option value=""></option>
								<option value="punto">Puntos</option>
								<option value="opcional">Opcional</option>
								<option value="abierta">Abierta</option>
                        	</select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Rango:</label>
						 <div class="controls">
							DE:<input type="text" name="de" style="width:50px"> A:<input type="text" name="a" style="width:50px">
						</div>
                    </div>
					
                  	<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Parametros Opcional:</label>
						 <div class="controls">
							Opcion 1.<input type="text" name="res1">
							Opcion 2.<input type="text" name="res2">
							Opcion 3.<input type="text" name="res3">
							Opcion 4.<input type="text" name="res4">
							Opcion 5.<input type="text" name="res5">
						</div>
                    </div>
					
					<div class="control-group">
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