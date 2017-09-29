<?php /* Smarty version Smarty3-b7, created on 2015-05-30 17:38:28
         compiled from "C:/wamp/www/ceva/templates/lists/incidencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:438556a3be4b0f443-96228006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36e0ed9d41b20307ca14a3b8cffd4e3007424a5' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/lists/incidencia.tpl',
      1 => 1428618903,
    ),
  ),
  'nocache_hash' => '438556a3be4b0f443-96228006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	 <div class="scrollX">
<table class="table table-striped table-bordered table-hover scrollX" id="sample_3">
    <thead>
        <tr>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Fecha de ingreso</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">vaca</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Lact</div></th>
            <th class="hidden-480" rowspan="2" ><div align="center">Corral</div></th>
            <th class="hidden-480" rowspan="2" ><div align="center">DEL</div></th>
            <th class="hidden-480" width="" colspan="4" ><div align="center">Cuarto</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Tipo de mastitis</div></th>
            <th class="hidden-480" width="" colspan="<?php echo $_smarty_tpl->getVariable('registros')->value['numeroDias'];?>
" ><div align="center">Dias del mes</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Diagnostico</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Acci&oacute;n</div></th>
        </tr>
		<tr>
			<th class="hidden-480" width=""><div align="center">1</div></th>
			<th class="hidden-480" width=""><div align="center">2</div></th>
			<th class="hidden-480" width=""><div align="center">3</div></th>
			<th class="hidden-480" width=""><div align="center">4</div></th>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['listDias']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
				<th class="hidden-480" width=""><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['dia'];?>
</div></th>
			<?php }} ?>

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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['DIA_SEMANA'];?>
 <?php echo $_smarty_tpl->getVariable('item')->value['fechaIngreso'];?>
</td>
            <td>
				<div align="center" <?php if ($_smarty_tpl->getVariable('item')->value['reincidencia']=='si'){?>style="color: blue;"<?php }?> ><?php echo $_smarty_tpl->getVariable('item')->value['numVaca'];?>

		
				</div>
			</td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['lactancia'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['corral'];?>
</div></td>
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['del'];?>
</div></td>
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
			
			
			<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['dia'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['listDias']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['dia']->value = $_smarty_tpl->tpl_vars['item2']->key;
?> 
				<td>
					<div align="center" >
					
						<?php if ($_smarty_tpl->getVariable('item2')->value['statusDia']=='si'){?>
							<a href="javascript:void(0)"  style="font-weight:bold;" onClick="ViewDia('<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
','<?php echo $_smarty_tpl->getVariable('item2')->value['fechaView'];?>
')" title="Ver detalles del dia"  >
								<?php echo $_smarty_tpl->getVariable('item2')->value['accion'];?>

							</a>
						<?php }else{ ?>
							<?php echo $_smarty_tpl->getVariable('item2')->value['accion'];?>

						<?php }?>
					
					</div>
					
					
				</td>
			<?php }} ?>
			
            <td><div align="center"><?php echo $_smarty_tpl->getVariable('item')->value['nombreDiagnostico'];?>
</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="ViewReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Ver Detalles">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a>
           <!--  <a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Editar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Eliminar">
            	<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" border="0">
            </a> -->
            </div>
            </td>
        </tr>
        <?php }} else { ?>
        <tr class="odd gradeX">
        	<td colspan="10"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        <?php } ?>
    </tbody>

</table>
</div>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

