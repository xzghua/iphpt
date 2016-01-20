<div class="post-<?php  echo $article->ID;  ?> post category-<?php  echo $article->Category->Name;  ?>" id="post-<?php  echo $article->ID;  ?>"> 
       <div class="post-list"> 
	   <span class="post-sticky"></span>
        <div class="post-header"> 
         <h2 class="post-title"><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>" rel="bookmark"><?php  echo $article->Title;  ?></a></h2> 
        </div> 
        <div class="post-meta"> 
         <span class="pauthor"><i class="icon-user-add"></i><a href="<?php  echo $article->Author->Url;  ?>" title="由<?php  echo $article->Author->Alias;  ?>发布" rel="author"><?php  echo $article->Author->Alias;  ?></a></span> 
         <span class="ptime"><i class="icon-calendar"></i><?php  echo $article->Time('Y-m-d');  ?></span> 
         <span class="pcate"><i class="icon-category"></i><a href="http://www.iphpt.com" title="查看<?php  echo $article->Category->Name;  ?>中的全部文章" rel="category tag"><?php  echo $article->Category->Name;  ?></a></span> 
         <span class="pview"><i class="icon-pass"></i><?php  echo $article->ViewNums;  ?>人路过</span> 
         <span class="pcomm"><i class="icon-chat"></i><a href="<?php  echo $article->Url;  ?>#comments" rel="nofollow" title="《<?php  echo $article->Title;  ?>》上的评论"> <?php  echo $article->CommNums;  ?>条评论</a></span> 
        </div> 
        <div class="post-body"> 
         <div class="post-thumbnail"> 
          <a href="<?php  echo $article->Url;  ?>" rel="bookmark" title="<?php  echo $article->Title;  ?>"> <img src="<?php 
                                        $temp=rand(11,30);
                                        $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
                                        $content = $article->Content;
                                        preg_match_all($pattern,$content,$matchContent);
                                        if(isset($matchContent[1][0]))
                                        $temp=$matchContent[1][0];
                                        else
                                        $temp="$host/zb_users/theme/$theme/style/random/$temp.jpg"; ?><?php  echo $temp;  ?>" width="140" height="100" alt="<?php  echo $article->Title;  ?>" /> </a> 
         </div> 
         <div class="post-excerpt">
            <?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),150)).'...'); ?><?php  echo $description;  ?>
         </div> 
        </div> 
        <div class="post-footer"> 
         <div class="tags"> 
          <i class="icon-tags"></i> 
		   <?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" class="tag-link" title="查看标签为《<?php  echo $tag->Name;  ?>》的所有文章"><?php  echo $tag->Name;  ?></a><?php }   ?>
         </div> 
         <div class="readmore"> 
          <a href="<?php  echo $article->Url;  ?>" rel="bookmark">阅读全文 &raquo;</a> 
         </div> 
        </div> 
       </div> 
      </div> 