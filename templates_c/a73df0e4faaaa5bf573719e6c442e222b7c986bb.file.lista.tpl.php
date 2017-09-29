<?php /* Smarty version Smarty3-b7, created on 2017-02-13 12:30:02
         compiled from "C:/wamp/www/le/templates/lists/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3019558a1fb2aaf9cb0-88589513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73df0e4faaaa5bf573719e6c442e222b7c986bb' => 
    array (
      0 => 'C:/wamp/www/le/templates/lists/lista.tpl',
      1 => 1487010600,
    ),
  ),
  'nocache_hash' => '3019558a1fb2aaf9cb0-88589513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Folio</div></th>
            <th width="200"><div align="center">Fecha Elaboracion</div></th>
            <th width="200"><div align="center">Numero de Listas</div></th>
            <th width="200"><div align="center">Clientes</div></th>
            <th class="hidden-480" width="150"><div align="center">Usuario</div></th>
            <th class="hidden-480" width="150"><div align="center">Estatus</div></th>
            <th class="hidden-480" width="100"><div align="center">Imprimir Listas Generales</div></th>
            <th class="hidden-480" width="100"><div align="center">Acciones</div></th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['suma_listaId'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fechaElaboracion'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['numListas'];?>
</td>
            <td>
				<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['clientes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?> 
					<?php echo $_smarty_tpl->getVariable('item2')->value['nombre'];?>
/
				<?php }} ?>
			</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['status'];?>
</div></td>
            <td>
			<div align="center">
				<!--<a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Editar">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
				</a>-->
				<!--<a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Eliminar">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" border="0">
				</a>
			
				<a href="javascript:void(0)" onClick="pdfUnitario(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)"  class="btn blue" style="width:100px">
					Por Menu
				</a>
				<a href="javascript:void(0)" onClick="pdfTotal(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" class="btn yellow" style="width:100px">
					 General
				</a>
				
				<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-list/q/<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
" onClick="" class="btn gray" style="width:100px">
					 Editar
				</a>
				-->
			
				<a href="javascript:void(0)" onClick="pdfProveedor(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)"    style="background:#B43104; color:white">
					Lista&nbsp;Compras
				</a><br>
				<!--<a href="javascript:void(0)" onClick="vistaPreviaAdd(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)"   style="background:#2E9AFE; color:white" style="width:100px">
					General
				</a>-->
            </div>
            </td>
			<td>
				<a href="javascript:void(0)" onClick="verLista(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)"    style="background:#2E9AFE; color:white">
					Ver Listas
				</a>
				<!--<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-list/var/<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
" onClick="" class="btn gray" style="width:100px">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
				</a>-->
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
