<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]--><head>
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}
	
    {if $page == "login"}	
	<link href="assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    {/if}
    
</head>

<body class="login">
	    
	<div class="logo" style="width:360px;  !important">

	</div>
    
	<div class="content">
		<center> <img src="{$WEB_ROOT}/images/logo.jpg" border="0" style="width:160px" /></center>
		{include file="{$DOC_ROOT}/templates/forms/login.tpl"}
		 <img src="{$WEB_ROOT}/images/logo.png" border="0" style="width:50px" />
	</div>
    	    
	{include file="{$DOC_ROOT}/templates/footer.tpl"}	
    {include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
    
	<script src="assets/scripts/app.js" type="text/javascript"></script>    
	<script type="text/javascript">
		jQuery(document).ready(function() {     
		  App.init();
		});
	</script>

</body>
</html>