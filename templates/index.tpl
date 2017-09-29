<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}
</head>

<body>
 {if $page!="do_encuesta"}
<br>
<br>
   
	{include file="{$DOC_ROOT}/templates/header.tpl"}
    
	<!-- BEGIN CONTAINER -->
	<div class="page-container" >
			
		

		<div class="page-sidebar nav-collapse collapse">
			
				{include file="{$DOC_ROOT}/templates/menus/main.tpl"}
			
			
			{if $usr.tipo eq 'operacion'}
				{include file="{$DOC_ROOT}/templates/menus/main-operacion.tpl"}
			{/if}
			
		</div>        

		<!-- BEGIN PAGE -->
		<div class="page-content">
	
		
			<div class="rows">
				<div class="span4">
				</div>
				<div class="span4">
					

				</div>
				<div class="span4">
				</div>
			</div>	
        {include file="{$DOC_ROOT}/templates/{$page}.tpl"}
        </div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	{include file="{$DOC_ROOT}/templates/footer.tpl"}

	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
    
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>
{else}
 {include file="{$DOC_ROOT}/templates/{$page}.tpl"}	
{/if}	
    
</body>
</html>