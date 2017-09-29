{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Pregunta</div></th>
            <th class="hidden-480" width="150"><div align="center">Respuesta</div></th>
 
        </tr>
    </thead>
    <tbody>
    	{foreach from=$lstAbiertas item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.pregunta}</td>
            <td><div align="center">{$item.respuesta}</div></td>

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