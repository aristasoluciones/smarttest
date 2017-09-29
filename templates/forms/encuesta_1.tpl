 <form id="frmJqm" name="frmJqm">
       <input type="hidden" name="type" value="sendData">
      {foreach from=$registros item=item key=key}
      <div  align="center" class="ui-body ui-body-a ui-btn-corner-all">
       <h2>¿ {$item.pregunta} ? </h2>
       {if $item.tiporespuesta=='opcional'}
          <fieldset data-role="controlgroup" data-type="horizontal">
            <input type="radio" value="" name="excelente_{$key}" id="excelente_{$key}" onclick="disableCheck(this)"> 
            <label for="excelente_{$key}">Excelente</label>
             <input type="radio" value="" name="bueno_{$key}" id="bueno_{$key}" onclick="disableCheck(this)"> 
            <label for="bueno_{$key}">Bueno</label>
             <input type="radio" value="" name="malo_{$key}" id="malo_{$key}" onclick="disableCheck(this)" > 
            <label for="malo_{$key}">Malo</label>
            </fieldset>
          
        {elseif $item.tiporespuesta=='abierta'}
          <textarea rows="15" cols="100" name="txtarea_{$key}" id="txtarea_{$key}"></textarea>

        {/if}
	       
	   </div>  
	  {/foreach}
</form>