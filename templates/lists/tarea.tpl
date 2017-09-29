{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_32">
    <thead>
        <tr>
            <th width="200"><div align="center">Folio</div></th>
            <th class="hidden-480" width="150"><div align="center">Fecha de Registro</div></th>
            <th class="hidden-480" width="150"><div align="center">usuario agrego</div></th>
            <th class="hidden-480" width="150"><div align="center">Contrato</div></th>
            <th class="hidden-480" width="150"><div align="center">Descripcion</div></th>
            <th class="hidden-480" width="150"><div align="center">Estatus</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$info.tarea item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.tareaId}</td>
            <td>{$item.fechaRegistro}</td>
            <td><div align="center">{$item.usuario}</div></td>
            <td><div align="center">{$item.contrato}</div></td>
            <td><div align="center">{$item.descripcion}</div></td>
            <td><div align="center">{$item.estatus}</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="EditTarea({$item.tareaId})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
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