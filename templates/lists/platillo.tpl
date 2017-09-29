{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Platillo</div></th>
            <th width="200"><div align="center">Nombre</div></th>
            <th class="hidden-480" width="150"><div align="center">Tipo</div></th>
            <th class="hidden-480" width="150"><div align="center">Total Ingredientes</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.platilloId}</td>
            <td>{$item.nombrePlatilo}</td>
            <td><div align="center">{$item.nombreTipo}</div></td>
            <td><div align="center">{$item.totalIngredientes}</div></td>

            <td>
			<div align="center">
				<!--<a href="javascript:void(0)" onClick="ViewReg({$item.idReg})" title="Ver Detalles">
					<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
				</a>-->
				<a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
					<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
				</a>
				<a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
				</a>
				<a href="{$WEB_ROOT}/add-ing/q/{$item.idReg}" title="AGREGAR INGREDIENTE">
					<img src="{$WEB_ROOT}/images/plus-circle-frame.png" border="0">
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