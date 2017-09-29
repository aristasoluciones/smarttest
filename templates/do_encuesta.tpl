<div data-role="page" data-theme="a">
  <div data-role="header" data-position="fixed">
    <a class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow" title=" Inicio" href="{$WEB_ROOT}" rel="external"></a>
    <h1 class="ui-title" aria-level="1" role="heading" tabindex="0">Nombre empresa</h1>
   
  </div>
  
  <div data-role="content" class="ui-content">
   <ul data-role="listview" data-inset="true">
     {foreach from=$encuestas item=item key=key} 
        <li><a href="#">
              <img src="{$WEB_ROOT}/images/custom/atencioncliente1.png">
              <h2>{$item.nombre}</h2>
              <p></p></a>
       </li>
     {/foreach}
     </ul>
  </div>
  
  <div data-role="footer" data-theme="a" data-position="fixed">
      <h3>&nbsp;</h3>
       
  </div>  
</div>