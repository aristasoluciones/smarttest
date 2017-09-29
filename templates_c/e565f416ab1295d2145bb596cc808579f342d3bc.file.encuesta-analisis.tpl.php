<?php /* Smarty version Smarty3-b7, created on 2017-02-28 23:57:38
         compiled from "C:/wamp/www/encuesta/templates/lists/encuesta-analisis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2052558b662d26b8e93-83036489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e565f416ab1295d2145bb596cc808579f342d3bc' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/lists/encuesta-analisis.tpl',
      1 => 1488347855,
    ),
  ),
  'nocache_hash' => '2052558b662d26b8e93-83036489',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
	<div style=" float:left; height:300px">		
			<table class="table table-striped table-bordered table-hover" style=" float:left;">
				
				<tr>
					<td colspan="2">
					<b>
						<?php echo $_smarty_tpl->getVariable('item')->value['pregunta'];?>
 
						 <a  href="" title="VER GRAFICA">
							<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/chart-pie.png" border="0">
						</a>
					</b>
					</td>
				</tr>
				<tr >
					<td>Pregunta</td>
					<td>Total</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['respuesta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>   
				<tr>
					<td><?php echo $_smarty_tpl->getVariable('item2')->value['respuesta'];?>
</td>
					<td><?php echo $_smarty_tpl->getVariable('item2')->value['Total'];?>
</td>
				</tr>
				<?php }} ?>
			</table>

	</div>
	<?php ob_start();?><?php echo ($_smarty_tpl->getVariable('key')->value+1)%8;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?>
	<hr>
	<div style="clear:both"></div>
	<br>
	<br>
	<br>
	<?php }?>
<?php }} ?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
