<?php /* Smarty version Smarty3-b7, created on 2016-08-08 20:42:10
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/forms/tipodocumento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2190657a934f2ea9dc0-49392393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a43bfa0f5c923fc7b42ce76b06b6c348affb28' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/forms/tipodocumento.tpl',
      1 => 1470706750,
    ),
  ),
  'nocache_hash' => '2190657a934f2ea9dc0-49392393',
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
                            <input type="text" class="m-wrap span12" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['documento'];?>
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
                            <textarea name="descripcion"><?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>
</textarea>
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
    
</div>