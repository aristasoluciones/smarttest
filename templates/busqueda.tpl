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
        
    <div class="">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Estadistica</div>
            <div class="actions">            
            	
               <a href="#" onClick="exportarExcel()" class="btn yellow"><i class="icon-print"></i> Exportar </a>
			  <form method="POST" id="frmfiltro" action="{$WEB_ROOT}/ajax/exportar.php">
				<input type="hidden" name="type" value="buscado">
			  </form>
            </div>
        </div>
		
        
<div class="portlet box purple tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			<li><a href="#portlet_tab2_3" data-toggle="tab">Busqueda por dependencia</a></li>
			<li><a href="#portlet_tab2_2" data-toggle="tab">Busqueda por tipo de Documento</a></li>
			<li class="active"><a href="#portlet_tab2_1" data-toggle="tab">Buscado Por:</a></li>			
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="portlet_tab2_1">				
				<a href="{$WEB_ROOT}/graficas-b/q/1" class="btn green" target="_blank">
				</i> Graficas </a><br>
				<b>BUSQUEDA POR DEPENDENCIA</b> 
				<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
					<thead>
						<tr>
							<th width="200"><div align="center">Nombre de la Dependencia</div></th>
							<th width="200"><div align="center">Total</div></th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$data.dependencia item=item key=key}   
						<tr class="odd gradeX">
							<td>{$item.nombre}</td>
							<td>{$item.count}</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="portlet_tab2_2">
				 <a href="{$WEB_ROOT}/graficas-b/q/2" class="btn green" target="_blank" >
				</i> Graficas </a><br>
				<b>BUSQUEDA POR TIPO DE DOCUMENTO</b>
				<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
					<thead>
						<tr>
							<th width="200"><div align="center">Nombre del Documento</div></th>
							<th width="200"><div align="center">Total</div></th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$data.tipodocumento item=item key=key}   
						<tr class="odd gradeX">
							<td>{$item.documento}</td>
							<td>{$item.count}</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="portlet_tab2_3">
				 <a href="{$WEB_ROOT}/graficas-b/q/3" class="btn green" target="_blank">
				</i> Graficas </a><br>
				<b>BUSCADOR POR:</b>
				<table class="table table-striped table-bordered table-hover" id="sample_3" style="width:100%">
					<thead>
						<tr>
							<th width="200"><div align="center">Nombre de la Dependencia</div></th>
							<th width="200"><div align="center">Total</div></th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$data.buscarPor item=item key=key}   
						<tr class="odd gradeX">
							<td>{$item.nombre}</td>
							<td>{$item.count}</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>   
</div>
    </div>
</div>