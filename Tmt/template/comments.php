<div class="comments">
    <h3 id="comments">
        {$article.CommNums}条大神的评论
    </h3>
    <div class="commentshow">
	 
        <ol class="commentlist">
		<label id="AjaxCommentBegin"></label>
		{foreach $comments as $key => $comment}
        {template:comment}
        {/foreach}
        <div class="pagination">
		{template:pagebar}
        </div>
		<label id="AjaxCommentEnd"></label>
		</ol>
	
    </div>
    {template:commentpost}
</div>