{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
  
    <tbody>
    	{foreach from=$lstChat item=item key=key}        	
        <tr class="odd gradeX">
            <td><font color="#B40431">{$item.nombre} {$item.apaterno} {$item.amaterno}</font><br>{$item.mensaje}</td>
           
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}