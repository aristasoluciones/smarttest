<?php /* Smarty version Smarty3-b7, created on 2017-01-13 15:09:00
         compiled from "C:/wamp/www/le/templates/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8886587941ecb7be80-32403544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e376a8aeccc5fdd4a62eaef48c801db99dbcc4c' => 
    array (
      0 => 'C:/wamp/www/le/templates/lista.tpl',
      1 => 1484341738,
    ),
  ),
  'nocache_hash' => '8886587941ecb7be80-32403544',
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
                Listas
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
			<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/add-list/" class="btn green" >
				<i class="icon-plus"></i> Nueva Lista
			</a>
		   
		</div>
	</div>
	<div class="portlet-body" id="tblContent">
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	</div>
			
</div>