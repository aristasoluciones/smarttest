<?php /* Smarty version Smarty3-b7, created on 2016-04-17 08:59:28
         compiled from "C:/wamp/www/ceva/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2870571396c07fcfd5-86101132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab5f1bf53e0f8e4df79f389052e69a4e77192d8' => 
    array (
      0 => 'C:/wamp/www/ceva/templates/index.tpl',
      1 => 1460901566,
    ),
  ),
  'nocache_hash' => '2870571396c07fcfd5-86101132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/1-default-meta.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/2-default-css.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

</head>

<body class="page-header-fixed page-boxed">

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    
	<!-- BEGIN CONTAINER -->
	<div class="page-container">

		

		<div class="page-sidebar nav-collapse collapse">
			<?php if ($_smarty_tpl->getVariable('usr')->value['tipo']=='admin'){?>
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/menus/main.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			<?php }?>
			
			<?php if ($_smarty_tpl->getVariable('usr')->value['tipo']=='operacion'){?>
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/menus/main-operacion.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			<?php }?>
			
		</div>        

		<!-- BEGIN PAGE -->
		<div class="page-content">
			<div class="rows">
				<div class="span4">
				</div>
				<div class="span4">
					<div id="listarEstablo" style="">
						<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/listar-establo.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>

				</div>
				<div class="span4">
				</div>
			</div>	
        <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/3-default-js.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>
    
</body>
</html>