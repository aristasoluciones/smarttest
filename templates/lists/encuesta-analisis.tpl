{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
{foreach from=$data item=item key=key} 
	<div style=" float:left; height:300px">		
			<table class="table table-striped table-bordered table-hover" style=" float:left;">
				
				<tr>
					<td colspan="2">
					<b>
						{$item.pregunta} 
						 <a  href="" title="VER GRAFICA">
							<img src="{$WEB_ROOT}/images/chart-pie.png" border="0">
						</a>
					</b>
					</td>
				</tr>
				<tr >
					<td>Pregunta</td>
					<td>Total</td>
				</tr>
				{foreach from=$item.respuesta item=item2 key=key}   
				<tr>
					<td>{$item2.respuesta}</td>
					<td>{$item2.Total}</td>
				</tr>
				{/foreach}
			</table>

	</div>
	{if {($key+1) % 8} eq 0}
	<hr>
	<div style="clear:both"></div>
	<br>
	<br>
	<br>
	{/if}
{/foreach}
{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}