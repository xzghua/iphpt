
{if $pagebar}
                            <span class="pages">
                                {$pagebar.PageNow}/{$pagebar.PageAll}
                            </span>
                            {foreach $pagebar.buttons as $k=>$v}
  {if $pagebar.PageNow==$k}
	<span class="current">{$k}</span>
  {else}
	<a href="{$v}" title="{$k}"><span class="page" >{$k}</span></a>
  {/if}
{/foreach}
{/if}
<div class="clear">
                            </div>
