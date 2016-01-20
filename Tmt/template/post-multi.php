<div class="post-{$article.ID} post category-{$article.Category.Name}" id="post-{$article.ID}"> 
       <div class="post-list"> 
        <div class="post-header"> 
         <h2 class="post-title"><a href="{$article.Url}" title="{$article.Title}" rel="bookmark">{$article.Title}</a></h2> 
        </div> 
        <div class="post-meta"> 
         <span class="pauthor"><i class="icon-user-add"></i><a href="{$article.Author.Url}" title="由{$article.Author.Alias}发布" rel="author">{$article.Author.Alias}</a></span> 
         <span class="ptime"><i class="icon-calendar"></i>{$article.Time('Y-m-d')}</span> 
         <span class="pcate"><i class="icon-category"></i><a href="{$article.Category.Url}" title="查看{$article.Category.Name}中的全部文章" rel="category tag">{$article.Category.Name}</a></span> 
         <span class="pview"><i class="icon-pass"></i>{$article.ViewNums}人路过</span> 
         <span class="pcomm"><i class="icon-chat"></i><a href="{$article.Url}#comments" rel="nofollow" title="《{$article.Title}》上的评论">{$article.CommNums}条评论</a></span> 
        </div> 
        <div class="post-body"> 
         <div class="post-thumbnail"> 
          <a href="{$article.Url}" rel="bookmark" title="{$article.Title}"> <img src="{php}
                                        $temp=rand(11,30);
                                        $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
                                        $content = $article->Content;
                                        preg_match_all($pattern,$content,$matchContent);
                                        if(isset($matchContent[1][0]))
                                        $temp=$matchContent[1][0];
                                        else
                                        $temp="$host/zb_users/theme/$theme/style/random/$temp.jpg";{/php}{$temp}" width="140" height="100" alt="{$article.Title}" /> </a> 
         </div> 
         <div class="post-excerpt">
            {php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),150)).'...');{/php}{$description}
         </div> 
        </div> 
        <div class="post-footer"> 
         <div class="tags"> 
          <i class="icon-tags"></i> 
		   {foreach $article.Tags as $tag}<a href="{$tag.Url}" class="tag-link" title="查看标签为《{$tag.Name}》的所有文章">{$tag.Name}</a>{/foreach}
         </div> 
         <div class="readmore"> 
          <a href="{$article.Url}" rel="bookmark">阅读全文 &raquo;</a> 
         </div> 
        </div> 
       </div> 
      </div> 