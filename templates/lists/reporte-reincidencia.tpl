<h3 class="form-section">Reincidencia</h3>
	

		<table class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th class="">Vacas</th>
					<th class="">Reincidencia</th>
					<th class="">Fecha de Registro</th>
					<th class="">fecha de Alta</th>
					<th class="">Protocolo</th>
					<th class="">Dia al Evento anterior</th>
					<th class="">Costo</th>
					<th class="">Costo Total</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$registros.new_array item=item key=key}
				<tr>
					<td class="">{$item.numVaca}</td>
					<td class="">{$item.totalReincidencia}</td>
					<td class="">
						{foreach from=$item.infoIncidencia item=item2 key=key2}
							{$item2.fechaIngreso} <br>
						{/foreach}
					</td>
					
					<td class="">
						{foreach from=$item.infoIncidencia item=item2 key=key2}
							{$item2.fechaAlta} <br>
						{/foreach}
					</td>
					
					<td class="">
						{foreach from=$item.infoIncidencia item=item2 key=key2}
							{$item2.nombreTratamiento} <br>
						{/foreach}
					</td>
					
					<td class="">
					{foreach from=$item.infoIncidencia item=item2 key=key2}
							{$item2.diasEventoAnterior}<br>
						{/foreach}
					</td>
					
					<td class="">
						{foreach from=$item.infoIncidencia item=item2 key=key2}
							${$item2.costo|number_format:2:'.':','} <br>
						{/foreach}
					</td>

					<td class="">${$item.totalCosto|number_format:2:'.':','}</td>
				
				
					
				</tr>
				 {foreachelse}
				<tr class="odd gradeX">
					<td colspan="8"><div align="center">Ning&uacute;n registro encontrado.</div></td>
				</tr>
				{/foreach}
			</tbody>
		{*
			<tfoot>
				<tr>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span></td>
					<td><span class="text bold"></span> </td>
				</tr>
			</tfoot>
		*}
		</table>
		
	
	<h3 class="form-section"></h3>
	
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
		
		<img src="{$WEB_ROOT}/grafica/reincidencia.jpg?{2|rand:200}" alt="Smiley face" class="span12" >

		</div>
	</div>

