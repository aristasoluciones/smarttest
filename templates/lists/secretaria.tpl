{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre</div></th>
            <th width="200"><div align="center">Acronimo</div></th>
            <th class="hidden-480" width="150"><div align="center">Dirección</div></th>
            <th class="hidden-480" width="150"><div align="center">Telefono</div></th>
            <th class="hidden-480" width="200"><div align="center">Email</div></th>
            <th class="hidden-480" width="200"><div align="center">Responsable</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.nombre}</td>
            <td>{$item.acronimo}</td>
            <td>{$item.direccion}</td>
            <td><div align="center">{$item.telefono}</div></td>
            <td><div align="center">{$item.mail}</div></td>
            <td><div align="center">{$item.funcionarioId}</div></td>
            <td><div align="center">
		
            <a href="javascript:void(0)" onClick="ViewReg({$item.secretariaId})" title="Ver Detalles">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="EditReg({$item.secretariaId})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg({$item.secretariaId})" title="Eliminar">
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