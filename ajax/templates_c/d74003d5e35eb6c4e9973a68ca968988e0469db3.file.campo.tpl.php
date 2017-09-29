<?php /* Smarty version Smarty3-b7, created on 2016-08-05 16:14:57
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/campo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2380957a501d1b56871-70406135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd74003d5e35eb6c4e9973a68ca968988e0469db3' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/campo.tpl',
      1 => 1470431612,
    ),
  ),
  'nocache_hash' => '2380957a501d1b56871-70406135',
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
                        <label class="control-label"><span class="reqIcon">*</span> Nombre del Campo (base de datos):</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombreCampo'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
							<font color="red">Sin espacios</font>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Nombre del Campo (Vista Usuario):</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="nombrevista" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombreView'];?>
"  />
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

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