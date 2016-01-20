{template:header}
    <div id="content-wrap"> 
     <div id="content-list"> 
      {foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}
      <div class="pagination"> 
       {template:pagebar}
      </div> 
     </div> 
	 <div id="sidebar"> 
     {template:sidebar}
	 </div> 
	 </div> 
 {template:footer}   