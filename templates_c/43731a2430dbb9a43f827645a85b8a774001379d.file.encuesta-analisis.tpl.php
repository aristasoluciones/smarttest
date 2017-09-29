<?php /* Smarty version Smarty3-b7, created on 2017-02-28 23:24:59
         compiled from "C:/wamp/www/encuesta/templates/encuesta-analisis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1928858b65b2ba91e83-87982861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43731a2430dbb9a43f827645a85b8a774001379d' => 
    array (
      0 => 'C:/wamp/www/encuesta/templates/encuesta-analisis.tpl',
      1 => 1488345897,
    ),
  ),
  'nocache_hash' => '1928858b65b2ba91e83-87982861',
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
			<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
<br>
			<?php echo $_smarty_tpl->getVariable('info')->value['inicio'];?>
 - <?php echo $_smarty_tpl->getVariable('info')->value['fin'];?>

            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
		<a  href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/encuesta"  class="btn yellow" >
				<i class="icon-plus"></i> Atras
			</a>
		 
		</div>
	</div>
	<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			<li><a href="#portlet_tab2_3" data-toggle="tab">Analisis</a></li>
			<li class=""><a href="#portlet_tab2_2" data-toggle="tab"> Preguntas Abiertas</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Resultados</a></li>			
						
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
						<div class="portlet box purple">
				<div class="portlet-title">
					<div class="caption"><i class="icon-cogs"></i></div>
					<div class="actions">            
						
					 
					</div>
				</div>
				<div class="portlet-body" id="tblContent">
					<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>
			</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				<div class="portlet-title">
				<div class="caption"></div>
				<div class="actions">            
				
				</div>
				</div>
				<div class="portlet-body" id="tblContent2">
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/res-abiertas.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_3">
				 <div class="portlet-title">
				<div class="caption"></div>
				<div class="actions">            
				
				</div>
				</div>
				<div class="portlet-body" id="tblContent2">
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/ciudadano.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>
			</div>
		</div>
	</div>
</div>
</div>   
			
</div>