<?php /* Smarty version Smarty3-b7, created on 2016-07-05 16:29:29
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/graficas-b.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168577c26b92c6b60-79536275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f48b6ed08bbc3ff0a285b4ea907143222758dee5' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/graficas-b.tpl',
      1 => 1467689559,
    ),
  ),
  'nocache_hash' => '168577c26b92c6b60-79536275',
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

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/3-default-js.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	 <script type="text/javascript">
		// jQuery(document).ready(function() {    
		   // App.init(); // initlayout and core plugins		   
		// });
	</script>
	<script src="http://code.highcharts.com/highcharts.js"></script> 
<script src="http://code.highcharts.com/modules/exporting.js"></script>

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
	 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/img_se2.png" border="0" width="220" height="220" />
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
            <div class="caption"><i class="icon-cogs"></i>Graficas</div>
            <div class="actions">            
            	
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
		
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>

    </div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	
    
	
    
</body>
</html>