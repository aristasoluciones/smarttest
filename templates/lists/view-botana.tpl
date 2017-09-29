{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3" style="background:white">
    <thead>
        <tr>
            <th width="200"><div align="center">Platillo</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$ltsBotana item=item key=key}        	
        <tr class="odd gradeX" style="background:white">
            <td style="background:white">{$item.nombre}</td>

            <td style="background:white">
			<div align="center" style="background:white">

				<a href="javascript:void(0)" onClick="DeleteBotana({$item.detalle_listaId},{$listaId})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
				</a>

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