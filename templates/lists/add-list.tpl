<font color="red">
<b>
	<a href="javascript:void(0)" onClick="cerrarAuto()" title="">
	Cerrar
	</a>
</b>
</font>
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3" style="background:white; width:50%">
   
    <tbody>
    	{foreach from=$lts item=item2 key=key}        	
        <tr class="odd gradeX" style="background:white">
            <td onmouseover='this.style.background="#A4A4A4"' onmouseout='this.style.background="white"' style="background:white">
				<a href="javascript:void(0)" onClick="addList({$item2.platilloId},{$tipoplatilloId})" title="">
					{$item2.nombre} 
				</a>
			</td>
			<td onmouseover='this.style.background="#A4A4A4"' onmouseout='this.style.background="white"' style="background:white">
				<a href="javascript:void(0)" onClick="addList({$item2.platilloId},{$tipoplatilloId})" title="">
					<img src="{$WEB_ROOT}/images/ok.png" >
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</a>
			</td>
			<td onmouseover='this.style.background="#A4A4A4"' onmouseout='this.style.background="white"' style="background:white">
				<a href="javascript:void(0)" onClick="addList({$item2.platilloId},{$tipoplatilloId})" title="">
					{if $item2.totalIngredientes eq ""}
						<font color="red" size="4">0</font>
					{else if $item2.totalIngredientes eq 0}
						<font color="red" size="4">0</font>
					{else}
						<font color="" size="4">{$item2.totalIngredientes}</font>
					{/if}
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