<div class="comments">
    <h3 id="comments">
        <?php  echo $article->CommNums;  ?>条大神的评论
    </h3>
    <div class="commentshow">
	 
        <ol class="commentlist">
		<label id="AjaxCommentBegin"></label>
		<?php  foreach ( $comments as $key => $comment) { ?>
        <?php  include $this->GetTemplate('comment');  ?>
        <?php }   ?>
        <div class="pagination">
		<?php  include $this->GetTemplate('pagebar');  ?>
        </div>
		<label id="AjaxCommentEnd"></label>
		</ol>
	
    </div>
    <?php  include $this->GetTemplate('commentpost');  ?>
</div>