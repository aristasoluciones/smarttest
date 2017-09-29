{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th class="" width="" rowspan="2"><div align="center">Vaca</div></th>
            <th class="" width="" rowspan="2"><div align="center">Registro</div></th>
            <th class="" width="" rowspan="2"><div align="center">Lactancia</div></th>
            <th class="" width="" rowspan="2"><div align="center">DEL</div></th>
            <th class="" width="" colspan="4"><div align="center">Cuarto</div></th>
            <th class="" width="" rowspan="2"><div align="center">Mastitis</div></th>
            <th class="" width="" rowspan="2"><div align="center">Evolucion</div></th>
            <th class="" width="" rowspan="2"><div align="center">Diagnostico</div></th>
            <th class="" width="" rowspan="2"><div align="center">Protocolo/Estado</div></th>
            <th class="" width="" rowspan="2"><div align="center">Productos</div></th>
            <th class="" width="" rowspan="2"><div align="center">Acci&oacute;n</div></th>
        </tr>
		
		<tr>
			<th class="hidden-480" width=""><div align="center">1</div></th>
			<th class="hidden-480" width=""><div align="center">2</div></th>
			<th class="hidden-480" width=""><div align="center">3</div></th>
			<th class="hidden-480" width=""><div align="center">4</div></th>
			
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.numVaca}</td>
            <td>{$item.fechaIngreso}</td>
            <td>{$item.lactancia}</td>
            <td>{$item.del}</td>
            <td><div align="center">{$item.c1}</div></td>
            <td><div align="center">{$item.c2}</div></td>
            <td><div align="center">{$item.c3}</div></td>
            <td><div align="center">{$item.c4}</div></td>
            <td><div align="center">{$item.nombreMastitis}</div></td>
            <td><div align="center">{$item.nombrePrueba} <br> {$item.nombreResultado}</div></td>
            <td><div align="center">{$item.nombreDiagnostico}</div></td>
            <td><div align="center">({$item.status})</div></td>
            <td><div align="center">
				{foreach from=$item.productos item=producto key=key}
					{$producto.nombre} - {$producto.cantidad} ml - {$producto.vAdministracion} <br>
				{foreachelse}
				Sin producto
				 {/foreach}
			</div>
			
			</td>
            <td><div align="center">
			{if $item.statusDia eq 'no'}
				<a href="javascript:void(0)" onClick="Actualizar({$item.idReg})" title="Actulizar">
					<img src="{$WEB_ROOT}/images/icons/arrow-circle-double-135.png" border="0">
				</a>
			{/if}
			{if $item.statusDia eq 'si'}
            <a href="javascript:void(0)" onClick="ViewReg({$item.idReg})" title="Ver Detalles">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
			{/if}
          {*  <a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
            	<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
            </a>*}
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="14"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}