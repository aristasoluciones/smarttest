<?php /* Smarty version Smarty3-b7, created on 2017-02-17 16:03:03
         compiled from "C:/wamp/www/le/templates/forms/view-lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1573158a7731761d922-16499099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896522d90488d0f533c5f2ee8cecc6126f0ccf99' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/view-lista.tpl',
      1 => 1487368981,
    ),
  ),
  'nocache_hash' => '1573158a7731761d922-16499099',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
																				
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i></div>                
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['idReg'];?>
" />
                   
				   <table class="table table-striped table-bordered table-hover" id="sample_3">
						<tr>
							<td>Consecutivo</td>
							<td>Folio</td>
							<td>Cliente</td>
							<td>Acciones</td>
							<td>Editar</td>
						</tr>					
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lst')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
						<tr>
							<td><?php echo $_smarty_tpl->getVariable('key')->value+1;?>
</td>
							<td><?php echo $_smarty_tpl->getVariable('item')->value['listaId'];?>
</td>
							<td><?php if ($_smarty_tpl->getVariable('item')->value['nombre']==''){?> <?php echo $_smarty_tpl->getVariable('item')->value['clienteNuevo'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
 <?php }?></td>
							<td>
								<a href="javascript:void(0)" onClick="imprimeLista1(<?php echo $_smarty_tpl->getVariable('item')->value['listaId'];?>
)"   style="background:#2E9AFE; color:white" style="width:100px">
									Imprimir Lista
								</a><br>
								<a href="javascript:void(0)" onClick="imprimeLista2(<?php echo $_smarty_tpl->getVariable('item')->value['listaId'];?>
)"   style="background:#B43104; color:white" style="width:100px">
									Imprimir Lista Compras
								</a>
							</td>
							<td>
								<a  href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-list/q/<?php echo $_smarty_tpl->getVariable('item')->value['listaId'];?>
" title="Editar">
									<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.png" border="0">
								</a>
							</td>
						</tr>
						<?php }} ?>
				   </table>
				   
				   
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>