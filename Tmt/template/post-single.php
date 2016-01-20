<div class="post-single">
                            <div class="post-header">
                                <h2 class="post-title">
                                    {$article.Title}
                                </h2>
                            </div>
                            <div class="post-meta">
                                <ul class="resizer">
                                    <li id="f_s">
                                        <a href="javascript:;" title="缩小字体">
                                            小
                                        </a>
                                    </li>
                                    <li id="f_m">
                                        <a href="javascript:;" title="默认字体">
                                            中
                                        </a>
                                    </li>
                                    <li id="f_l">
                                        <a href="javascript:;" title="加大字体">
                                            大
                                        </a>
                                    </li>
                                    <li id="f_c">
                                        <a href="javascript:;" title="关闭侧边栏">
                                            <i class="icon-stop">
                                            </i>
                                        </a>
                                    </li>
                                    <li id="f_o">
                                        <a href="javascript:;" title="打开侧边栏">
                                            <i class="icon-pause">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="pauthor">
                                    <i class="icon-user-add">
                                    </i>
                                    <a href="{$article.Author.Url}" title="由{$article.Author.Alias}发布" rel="author">
                                       {$article.Author.Alias}
                                    </a>
                                </span>
                                <span class="ptime">
                                    <i class="icon-calendar">
                                    </i>
                                     {$article.Time('Y-m-d')}
                                </span>
                                <span class="pcate">
                                    <i class="icon-category">
                                    </i>
                                    <a href="{$article.Category.Url}" title="查看{$article.Category.Name}中的全部文章" rel="category tag">
                                        {$article.Category.Name}
                                    </a>
                                </span>
                                <span class="pview">
                                    <i class="icon-pass">
                                    </i>
                                     {$article.ViewNums}人路过
                                </span>
                                <span class="pcomm">
                                    <i class="icon-chat">
                                    </i>
                                    <a href="{$article.Url}#comments"
                                    rel="nofollow" title="《{$article.Title}》上的评论">
                                        {$article.CommNums}条评论
                                    </a>
                                </span>
                            </div>
                            <div class="post-content">
                                {$article.Content}
                            </div>
                            <div class="post-footer">
                                <div class="post-tagsshare">
                                    <div class="post-tags">
                                        <i class="icon-tags">
                                        </i>
                                        {foreach $article.Tags as $tag}
												<a href="{$tag.Url}" class="label bg-primary">{$tag.Name}</a>
												{/foreach}
                                    </div>
                                    </div>
                                <div class="post-copyright">
                                    <div id="author-avatar">
                                        <img src="{$article.Author.Avatar}"
                                        alt="avatar" class="avatar avatar-42 photo" height="42" width="42" />
                                    </div>
                                    <div id="copy-info">
                                        <span id="copy-arrow">
                                            <span>
                                            </span>
                                        </span>
                                        <p>
                                            <strong>
                                                版权声明：
                                            </strong>
                                            本文除特别说明外均由<a href="{$author.Url}" title="由{$article.Author.Alias}发布" rel="author">
                                                {$article.Author.Alias}
                                            </a>原创
                                        </p>
                                        <p>
                                            <strong>
                                                本文链接：
                                            </strong>
                                            <a class="copy-link-3" href="{$article.Url}"
                                            title="{$article.Url}">
                                                {$article.Url}
                                            </a>
                                            ，尊重共享，欢迎转载！
                                        </p>
                                    </div>
                                </div>
                                <div class="post-related">
                                    <ul>
									{php}
                                            $articles=$zbp->GetArticleList(
                                            array('*'),
                                            array(array('=','log_Type',0),array('=','log_CateID',$article->Category->ID),
                                            array('=','log_Status',0)),
                                            array('rand()'=>' '),
                                            array(4),
                                            null
                                            );
                                        {/php}
                                        {foreach  $articles as $related}
                                        <li>
                                            <span class="time">
                                                {$related.Time('m-d')}
                                            </span>
                                            <span class="title">
                                                <i class="icon-doc-text">
                                                </i>
                                                <a href="{$related.Url}" title="{$related.Title}">
                                                   {$related.Title}
                                                </a>
                                            </span>
                                            <small class="pcomm">
                                                <i class="icon-comment-1">
                                                </i>
                                                <a href="{$related.Url}#respond"
                                                rel="nofollow" title="《{$related.Title}》上的评论">
                                                    {$article.CommNums}
                                                </a>
                                            </small>
                                        </li>
										{/foreach}
                                       </ul>
                                </div>
                                <div class="post-navigation">
                                    <div class="post-previous">
									{if $article.Prev}
                                        <a href="{$article.Prev.Url}" rel="prev">
                                            <span>
                                                上一篇
                                            </span>
                                            {$article.Prev.Title}
                                        </a>
										{else} 没有了 {/if}
                                    </div>
                                    <div class="post-next">
									{if $article.Next}
									<a href="{$article.Next.Url}" rel="prev">
                                            <span>
                                                下一篇
                                            </span>
                                             {$article.Next.Title}
                                        </a>
										{else} 没有了 {/if} 
                                    </div>
                                </div>
                            </div>
                            
                         {if !$article.IsLock}
						 {template:comments}
						 {/if}
					   </div>