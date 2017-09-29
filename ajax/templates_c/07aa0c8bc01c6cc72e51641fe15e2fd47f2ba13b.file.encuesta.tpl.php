<?php /* Smarty version Smarty3-b7, created on 2017-02-24 19:22:08
         compiled from "C:/wamp/www/aristax/templates/forms/encuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3218758b0dc4023b599-08592899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07aa0c8bc01c6cc72e51641fe15e2fd47f2ba13b' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/forms/encuesta.tpl',
      1 => 1487985723,
    ),
  ),
  'nocache_hash' => '3218758b0dc4023b599-08592899',
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
                           <input type="text" class="m-wrap span12" name="inicio" id="inicio" value="<?php echo $_smarty_tpl->getVariable('info')->value['incio'];?>
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