<?php /* Smarty version Smarty3-b7, created on 2016-04-21 21:04:47
         compiled from "C:/wamp/www/acervo/sistema/templates/documento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30635571986bfb6a893-21803946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060148259a750ff2ef77a4645412fdfc3db03dcc' => 
    array (
      0 => 'C:/wamp/www/acervo/sistema/templates/documento.tpl',
      1 => 1461270864,
    ),
  ),
  'nocache_hash' => '30635571986bfb6a893-21803946',
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
        
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Tipo Documento</div>
            <div class="actions">            
            	<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-documento" class="btn green" > 
                	<i class="icon-plus"></i> Agregar
                </a>
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>