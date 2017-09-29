{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
	 <div class="scrollX">
<table class="table table-striped table-bordered table-hover scrollX" id="sample_3">
    <thead>
        <tr>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Fecha de ingreso</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">vaca</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Lact</div></th>
            <th class="hidden-480" rowspan="2" ><div align="center">Corral</div></th>
            <th class="hidden-480" rowspan="2" ><div align="center">DEL</div></th>
            <th class="hidden-480" width="" colspan="4" ><div align="center">Cuarto</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Tipo de mastitis</div></th>
            <th class="hidden-480" width="" colspan="{$registros.numeroDias}" ><div align="center">Dias del mes</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Diagnostico</div></th>
            <th class="hidden-480" width="" rowspan="2" ><div align="center">Acci&oacute;n</div></th>
        </tr>
		<tr>
			<th class="hidden-480" width=""><div align="center">1</div></th>
			<th class="hidden-480" width=""><div align="center">2</div></th>
			<th class="hidden-480" width=""><div align="center">3</div></th>
			<th class="hidden-480" width=""><div align="center">4</div></th>
			{foreach from=$registros.listDias item=item key=key} 
				<th class="hidden-480" width=""><div align="center">{$item.dia}</div></th>
			{/foreach}

        </tr>
    </thead>

    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.DIA_SEMANA} {$item.fechaIngreso}</td>
            <td>
				<div align="center" {if $item.reincidencia eq 'si'}style="color: blue;"{/if} >{$item.numVaca}
		
				</div>
			</td>
            <td><div align="center">{$item.lactancia}</div></td>
            <td><div align="center">{$item.corral}</div></td>
            <td><div align="center">{$item.del}</div></td>
            <td><div align="center">{$item.c1}</div></td>
            <td><div align="center">{$item.c2}</div></td>
            <td><div align="center">{$item.c3}</div></td>
            <td><div align="center">{$item.c4}</div></td>
            <td><div align="center">{$item.nombreMastitis}</div></td>
			
			
			{foreach from=$item.listDias item=item2 key=dia} 
				<td>
					<div align="center" >
					
						{if $item2.statusDia eq 'si'}
							<a href="javascript:void(0)"  style="font-weight:bold;" onClick="ViewDia('{$item.idReg}','{$item2.fechaView}')" title="Ver detalles del dia"  >
								{$item2.accion}
							</a>
						{else}
							{$item2.accion}
						{/if}
					
					</div>
					
					
				</td>
			{/foreach}
			
            <td><div align="center">{$item.nombreDiagnostico}</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="ViewReg({$item.idReg})" title="Ver Detalles">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
            </a>
           <!--  <a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
            	<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
            </a> -->
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="10"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>

</table>
</div>
{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}
