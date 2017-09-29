<?php /* Smarty version Smarty3-b7, created on 2017-02-13 14:47:52
         compiled from "C:/wamp/www/le/templates/forms/add-limite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2736558a21b78926d84-90680241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bcd214f486f21ffdb15f61522163c40001362ba' => 
    array (
      0 => 'C:/wamp/www/le/templates/forms/add-limite.tpl',
      1 => 1487018870,
    ),
  ),
  'nocache_hash' => '2736558a21b78926d84-90680241',
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
                   
				   <b>
					Limite:
				   </b>
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   <input type="text" name="limite" value="<?php echo $_smarty_tpl->getVariable('info')->value['limite'];?>
">
				   <br>
				   <b>
					Paquete
				   </b>
				   &nbsp;
				   &nbsp;
				   &nbsp;
				   &nbsp;
				      <input type="text" name="paquete" value="<?php echo $_smarty_tpl->getVariable('info')->value['paquete'];?>
">
                </form>
                <!-- END FORM-->                  
            </div>
        </div>
    </div>
    
    <span class="reqIcon">*</span> Campos requeridos
    
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
    
</div>