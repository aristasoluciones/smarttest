{if $page == "login"}
	<div class="copyright"><!--
		<img src="{$WEB_ROOT}/images/poweredby8.png" border="0" width="85" height="" />-->
		&nbsp;&nbsp;&nbsp;&nbsp;{$smarty.const.FOOTER}
		
	</div>
{else}
    <div class="footer">
        <div class="footer-inner"><!--
			 <img src="{$WEB_ROOT}/images/poweredby.png" border="0" width="85" height="" />-->
            &nbsp;&nbsp;&nbsp;&nbsp;{$smarty.const.FOOTER}
			
        </div>
        <div class="footer-tools">
            <span class="go-top">
            <i class="icon-angle-up"></i>
            </span>
        </div>
    </div>
{/if}