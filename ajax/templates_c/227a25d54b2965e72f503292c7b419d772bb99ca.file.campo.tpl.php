<?php /* Smarty version Smarty3-b7, created on 2016-08-03 18:02:36
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/boxes/campo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193957a2780cc17fa6-73122701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227a25d54b2965e72f503292c7b419d772bb99ca' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/boxes/campo.tpl',
      1 => 1470265345,
    ),
  ),
  'nocache_hash' => '1193957a2780cc17fa6-73122701',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1"> <?php echo $_smarty_tpl->getVariable('titleFrm')->value;?>
</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="SaveRegCampo()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <?php }?>
</div>