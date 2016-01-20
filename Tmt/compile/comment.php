<label id="cmt<?php  echo $comment->ID;  ?>"></label><li class="comment even thread-even depth-1" id="comment-<?php  echo $comment->ID;  ?>">
                <div id="div-comment-<?php  echo $comment->ID;  ?>" class="comment-body">
                    <div class="comment-author vcard gravatar">
                        <img src="<?php  echo $comment->Author->Avatar;  ?>"
                        alt="avatar" class="avatar avatar-50 photo" height="50" width="50">
                    </div>
                    <div class="floor">
                         <?php  echo $key+1;  ?>楼
                    </div>
                    <div class="commenttext">
                        <span class="commentid">
                            <a href="<?php  echo $comment->Author->HomePage;  ?>" rel="external nofollow" class="url">
                             <?php  echo $comment->Author->Name;  ?>
                            </a>
                        </span>
                        <span class="datetime">
                           <?php 
                                echo str_replace(array('AM','PM'),array('上午','下午'),$comment->Time("Y-m-d A h:i:s"));
                                 ?>
                        </span>
                        <span class="reply">
                            <a class="comment-reply-link" href="#reply"
                            onclick="RevertComment('<?php  echo $comment->ID;  ?>');"
                            rel="nofollow">
                                回复
                            </a>
                        </span>
                        <span class="edit_comment">
                        </span>
                        <div class="comment_text">
                            <p>
                               <?php  echo $comment->Content;  ?>
                            </p>
                        </div>
                    </div>
                </div>
				<?php  foreach ( $comment->Comments as $comment) { ?> 
                <ul class="children">
				<?php  include $this->GetTemplate('comment');  ?>
                </ul>
				<?php }   ?>
                <!-- .children -->
            </li>
        