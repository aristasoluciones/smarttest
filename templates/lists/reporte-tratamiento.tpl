<h3 class="form-section">Protocolo de Tratamiento</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Vacas</th>
					<th class="">Porcentaje</th>
					<th class="">Total de dias de enfermeria</th>
					<th class="">Dias de tratamiento</th>
					<th class="">dia de descarte</th>
					<th class="">dia de evaluacion</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$registros.listaTratamiento item=item key=key}
				<tr>
					<td class="">{$item.nombre} # {$item.numTratamiento}</td>
					<td class="">{$item.totalIncidencia}</td>
					<td class="">{$item.porcentaje|string_format:"%.2f"} %</td>
					<td class="">{$item.totalDiasEnfermeria|default:0}</td>
					<td class="">{$item.diaEnfermeria}</td>
					<td class="">{$item.diaDescarte}</td>
					<td class="">{$item.diaEvaluacion}</td>
					
				</tr>
				 {foreachelse}
				<tr class="odd gradeX">
					<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
						
				{/foreach}
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold">{$registros.array_totales.totalIncidencia}</span></td>
					<td><span class="text bold">{$registros.array_totales.porcentaje|string_format:"%.2f"} %</span></td>
					<td><span class="text bold">{$registros.array_totales.totalDiaEnfermeria}</span></td>
					<td><span class="text bold">{$registros.array_totales.diaEnfermeria}</span></td>
					<td><span class="text bold">{$registros.array_totales.diaDescarte}</span> </td>
					<td><span class="text bold">{$registros.array_totales.diaEvaluacion}</span> </td>
				</tr>
			</tfoot>
		
		</table>
		
<h3 class="form-section">Eficiancia</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Protocolo</th>
					<th class="">Tipo de mastitis</th>
					<th class="">Vacas</th>
					<th class="">porcentaje</th>
					<th class="">Dias de tratamiento</th>
					<th class="">Dias promedio por protocolo por vaca</th>
					<th class="">Vacas curadas con el protocolo</th>
					<th class="">Porcentaje curadas</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$registros.listaTratamiento item=item key=key}
				<tr>
					<td class="">{$item.nombre} # {$item.numTratamiento}</td>
					<td class="">
						{foreach from=$item.mastitis item=item2 key=key2}
							{$item2.nombre} <br>
						{/foreach}
						
						
					</td>
					<td class="">
						{foreach from=$item.mastitis item=item2 key=key2}
							{$item2.totalVaca|default:0} <br>
						{/foreach}
						
						
					
					</td>
					<td class="">
						{foreach from=$item.mastitis item=item2 key=key2}
							{if $item.totalporcentaje neq '0'}
								{(($item2.totalVaca * 100) / $item.totalporcentaje)|string_format:"%.2f"} %<br>
							{/if}
						{/foreach}
					</td>
					
					<td class="">
						{foreach from=$item.mastitis item=item2 key=key2}
							{$item2.diaTratamiento|default:0} <br>
						{/foreach}
					
					</td>
					<td class="">
						{foreach from=$item.mastitis item=item2 key=key2}
							{if $item2.totalVaca neq '0'}
								{(($item2.diaTratamiento) / $item2.totalVaca)|string_format:"%.2f"} <br>
							{else}
							<br>
							{/if}
						{/foreach}
					</td>
					
					<td class="">
						{$item.curadasProtocolo|default:0}
					
					</td>
					
					<td class="">
						{$item.porcentaje_curadasProtocolo|string_format:"%.2f"|default:0} %
					</td>
				</tr>
				 {foreachelse}
				<tr class="odd gradeX">
					<td colspan="8"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				{/foreach}
			</tbody>
		
			<tfoot>
				<tr>
					<td><span class="text bold">Totales </span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold">{$registros.array_totales.totalVaca}</span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold">{$registros.array_totales.diaTratamiento}</span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
				</tr>
			</tfoot>
		
		</table>
		

<div class="row-fluid">
		
		<div class="span3 "></div>
		<div class="span6 ">
			<img src="{$WEB_ROOT}/grafica/curada_protocolo.jpg?{2|rand:200}" alt="Smiley face" class="span12" >
		</div>
		<div class="span3 "></div>
</div>

<div class="row-fluid">
		
		<div class="span3 "></div>
		<div class="span6 ">
			<img src="{$WEB_ROOT}/grafica/usado_protocolo.jpg?{2|rand:200}" alt="Smiley face" class="span12" >
		</div>
		<div class="span3 "></div>
</div>



