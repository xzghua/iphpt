<li class="comment even thread-even depth-1" id="comment-{$comment.ID}">
                <div id="div-comment-{$comment.ID}" class="comment-body">
                    <div class="comment-author vcard gravatar">
                        <img src="{$comment.Author.Avatar}"
                        alt="avatar" class="avatar avatar-50 photo" height="50" width="50">
                    </div>
                    <div class="floor">
                         {$key+1}楼
                    </div>
                    <div class="commenttext">
                        <span class="commentid">
                            <a href="{$comment.Author.HomePage}" rel="external nofollow" class="url">
                             {$comment.Author.Name}
                            </a>
                        </span>
                        <span class="datetime">
                           {php}
                                echo str_replace(array('AM','PM'),array('上午','下午'),$comment->Time("Y-m-d A h:i:s"));
                                {/php}
                        </span>
                        <span class="reply">
                            <a class="comment-reply-link" href="#reply"
                            onclick="RevertComment('{$comment.ID}');"
                            rel="nofollow">
                                回复
                            </a>
                        </span>
                        <span class="edit_comment">
                        </span>
                        <div class="comment_text">
                            <p>
                               {$comment.Content}
                            </p>
                        </div>
                    </div>
                </div>
				{foreach $comment.Comments as $comment} 
                <ul class="children">
				{template:comment}
                </ul>
				{/foreach}
                <!-- .children -->
            </li>
        