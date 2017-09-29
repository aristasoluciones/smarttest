<?php /* Smarty version Smarty3-b7, created on 2016-08-08 21:18:35
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/documento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:541857a93d7b4816a4-92315746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30118d63151adebbdf19210a20d22764df3df898' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/documento.tpl',
      1 => 1470708159,
    ),
  ),
  'nocache_hash' => '541857a93d7b4816a4-92315746',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('msjConfirma')->value=="si"){?>
	<div class="alert alert-success">
    <button class="close" data-dismiss="alert"></button>
    	<strong>!Exito!</strong> El documento se guardo exitosamente
</div>
<?php }?> 


<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Clave</div></th>
            <th width="200"><div align="center">Titulo del Documento</div></th>
            <th width="200"><div align="center">Descripcion</div></th>
            <th width="200"><div align="center">Publico</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['documento'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['abiertoCiudadano'];?>
</td>
    
            <td><div align="center">

            <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/documentos/<?php echo $_smarty_tpl->getVariable('item')->value['ruta'];?>
"  target="_blank"> 
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a>
			<!--
            <a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
)" title="Editar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
)" title="Eliminar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" border="0">
            </a>-->
			
				<?php if ($_smarty_tpl->getVariable('item')->value['firma']==''){?>
				<a href="javascript:void(0)" id="btn_<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
" onClick="echalelaPoderosa(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
)" title="FIRMAR">
					 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/highlighter.png" border="0">
				</a>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('item')->value['abiertoCiudadano']=="si"){?>
				<a href="javascript:void(0)" onClick="closeOpen(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
,'no')" title="MOSTRAR AL PUBLICO">
					 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/open.jpg" border="0">
				</a>
				<?php }else{ ?>
				<a href="javascript:void(0)" onClick="closeOpen(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
,'si')" title="DOCUMENTO PRIVADO">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/close.jpg" border="0">
				</a>
				<?php }?>
				<a href="javascript:void(0)" onClick="viewCertificado(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
)" title="CERTIFICADO DE VALIDEZ">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/blue-document-pdf-text.png" border="0">
				</a>
			<!--<a href="javascript:void(0)" onClick="solicitar(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
)" title="Eliminar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/fill-090.png" border="0">
            </a>-->
            </div>
            </td>
        </tr>
        <?php }} else { ?>
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
