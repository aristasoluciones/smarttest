<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
			{$info.nombre}<br>
			{$info.inicio} - {$info.fin}
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    
	<div class="portlet-title">
		<div class="caption"><i class="icon-cogs"></i></div>
		<div class="actions">            
		<a  href="{$WEB_ROOT}/encuesta"  class="btn yellow" >
				<i class="icon-plus"></i> Atras
			</a>
		 
		</div>
	</div>
	<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			<li><a href="#portlet_tab2_3" data-toggle="tab">Analisis</a></li>
			<li class=""><a href="#portlet_tab2_2" data-toggle="tab"> Preguntas Abiertas</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Resultados</a></li>			
						
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
						<div class="portlet box purple">
				<div class="portlet-title">
					<div class="caption"><i class="icon-cogs"></i></div>
					<div class="actions">            
						
					 
					</div>
				</div>
				<div class="portlet-body" id="tblContent">
					{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
				</div>
			</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				<div class="portlet-title">
				<div class="caption"></div>
				<div class="actions">            
				
				</div>
				</div>
				<div class="portlet-body" id="tblContent2">
				{include file="{$DOC_ROOT}/templates/lists/res-abiertas.tpl"}
				</div>
			</div>
			<div class="tab-pane" id="portlet_tab2_3">
				 <div class="portlet-title">
				<div class="caption"></div>
				<div class="actions">            
				
				</div>
				</div>
				<div class="portlet-body" id="tblContent2">
				{include file="{$DOC_ROOT}/templates/lists/ciudadano.tpl"}
				</div>
			</div>
		</div>
	</div>
</div>
</div>   
			
</div>