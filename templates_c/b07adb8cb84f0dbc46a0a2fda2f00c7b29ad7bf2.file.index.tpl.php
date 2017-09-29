<?php /* Smarty version Smarty3-b7, created on 2016-08-02 15:12:22
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2316357a0fea6084cc3-02129894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b07adb8cb84f0dbc46a0a2fda2f00c7b29ad7bf2' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/index.tpl',
      1 => 1470168740,
    ),
  ),
  'nocache_hash' => '2316357a0fea6084cc3-02129894',
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

<body class="" >
<br>
<br>
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    
	<!-- BEGIN CONTAINER -->
	<div class="page-container" >
			
		

		<div class="page-sidebar nav-collapse collapse">
			
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/menus/main.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			
			
			<?php if ($_smarty_tpl->getVariable('usr')->value['tipo']=='operacion'){?>
				<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/menus/main-operacion.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			<?php }?>
			
		</div>        

		<!-- BEGIN PAGE -->
		<div class="page-content">
		
		<center> 
			<div style="top:-0px; position:relative">	  
			
			<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/img_se.png" border="0" width="230" height="220" />
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
	 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/img_se2.png" border="0" width="220" height="220" />
	 &nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
	 &nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
	 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.png" border="0" width="120" height="120" />


			</div>	
			</center>
		
			<div class="rows">
				<div class="span4">
				</div>
				<div class="span4">
					

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