{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<!-- BEGIN FORM-->
<div class="form-horizontal form-view">

	<h3 class="form-section">Informacion General</h3>
	<div class="row-fluid">
		<div class="span6 ">
			<div class="control-group">
				<label class="control-label" for="firstName">Rancho:</label>
				<div class="controls">
					<span class="text">{$registros.infoEstablo.nombre}</span>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="span6 ">
			
		</div>
		<!--/span-->
	</div>
	<!--/row-->
	<div class="row-fluid">
		<div class="span6 ">
			<div class="control-group">
				<label class="control-label" >Responsable:</label>
				<div class="controls">
					<span class="text">{$registros.infoEstablo.responsable}</span> 
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="span6 ">
			
		</div>
		<!--/span-->
	</div>
	<!--/row-->        
	<div class="row-fluid">
		<div class="span6 ">
			<div class="control-group">
				<label class="control-label" >Casos Total:</label>
				<div class="controls">
						<span class="text">{$registros.info.incidenciaTotal}</span> 
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="span6 ">
			
		</div>
		<!--/span-->
	</div>
	<!--/row-->  

	
	<h3 class="form-section">Cuarto</h3>
	
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">Cuartos</th>
						<th class="">Vaca</th>
						<th class="">Porcentaje (%)</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$registros.listCuarto item=item key=key}
					<tr>
						<td class="">{$item.nombre} - {$item.complemento}</td>
						<td class="">{$item.totalCuarto}</td>
						<td class="">{$item.porcentaje|string_format:"%.2f"} %</td>
					</tr>
					{/foreach}
				</tbody>
			
				<tfoot>
					<tr>
						<td><span class="text bold">Totales: </span></td>
						<td><span class="text bold">{$registros.info.cuartoVaca}</span></td>
						<td><span class="text bold">{$registros.info.cuartoPorcentaje|string_format:"%.2f"} %</span> </td>
					</tr>
				</tfoot>
			
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/grafica/cuarto.png?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>
	
<!-- 	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">Cuartos Enfermos</th>
						<th class="">Vaca</th>
						<th class="">Porcentaje (%)</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$registros.listCuarto item=item key=key}
					<tr>
						<td class="">{$item.nombre} - {$item.complemento}</td>
						<td class="">{$item.totalCuarto}</td>
						<td class="">{$item.porcentaje|string_format:"%.2f"} %</td>
					</tr>
					{/foreach}
				</tbody>
			
				<tfoot>
					<tr>
						<td><span class="text bold">Totales: </span></td>
						<td><span class="text bold">{$registros.info.cuartoVaca}</span></td>
						<td><span class="text bold">{$registros.info.cuartoPorcentaje} %</span> </td>
					</tr>
				</tfoot>
			
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/images/cuarto.jpg?{1|rand:20}" alt="Smiley face" class="span12" >

		</div>
	</div> -->
	
	<h3 class="form-section">Diagnostico</h3>
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">Diagnostico</th>
						<th class="">Vaca</th>
						<th class="">Porcentaje (%)</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$registros.listDiagnostico item=item key=key}
					<tr>
						<td class="">{$item.nombre}</td>
						<td class="">{$item.totalDiagnostico}</td>
						<td class="">{$item.porcentaje|string_format:"%.2f"} %</td>
					</tr>
					{/foreach}
				</tbody>
			
				<tfoot>
					<tr>
						<td><span class="text bold">Totales: </span></td>
						<td><span class="text bold">{$registros.info.diagnosticoVaca}</span></td>
						<td><span class="text bold">{$registros.info.diagnosticoPorcentaje|string_format:"%.2f"} %</span> </td>
					</tr>
				</tfoot>
			
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/grafica/diagnostico.png?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	<h3 class="form-section">Por dias</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class=""></th>
						{foreach from=$registros.array_info_dia item=item key=key}
						<th class="">{$item.nombreCorto}</th>
						{/foreach}
						<th class="">Total</th>
					</tr>
				</thead>
				
				<tbody>
				<tr>
					<td class="">Vaca</td>
					{foreach from=$registros.array_info_dia item=item key=key}
						<td class="">{$item.cantidadVaca|default:0}</td>
					{/foreach}
					<td class="">{$registros.info.diaVaca}</td>
				</tr>
				<tr>
					<td class="">%</td>
					{foreach from=$registros.array_info_dia item=item key=key}
						<td class="">{$item.porcentaje|string_format:"%.2f"}</td>
					{/foreach}
					<td class="">{$registros.info.diaPorcentaje}</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/grafica/por_dia.png?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	{*
	<h3 class="form-section">Reincidencias</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class="">0 - {$registros.infoEstablo.reincidenciaAutomatico}</th>
						<th class="">num - 50</th>
						<th class="">51 - 100</th>
						<th class="">mayor a 100</th>
					</tr>
				</thead>
				
				<tbody>
				<tr>
					<td class="">{$registros.array_reincidencia.0_automatico|default:0}</td>
					<td class="">{$registros.array_reincidencia.automatico_50|default:0}</td>
					<td class="">{$registros.array_reincidencia.50_100|default:0}</td>
					<td class="">{$registros.array_reincidencia.100|default:0}</td>
					

				
				</tr>

				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/images/reincidencia.png?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	*}
	
	<h3 class="form-section">DEL</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class=""></th>
						<th class="">0 - 5</th>
						<th class="">6 - 50</th>
						<th class="">51 - 100</th>
						<th class="">101 - 150</th>
						<th class="">151 - 200</th>
						<th class="">201 - 250</th>
						<th class="">251 - 300</th>
						<th class="">> 301</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="">V</td>
						{foreach from=$registros.array_del item=item key=key}
							<td class="">{$item.cantidad|default:0}</td>
							
						{/foreach}				
					</tr>
					
					<tr>
						<td class="">%</td>
						{foreach from=$registros.array_del item=item key=key}
							<td class="">{$item.porcentaje|string_format:"%.2f"}</td>
						{/foreach}				
					</tr>

				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/grafica/del.png?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	<h3 class="form-section">Lactancia</h3>
	
	<div class="row-fluid">
		<div class="span6 ">
			<table class="table table-striped table-bordered table-advance table-hover">
				<thead>
					<tr>
						<th class=""></th>
						<th class="">1</th>
						<th class="">2</th>
						<th class="">3</th>
						<th class="">4</th>
						<th class="">5</th>
						<th class="">6</th>
						<th class="">7</th>
						<th class="">8</th>
						<th class=""> < 9 </th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="">V</td>
						{foreach from=$registros.array_lactancia item=item key=key}
							<td class="">{$item.cantidad|default:0}</td>
							
						{/foreach}				
					</tr>
					
					<tr>
						<td class="">%</td>
						{foreach from=$registros.array_lactancia item=item key=key}
							<td class="">{$item.porcentaje|string_format:"%.2f"}</td>
						{/foreach}				
					</tr>

				</tbody>
			</table>
		</div>
		<div class="span6 ">
		
		<img src="{$WEB_ROOT}/grafica/lactancia.png?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<h3 class="form-section">Tipo de Mastitis</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
							Mastitis
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					{foreach from=$registros.listTipoMastitis item=item key=key}
						<div class="row-fluid">
							<div class="span2 ">
								{$item.nombre}
									
							</div>
							<div class="span2 ">
									{$item.totalMastitis}
							</div>
							<div class="span2 ">
									{$item.porcentaje|string_format:"%.2f"} %
							</div>
						</div>
					{/foreach}

					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.mastitisVaca}</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.mastitisPorcentaje|string_format:"%.2f"} %</span>
								
						</div>
					</div>
				</div>
					<div class="span5 ">
				
					<img src="{$WEB_ROOT}/grafica/mastitis.png?{2|rand:200}" alt="Smiley face" class="span12" >
	
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<h3 class="form-section">Bacteriologia</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
							<span class="text bold">Bacterias</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					{foreach from=$registros.listaAislamientoBac item=item key=key}
					
						<div class="row-fluid">
							<div class="span2 ">
								{$item.nombre}
									
							</div>
							<div class="span2 ">
									{$item.TotalBacteriologia}
							</div>
							<div class="span2 ">
									{$item.porcentaje|string_format:"%.2f"} %
							</div>
						</div>
					
					{/foreach}	
					
					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.bacteriologiaVaca}</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.bacteriologiaPorcentaje|string_format:"%.2f"} %</span>
								
						</div>
					</div>
				</div>
				<div class="span5 ">
			
				<img src="{$WEB_ROOT}/grafica/bacteria.png?{2|rand:200}" alt="Smiley face" class="span12" >

				</div>

				</div>
			</div>
		</div>
	</div>
	
	<h3 class="form-section">Corrales</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
						<span class="text bold">Corral</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					
					{foreach from=$registros.listCorral item=item key=key}
						<div class="row-fluid">
							<div class="span2 ">
								{$item.numeroCorral}
									
							</div>
							<div class="span2 ">
									{$item.totalCorral}
							</div>
							<div class="span2 ">
									{$item.porcentaje|string_format:"%.2f"} %
							</div>
						</div>
					{/foreach}
					
					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.corralVaca}</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.corralPorcentaje|string_format:"%.2f"} %</span>
								
						</div>
					</div>
				</div>
				<div class="span5 ">
			
				<img src="{$WEB_ROOT}/grafica/corrales.png?{2|rand:200}" alt="Smiley face" class="span12" >

				</div>


				</div>
			</div>
		</div>
	</div>
	
	{*
	<h3 class="form-section">Tratamiento</h3>
	
	<div class="row-fluid">
		<div class="span12 ">
			<div class="control-group">
				<label class="control-label" > </label>
				<div class="controls">
				<div class="span7 ">
					<div class="row-fluid">
						<div class="span2 ">
							<span class="text bold">Tratamiento</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">Vaca</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">porcentaje (%)</span>
								
						</div>
					</div>
					{foreach from=$registros.listTratamiento item=item key=key}
						<div class="row-fluid">
							<div class="span2 ">
								{$item.nombre}
									
							</div>
							<div class="span2 ">
							
								<span class="text bold">{$item.totalTratamiento}</span>
							</div>
							<div class="span2 ">
								<span class="text bold">{$item.porcentaje|string_format:"%.2f"} %</span>
							</div>
						</div>
					{/foreach}
					
					
					<div class="row-fluid">
						<div class="span2 ">
								
							<span class="text bold">Totales: </span>
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.tratamientoVaca}</span>
								
						</div>
						<div class="span2 ">
							<span class="text bold">{$registros.info.tratamientoPorcentaje|string_format:"%.2f"} %</span>
								
						</div>
					</div>
				</div>
				<div class="span5 ">
			
				<img src="{$WEB_ROOT}/images/tratamiento.png?{2|rand:200}" alt="Smiley face" class="span12" >

				</div>


				</div>
			</div>
		</div>
	</div>	*}
</div>
<!-- END FORM--> 


<!-- BEGIN PIE CHART PORTLET-->
				
				<!-- END PIE CHART PORTLET-->