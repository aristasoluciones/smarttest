<?php /* Smarty version Smarty3-b7, created on 2016-05-28 10:22:08
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/view-chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283865749b7a0602db2-16205373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aafd8e95952eca5c394f922209602bd51e27d90a' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/view-chat.tpl',
      1 => 1464448926,
    ),
  ),
  'nocache_hash' => '283865749b7a0602db2-16205373',
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
        
    <div class="portlet box ">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Mensajes</div>
            <div class="actions">            
            	<!--<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-chat" class="btn green" >
                	<i class="icon-plus"></i> Nuevo Mensaje
                </a>-->
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent" style="height:300px; overflow:scroll" class="showScroll lion">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
		<div>
		<center>
			<form id="frmGral">
			<input type="hidden" name="type" value="SaveMensaje">
			<input type="hidden" name="chatId" value="<?php echo $_smarty_tpl->getVariable('chatId')->value;?>
">
			<textarea name="mensaje" id="mensaje" style="width:900px"></textarea>
			</form>
			<br>
			<div id="loader">
			</div>
			 <button class="btn yellow" onclick="SaveMensaje()">Enviar</button>
		</center>
		
		</div>
    </div>
</div>