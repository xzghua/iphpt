{template:header}
<div id="content-wrap">
                    <div id="content-main">
                    {if $article.Type==ZC_POST_TYPE_ARTICLE}
                        {template:post-single}
                        {else}
                        {template:post-page}
                    {/if}  
                    </div>
                    <div id="sidebar">
					{template:sidebar}
                    </div>
                </div>
 {template:footer} 