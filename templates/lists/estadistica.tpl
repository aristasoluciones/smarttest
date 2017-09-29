{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}



<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Tipo de Documento</div></th>
            <th width="200"><div align="center">Total</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$lstdoc item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.documento}</td>
            <td>{$item.total}</td>
           
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}