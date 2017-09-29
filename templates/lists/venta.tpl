{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">clave</div></th>
            <th class="hidden-480" width="150"><div align="center">Fecha de venta</div></th>
            <th class="hidden-480" width="150"><div align="center">Subtotal</div></th>
            <th class="hidden-480" width="150"><div align="center">I.V.A.</div></th>
            <th class="hidden-480" width="150"><div align="center">Total</div></th>
            <th class="hidden-480" width="150"><div align="center">Descripcion</div></th>
            <th class="hidden-480" width="150"><div align="center">Vigencia</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$info.lstvta item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.ventaId}</td>
            <td>{$item.fecha}</td>
            <td><div align="center">{$item.subtotal}</div></td>
            <td><div align="center">{$item.iva}</div></td>
            <td><div align="center">{$item.montoTotal}</div></td>
            <td><div align="center">{$item.descripcion}</div></td>
            <td><div align="center">{$item.vigenciaInicio} - {$item.vigenciaFin}</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="addTarea('{$item.ventaId}','agregar')" title="AGREGAR TAREA">
            	<img src="{$WEB_ROOT}/images/icons/calendar_edit.png" border="0">
            </a>
			<!--
            <a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
            	<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
            </a>-->
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}