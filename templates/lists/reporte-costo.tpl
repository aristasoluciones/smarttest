<h3 class="form-section">Costo por Protocolo</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Vacas</th>
					<th class="">Veces administrado</th>
					<th class="">Productos</th>
					<th class="">Costo por protocolo</th>
					<th class="">Costo total</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$registros.listaTratamiento item=item key=key}
				<tr>
					<td class="">{$item.nombre} # {$item.numTratamiento}</td>
					<td class="">{$item.totalIncidencia}</td>
					<td class="">{$item.totalAdministradoProtocolo}</td>
					<td class="">
					{foreach from=$item.productos item=item2 key=key2}
					
					{$key2 + 1}) {$item2.nombre}<br>
					{/foreach}
					</td>
					<td class="">${$item.costo|number_format:2:'.':','}</td>
					<td class="">${$item.costoTotalProtocolo|number_format:2:'.':','}</td>
				</tr>
				 {foreachelse}
				<tr class="odd gradeX">
					<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				{/foreach}
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold">{$registros.array_totales.totalIncidencia}</span></td>
					<td><span class="text bold">{$registros.array_totales.totalAdministradoProtocolo}</span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold">${$registros.array_totales.costo|number_format:2:'.':','}</span></td>
					<td><span class="text bold">${$registros.array_totales.costoTotalProtocolo|number_format:2:'.':','}</span> </td>
				</tr>
			</tfoot>
		
		</table>
		
<h3 class="form-section">Costo de Descarte</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Vacas</th>
					<th class="">Total de dias de descarte</th>
					<th class=""> Litros de descarte</th>
					<th class="">Costo de descarte</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$registros.listaTratamiento item=item key=key}
				<tr>
					<td class="">{$item.nombre} # {$item.numTratamiento}</td>
					<td class="">{$item.totalIncidencia|default:0}</td>
					<td class="">{$item.totalAdministradoDescarte|default:0}</td>
					<td class="">{$item.litroDescarte|default:0}</td>
					<td class="">${$item.costoDescarte|number_format:2:'.':','}</td>
				</tr>
				 {foreachelse}
				<tr class="odd gradeX">
					<td colspan="5"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				{/foreach}
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold">{$registros.array_totales.totalIncidencia}</span></td>
					<td><span class="text bold">{$registros.array_totales.totalAdministradoDescarte}</span></td>

					<td><span class="text bold">{$registros.array_totales.litroDescarte|number_format:2:'.':','}</span></td>
					<td><span class="text bold">${$registros.array_totales.costoDescarte|number_format:2:'.':','}</span></td>
					
				</tr>
			</tfoot>
		
		</table>
		
<h3 class="form-section">Costo Total por Mastitis</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Costo de tratamiento</th>
					<th class="">Costo de descarte</th>
					<th class="">Costo total</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$registros.listaTratamiento item=item key=key}
				<tr>
					<td class="">{$item.nombre} # {$item.numTratamiento}</td>
					<td class="">${$item.costoTotalProtocolo|number_format:2:'.':','}</td>
					<td class="">${$item.costoDescarte|number_format:2:'.':','}</td>
					<td class="">${$item.costoTotalMastis|number_format:2:'.':','}</td>
				</tr>
				 {foreachelse}
				<tr class="odd gradeX">
					<td colspan="4"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				{/foreach}
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales</span></td>
					<td><span class="text bold">${$registros.array_totales.costoTotalProtocolo|number_format:2:'.':','}</span> </td>
					<td><span class="text bold">${$registros.array_totales.costoDescarte|number_format:2:'.':','}</span></td>
					<td><span class="text bold">${$registros.array_totales.costoTotalMastis|number_format:2:'.':','}</span></td>
					
				</tr>
			</tfoot>
		
		</table>
		


<div class="row-fluid">
		
		<div class="span3 "></div>
		<div class="span6 ">
			<img src="{$WEB_ROOT}/grafica/reporte_costo.png?{2|rand:200}" alt="Smiley face" class="span12" >
		</div>
		<div class="span3 "></div>
</div>



