<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:33
         compiled from "C:/wamp/www/ceva/templates/lists/tratamiento-animal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1421556a3be9207094-85815384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec4d90362afaba9e6cc9c77ee6adab9a50c27622' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/tratamiento-animal.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '1421556a3be9207094-85815384',
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
            <th class="" width="" rowspan="2"><div align="center">Vaca</div></th>
            <th class="" width="" rowspan="2"><div align="center">Registro</div></th>
            <th class="" width="" rowspan="2"><div align="center">Lactancia</div></th>
            <th class="" width="" rowspan="2"><div align="center">DEL</div></th>
            <th class="" width="" colspan="4"><div align="center">Cuarto</div></th>
            <th class="" width="" rowspan="2"><div align="center">Mastitis</div></th>
            <th class="" width="" rowspan="2"><div align="center">Evolucion</div></th>
            <th class="" width="" rowspan="2"><div align="center">Diagnostico</div></th>
            <th class="" width="" rowspan="2"><div align="center">Protocolo/Estado</div></th>
            <th class="" width="" rowspan="2"><div align="center">Productos</div></th>
            <th class="" width="" rowspan="2"><div align="center">Acci&oacute;n</div></th>
        </tr>
		
		<tr>
			<th class="hidden-480" width=""><div align="center">1</div></th>
			<th class="hidden-480" width=""><div align="center">2</div></th>
			<th class="hidden-480" width=""><div align="center">3</div></th>
			<th class="hidden-480" width=""><div align="center">4</div></th>
			
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['numVaca'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fechaIngreso'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['lactancia'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['del'];?>
</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['c1'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['c2'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['c3'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['c4'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['nombreMastitis'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['nombrePrueba'];?>
 <br> <?php echo $_smarty_tpl->getVariable('item')->value['nombreResultado'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['nombreDiagnostico'];?>
</div></td>
            <td><div align="center">(<?php echo $_smarty_tpl->getVariable('item')->value['status'];?>
)</div></td>
            <td><div align="center">
				<?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['productos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['producto']->key;
?>
					<?php echo $_smarty_tpl->getVariable('producto')->value['nombre'];?>
 - <?php echo $_smarty_tpl->getVariable('producto')->value['cantidad'];?>
 ml - <?php echo $_smarty_tpl->getVariable('producto')->value['vAdministracion'];?>
 <br>
				<?php }} else { ?>
				Sin producto
				 <?php } ?>
			</div>
			
			</td>
            <td><div align="center">
			<?php if ($_smarty_tpl->getVariable('item')->value['statusDia']=='no'){?>
				<a href="javascript:void(0)" onClick="Actualizar(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Actulizar">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/arrow-circle-double-135.png" border="0">
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('item')->value['statusDia']=='si'){?>
            <a href="javascript:void(0)" onClick="ViewReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Ver Detalles">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Editar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
            </a>
			<?php }?>
          
            </div>
            </td>
        </tr>
        <?php }} else { ?>
        <tr class="odd gradeX">
        	<td colspan="14"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
