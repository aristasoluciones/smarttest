{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre en Base de Datos</div></th>
            <th width="200"><div align="center">Nombre para El Usuario</div></th>
            <th width="200"><div align="center">Acciones</div></th>
           
 
        </tr>
    </thead>
    <tbody>
    	{foreach from=$lst.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.nombreCampo}</td>
            <td>{$item.nombreView}</td>
            <td>
			<a href="javascript:void(0)" onClick="EditRegCampo({$item.campoId})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
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