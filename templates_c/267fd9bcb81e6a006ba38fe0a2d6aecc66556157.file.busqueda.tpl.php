<?php /* Smarty version Smarty3-b7, created on 2016-08-14 12:19:06
         compiled from "C:/wamp/www/lavanderia/templates/busqueda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3114257b0a80a9de299-56344596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '267fd9bcb81e6a006ba38fe0a2d6aecc66556157' => 
    array (
      0 => 'C:/wamp/www/lavanderia/templates/busqueda.tpl',
      1 => 1470708947,
    ),
  ),
  'nocache_hash' => '3114257b0a80a9de299-56344596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                <!--Dependencia-->
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    <div class="">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Estadistica</div>
            <div class="actions">            
            	
               <a href="#" onClick="exportarExcel()" class="btn yellow"><i class="icon-print"></i> Exportar </a>
			  <form method="POST" id="frmfiltro" action="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/ajax/exportar.php">
				<input type="hidden" name="type" value="buscado">
			  </form>
            </div>
        </div>
		
        
<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			<li><a href="#portlet_tab2_3" data-toggle="tab">Busqueda por dependencia</a></li>
			<li><a href="#portlet_tab2_2" data-toggle="tab">Busqueda por tipo de Documento</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Buscado Por:</a></li>			
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
				<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas-b/q/1" class="btn green" target="_blank">
				</i> Graficas </a><br>
				<b>BUSQUEDA POR DEPENDENCIA</b> 
				<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
					<thead>
						<tr>
							<th width="200"><div align="center">Nombre de la Dependencia</div></th>
							<th width="200"><div align="center">Total</div></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['dependencia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>   
						<tr class="odd gradeX">
							<td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
							<td><?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
</td>
						</tr>
						<?php }} ?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				 <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas-b/q/2" class="btn green" target="_blank" >
				</i> Graficas </a><br>
				<b>BUSQUEDA POR TIPO DE DOCUMENTO</b>
				<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
					<thead>
						<tr>
							<th width="200"><div align="center">Nombre del Documento</div></th>
							<th width="200"><div align="center">Total</div></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['tipodocumento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>   
						<tr class="odd gradeX">
							<td><?php echo $_smarty_tpl->getVariable('item')->value['documento'];?>
</td>
							<td><?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
</td>
						</tr>
						<?php }} ?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="portlet_tab2_3">
				 <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas-b/q/3" class="btn green" target="_blank">
				</i> Graficas </a><br>
				<b>BUSCADOR POR:</b>
				<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
					<thead>
						<tr>
							<th width="200"><div align="center">Nombre de la Dependencia</div></th>
							<th width="200"><div align="center">Total</div></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['buscarPor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>   
						<tr class="odd gradeX">
							<td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
							<td><?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
</td>
						</tr>
						<?php }} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>   
</div>
    </div>
</div>