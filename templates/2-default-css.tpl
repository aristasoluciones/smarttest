{if $page!="do_encuesta"}

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{$WEB_ROOT}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="{$WEB_ROOT}/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="{$WEB_ROOT}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="{$WEB_ROOT}/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
<link href="{$WEB_ROOT}/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="{$WEB_ROOT}/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>

<link href="{$WEB_ROOT}/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
<!-- END GLOBAL MANDATORY STYLES -->

<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.css"/>


	

<link href="{$WEB_ROOT}/css/main.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="{$WEB_ROOT}/favicon.ico" />




<link rel="shortcut icon" href="{$WEB_ROOT}/favicon.ico" />
{if $miColor eq 1}
	<link href="{$WEB_ROOT}/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
{elseif $miColor eq 2}
	<link href="{$WEB_ROOT}/assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
{elseif $miColor eq 3}
	<link href="{$WEB_ROOT}/assets/css/themes/brown.css" rel="stylesheet" type="text/css" id="style_color"/>
{elseif $miColor eq 4}
	<link href="{$WEB_ROOT}/assets/css/themes/purple.css" rel="stylesheet" type="text/css" id="style_color"/>
{elseif $miColor eq 5}
	<link href="{$WEB_ROOT}/assets/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
{else}
	<link href="{$WEB_ROOT}/assets/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
{/if}

{else}
 
  <!-- <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/assets/jqm/themes/jquery.mobile.theme-1.4.5.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/assets/jqm/themes/arista_original.css"/>
  <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/assets/jqm/themes/jquery.mobile.icons.min.css"/>
  <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/assets/jqm/jquery.mobile.structure-1.4.5.min.css"/>
  <script type="text/javascript" src="{$WEB_ROOT}/assets/jqm/jquery.js" ></script> 
  <script type="text/javascript" src="{$WEB_ROOT}/assets/jqm/jquery.mobile-1.4.5.min.js" ></script>
  <script type="text/javascript" src="{$WEB_ROOT}/js/functionsjbm.js" ></script>
   <script type="text/javascript" src="{$WEB_ROOT}/js/{$page}.js" ></script>
  {/if}
