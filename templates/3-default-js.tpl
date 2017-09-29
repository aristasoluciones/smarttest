{if $page!="do_encuesta"}
<!-- BEGIN CORE PLUGINS -->
<script src="{$WEB_ROOT}/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="{$WEB_ROOT}/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{$WEB_ROOT}/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
<script src="{$WEB_ROOT}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="{$WEB_ROOT}/assets/plugins/excanvas.min.js"></script>
<script src="{$WEB_ROOT}/assets/plugins/respond.min.js"></script>  
<![endif]-->   
<script src="{$WEB_ROOT}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{$WEB_ROOT}/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
<script src="{$WEB_ROOT}/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="{$WEB_ROOT}/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<script type="text/javascript" src="{$WEB_ROOT}/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>


<script src="{$WEB_ROOT}/assets/scripts/ui-jqueryui.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.flot.tooltip/0.7.1/jquery.flot.tooltip.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.resize.min.js"></script>
<script src="http://jslim89.github.com/assets/posts/2014-07-07-jquery-flot-create-a-stackable-bar-graph-and-line-graph-combination/jquery.flot.grow.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.stack.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>


<script src="{$WEB_ROOT}/assets/scripts/ui-jqueryui.js"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{$WEB_ROOT}/assets/scripts/app.js" type="text/javascript"></script> 
<script src="{$WEB_ROOT}/assets/scripts/form-components.js" type="text/javascript"></script> 

<!-- END PAGE LEVEL SCRIPTS -->  

<script src="{$WEB_ROOT}/js/functions.js" type="text/javascript"></script>    
<script src="{$WEB_ROOT}/js/{$page}.js" type="text/javascript"></script>

{else}
  
{/if}
