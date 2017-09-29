<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                Listas
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
			<a href="{$WEB_ROOT}/add-list/" class="btn green" >
				<i class="icon-plus"></i> Nueva Lista
			</a>
		   
		</div>
	</div>
	<div class="portlet-body" id="tblContent">
		{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
	</div>
			
</div>