<?php /* Smarty version Smarty3-b7, created on 2017-02-23 15:39:11
         compiled from "C:/wamp/www/le/templates/lists/add-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2455158af567fd10056-24940921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ea6744ec4174bcd1cc958097a96167d2b99ea1' => 
    array (
      0 => 'C:/wamp/www/le/templates/lists/add-list.tpl',
      1 => 1487885949,
    ),
  ),
  'nocache_hash' => '2455158af567fd10056-24940921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<font color="red">
<b>
	<a href="javascript:void(0)" onClick="cerrarAuto()" title="">
	Cerrar
	</a>
</b>
</font>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<table class="table table-striped table-bordered table-hover" id="sample_3" style="background:white; width:50%">
   
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>        	
        <tr class="odd gradeX" style="background:white">
            <td onmouseover='this.style.background="#A4A4A4"' onmouseout='this.style.background="white"' style="background:white">
				<a href="javascript:void(0)" onClick="addList(<?php echo $_smarty_tpl->getVariable('item2')->value['platilloId'];?>
,<?php echo $_smarty_tpl->getVariable('tipoplatilloId')->value;?>
)" title="">
					<?php echo $_smarty_tpl->getVariable('item2')->value['nombre'];?>
 
				</a>
			</td>
			<td onmouseover='this.style.background="#A4A4A4"' onmouseout='this.style.background="white"' style="background:white">
				<a href="javascript:void(0)" onClick="addList(<?php echo $_smarty_tpl->getVariable('item2')->value['platilloId'];?>
,<?php echo $_smarty_tpl->getVariable('tipoplatilloId')->value;?>
)" title="">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/ok.png" >
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</a>
			</td>
			<td onmouseover='this.style.background="#A4A4A4"' onmouseout='this.style.background="white"' style="background:white">
				<a href="javascript:void(0)" onClick="addList(<?php echo $_smarty_tpl->getVariable('item2')->value['platilloId'];?>
,<?php echo $_smarty_tpl->getVariable('tipoplatilloId')->value;?>
)" title="">
					<?php if ($_smarty_tpl->getVariable('item2')->value['totalIngredientes']==''){?>
						<font color="red" size="4">0</font>
					<?php }elseif($_smarty_tpl->getVariable('item2')->value['totalIngredientes']==0){?>
						<font color="red" size="4">0</font>
					<?php }else{ ?>
						<font color="" size="4"><?php echo $_smarty_tpl->getVariable('item2')->value['totalIngredientes'];?>
</font>
					<?php }?>
				</a>
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
