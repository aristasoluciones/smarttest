<?php /* Smarty version Smarty3-b7, created on 2016-07-12 16:48:24
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/campos-asignados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16768578565a810a5a4-57976055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e609a031dfeee1b5160ee140f48e185a76512956' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/campos-asignados.tpl',
      1 => 1468360099,
    ),
  ),
  'nocache_hash' => '16768578565a810a5a4-57976055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box gray"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Campos Asignados</div>                
            </div>
            <div class="portlet-body form">
              
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
	
<table class="table table-striped table-bordered table-hover" id="sample_3">
	<tr>
		<th>Nombre Base de Datos</th>
		<th>Nombre Usuario</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lst')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>  
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('item')->value['nombreCampo'];?>
</td>
		<td><?php echo $_smarty_tpl->getVariable('item')->value['nombreView'];?>
</td>
	</tr>
	<?php }} ?>
    </table>
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
	<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
   
</div>
    
</div>