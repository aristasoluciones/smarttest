<?php /* Smarty version Smarty3-b7, created on 2016-08-03 21:59:55
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/doc-observados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2706557a2afab0b5597-49222454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9943df3c29adb218307dd1c661b6819218b08c78' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/doc-observados.tpl',
      1 => 1470279592,
    ),
  ),
  'nocache_hash' => '2706557a2afab0b5597-49222454',
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
    	<strong>!Exito!</strong> El documento se guardo corretamente
</div>
<?php }?> 


<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Clave</div></th>
            <th width="200"><div align="center">Titulo del Documento</div></th>
            <th width="200"><div align="center">Descripcion</div></th>
            <th width="200"><div align="center">Publico</div></th>
            <th width="200"><div align="center">Archivo</div></th>
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
            <td>
				<?php if ($_smarty_tpl->getVariable('item')->value['existeArchivo']=="si"){?>
					El Archivo existe en el servidor
				<?php }else{ ?>
					<font color="red">El Archivo No existe en el servidor</font>
				<?php }?>
			</td>
    
            <td><div align="center">
			<?php if ($_smarty_tpl->getVariable('item')->value['existeArchivo']=="si"){?>
            <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/documentos/<?php echo $_smarty_tpl->getVariable('item')->value['ruta'];?>
"  target="_blank" title="Ver Documento"> 
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a>
			<?php }?>
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
            </a>--><!--
				<?php if ($_smarty_tpl->getVariable('item')->value['abiertoCiudadano']=="si"){?>
				<a href="javascript:void(0)" onClick="closeOpen(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
,'no')" title="PRIVADO">
					 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/open.jpg" border="0">
				</a>
				<?php }else{ ?>
				<a href="javascript:void(0)" onClick="closeOpen(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
,'si')" title="PUBLICO">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/close.jpg" border="0">
				</a>
				<?php }?>
				<a href="javascript:void(0)" onClick="viewCertificado(<?php echo $_smarty_tpl->getVariable('item')->value['documentoId'];?>
)" title="CERTIFICADO DE VALIDEZ">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/blue-document-pdf-text.png" border="0">
				</a>-->
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
