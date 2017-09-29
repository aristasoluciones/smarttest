<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                Incidencia
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" style="" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
	
	<div class="portlet-body" id="tblfiltro">
		{include file="{$DOC_ROOT}/templates/forms/filtro-incidencia.tpl"}

	</div>
        
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Listado</div>
            <div class="actions">            
            	<a href="javascript:void(0)" class="btn blue" onClick="Reporte_pdf()" title="Exportar Tabla a PDF">
					<img src="{$WEB_ROOT}/images/icons/blue-document-pdf-text.png" border="0"> Exportar
				</a>
				{*
				<a href="javascript:void(0)" class="btn blue" onclick="ReporteExel()" title="Exportar excel">
					<img src="{$WEB_ROOT}/images/icons/document-excel-table.png" border="0" />Exportar
				</a>*}
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
        </div>
    </div>
</div>