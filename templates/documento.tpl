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
            <div class="caption"><i class="icon-cogs"></i>Documentos</div>
            <div class="actions">    
				<a href="javascript:void(0)" onClick="exportarExcel()" class="btn yellow" > 
                	<i class="icon-plus"></i> Exportar Excel
                </a>
				{if $Usr.tipo eq "super"}
				<a href="javascript:void(0)" onClick="exportarSql()" class="btn blue" > 
                	<i class="icon-plus"></i> Exportar Sql
                </a>
				{/if}
            	<a href="{$WEB_ROOT}/add-documento" class="btn green" > 
                	<i class="icon-plus"></i> Agregar
                </a>
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
			<form id="frmGral" name="frmGral" method="POST" action="{$WEB_ROOT}/ajax/exportar.php">
				<input type="hidden" name="type" value="documentos">
			</form>
        </div>
        <div class="portlet-body" id="tblContent">
            {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
        </div>
    </div>
</div>