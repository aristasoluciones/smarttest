<?php /* Smarty version Smarty3-b7, created on 2017-02-28 15:15:08
         compiled from "C:/wamp/www/encuesta/templates/forms/encuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1679958b5e85c9ba1f9-96450717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1adf6e5620d2da03789357045a0be6458caa6eb' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/forms/encuesta.tpl',
      1 => 1488316506,
    ),
  ),
  'nocache_hash' => '1679958b5e85c9ba1f9-96450717',
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
                        <label class="control-label"><span class="reqIcon">*</span> Inicio:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                           <input type="text" class="m-wrap span12" name="inicio" id="inicio" value="<?php echo $_smarty_tpl->getVariable('info')->value['inicio'];?>
" maxlength="60" onClick="dateInicio()"/>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['amaterno'];?>

                            <?php }?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label"><span class="reqIcon">*</span> Fin:</label>
                        <div class="controls">
                        	<?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="fin" id="fin" value="<?php echo $_smarty_tpl->getVariable('info')->value['fin'];?>
" maxlength="60" onClick="dateFin()"/>
                            <?php }else{ ?>
                            	<?php echo $_smarty_tpl->getVariable('info')->value['amaterno'];?>

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
   
    
</div>