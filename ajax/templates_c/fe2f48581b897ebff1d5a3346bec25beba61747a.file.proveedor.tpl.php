<?php /* Smarty version Smarty3-b7, created on 2017-01-25 16:33:23
         compiled from "C:/wamp/www/le/templates/boxes/proveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14146588927b33da220-96776670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2f48581b897ebff1d5a3346bec25beba61747a' => 
    array (
      0 => 'C:/wamp/www/le/templates/boxes/proveedor.tpl',
      1 => 1471196915,
    ),
  ),
  'nocache_hash' => '14146588927b33da220-96776670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"><?php if ($_smarty_tpl->getVariable('info')->value['view']==1){?>Detalles<?php }elseif($_smarty_tpl->getVariable('info')->value['idReg']){?>Editar<?php }else{ ?>Agregar<?php }?> <?php echo $_smarty_tpl->getVariable('titleFrm')->value;?>
</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
	 <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveReg()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>