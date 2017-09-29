<?php /* Smarty version Smarty3-b7, created on 2017-02-09 18:50:14
         compiled from "C:/wamp/www/le/templates/lists/view-botana.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27438589d0e46a38c37-76924548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20c0cdc18d01f625c345e93e94ee6f52f8f9f2f' => 
    array (
      0 => 'C:/wamp/www/le/templates/lists/view-botana.tpl',
      1 => 1486687812,
    ),
  ),
  'nocache_hash' => '27438589d0e46a38c37-76924548',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<table class="table table-striped table-bordered table-hover" id="sample_3" style="background:white">
    <thead>
        <tr>
            <th width="200"><div align="center">Platillo</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ltsBotana')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr class="odd gradeX" style="background:white">
            <td style="background:white"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>

            <td style="background:white">
			<div align="center" style="background:white">

				<a href="javascript:void(0)" onClick="DeleteBotana(<?php echo $_smarty_tpl->getVariable('item')->value['detalle_listaId'];?>
,<?php echo $_smarty_tpl->getVariable('listaId')->value;?>
)" title="Eliminar">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.gif" border="0">
				</a>

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
