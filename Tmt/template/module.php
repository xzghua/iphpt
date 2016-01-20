
<li class="widget {$module.HtmlID}">
                                {if (!$module.IsHideTitle)&&($module.Name)}
                                <header><h3>{$module.Name}</h3></header>
								{else}
								 <header style="display:none;"></header>
								 {/if}
								 
                                <div class="main">
                                    
	                                   <ul class="menu">
									   {$module.Content}
									   </ul>
                                   
                                </div>
</li>