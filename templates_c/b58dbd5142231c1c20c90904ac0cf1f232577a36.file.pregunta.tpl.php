<?php /* Smarty version Smarty3-b7, created on 2017-02-24 20:28:31
         compiled from "C:/wamp/www/aristax/templates/pregunta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2638558b0ebcf777515-78758778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58dbd5142231c1c20c90904ac0cf1f232577a36' => 
    array (
      0 => 'C:/wamp/www/aristax/templates/pregunta.tpl',
      1 => 1487989663,
    ),
  ),
  'nocache_hash' => '2638558b0ebcf777515-78758778',
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
               Preguntas
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
			<a href="javascript:void(0)" class="btn green" onclick="AddReg()">
				<i class="icon-plus"></i> Agregar
			</a>
		 
		</div>
	</div>
	<input type="hidden" name="encuestaId" id="encuestaId" value="<?php echo $_smarty_tpl->getVariable('encuestaId')->value;?>
">
	<div class="portlet-body" id="tblContent">
		<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	</div>
			
</div>