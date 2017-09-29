<?php /* Smarty version Smarty3-b7, created on 2016-07-09 16:08:49
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/estadistica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6027578167e1470e18-94804629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d807b7937c2863edeb5afe4eccb514fbf8c3c2' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/estadistica.tpl',
      1 => 1467754406,
    ),
  ),
  'nocache_hash' => '6027578167e1470e18-94804629',
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
            <div class="caption"><i class="icon-cogs"></i>Estadistica</div>
            <div class="actions">            
            	
              <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/graficas" class="btn green" target="_blank"></i> Graficas </a>
              <a href="#" onClick="exportarExcel()" class="btn yellow"><i class="icon-print"></i> Exportar </a>
			  <form method="POST" id="frmfiltro" action="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/ajax/exportar.php">
				<input type="hidden" name="type" value="estadistica">
			  </form>
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>