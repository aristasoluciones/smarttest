{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th class="" width="" rowspan="2"><div align="center">Fecha</div></th>
            <th class="" width="" rowspan="2"><div align="center">Observacion</div></th>
            <th class="" width="" rowspan="2"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.numVaca}</td>
            <td>{$item.fechaIngreso}</td>
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