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
            <div class="caption"><i class="icon-cogs"></i>Estadistica</div>
            <div class="actions">            
            	
              <a href="{$WEB_ROOT}/graficas" class="btn green" target="_blank"></i> Graficas </a>
              <a href="#" onClick="exportarExcel()" class="btn yellow"><i class="icon-print"></i> Exportar </a>
			  <form method="POST" id="frmfiltro" action="{$WEB_ROOT}/ajax/exportar.php">
				<input type="hidden" name="type" value="estadistica">
			  </form>
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
        </div>
    </div>
</div>