<div class="post-single">
                            <div class="post-header">
                                <h2 class="post-title">
                                    <?php  echo $article->Title;  ?>
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
                                    <a href="<?php  echo $article->Author->Url;  ?>" title="由<?php  echo $article->Author->Alias;  ?>发布" rel="author">
                                       <?php  echo $article->Author->Alias;  ?>
                                    </a>
                                </span>
                                <span class="ptime">
                                    <i class="icon-calendar">
                                    </i>
                                     <?php  echo $article->Time('Y-m-d');  ?>
                                </span>
                                <span class="pcate">
                                    <i class="icon-category">
                                    </i>
                                    <a href="<?php  echo $article->Category->Url;  ?>" title="查看<?php  echo $article->Category->Name;  ?>中的全部文章" rel="category tag">
                                        <?php  echo $article->Category->Name;  ?>
                                    </a>
                                </span>
                                <span class="pview">
                                    <i class="icon-pass">
                                    </i>
                                     <?php  echo $article->ViewNums;  ?>人路过
                                </span>
                                <span class="pcomm">
                                    <i class="icon-chat">
                                    </i>
                                    <a href="<?php  echo $article->Url;  ?>#comments"
                                    rel="nofollow" title="《<?php  echo $article->Title;  ?>》上的评论">
                                        <?php  echo $article->CommNums;  ?>条评论
                                    </a>
                                </span>
                            </div>
                            <div class="post-content">
                                <?php  echo $article->Content;  ?>
                            </div>
                            <div class="post-footer">
                                <div class="post-tagsshare">
                                    <div class="post-tags">
                                        <i class="icon-tags">
                                        </i>
                                        <?php  foreach ( $article->Tags as $tag) { ?>
												<a href="<?php  echo $tag->Url;  ?>" class="label bg-primary"><?php  echo $tag->Name;  ?></a>
												<?php }   ?>
                                    </div>
                                    </div>
                                <div class="post-copyright">
                                    <div id="author-avatar">
                                        <img src="<?php  echo $article->Author->Avatar;  ?>"
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
                                            本文除特别说明外均由<a href="<?php  echo $author->Url;  ?>" title="由<?php  echo $article->Author->Alias;  ?>发布" rel="author">
                                                <?php  echo $article->Author->Alias;  ?>
                                            </a>原创
                                        </p>
                                        <p>
                                            <strong>
                                                本文链接：
                                            </strong>
                                            <a class="copy-link-3" href="<?php  echo $article->Url;  ?>"
                                            title="<?php  echo $article->Url;  ?>">
                                                <?php  echo $article->Url;  ?>
                                            </a>
                                            ，尊重共享，欢迎转载！
                                        </p>
                                    </div>
                                </div>
                                <div class="post-related">
                                    <ul>
									<?php 
                                            $articles=$zbp->GetArticleList(
                                            array('*'),
                                            array(array('=','log_Type',0),array('=','log_CateID',$article->Category->ID),
                                            array('=','log_Status',0)),
                                            array('rand()'=>' '),
                                            array(4),
                                            null
                                            );
                                         ?>
                                        <?php  foreach (  $articles as $related) { ?>
                                        <li>
                                            <span class="time">
                                                <?php  echo $related->Time('m-d');  ?>
                                            </span>
                                            <span class="title">
                                                <i class="icon-doc-text">
                                                </i>
                                                <a href="<?php  echo $related->Url;  ?>" title="<?php  echo $related->Title;  ?>">
                                                   <?php  echo $related->Title;  ?>
                                                </a>
                                            </span>
                                            <small class="pcomm">
                                                <i class="icon-comment-1">
                                                </i>
                                                <a href="<?php  echo $related->Url;  ?>#respond"
                                                rel="nofollow" title="《<?php  echo $related->Title;  ?>》上的评论">
                                                    <?php  echo $article->CommNums;  ?>
                                                </a>
                                            </small>
                                        </li>
										<?php }   ?>
                                       </ul>
                                </div>
                                <div class="post-navigation">
                                    <div class="post-previous">
									<?php if ($article->Prev) { ?>
                                        <a href="<?php  echo $article->Prev->Url;  ?>" rel="prev">
                                            <span>
                                                上一篇
                                            </span>
                                            <?php  echo $article->Prev->Title;  ?>
                                        </a>
										<?php }else{  ?> 没有了 <?php } ?>
                                    </div>
                                    <div class="post-next">
									<?php if ($article->Next) { ?>
									<a href="<?php  echo $article->Next->Url;  ?>" rel="prev">
                                            <span>
                                                下一篇
                                            </span>
                                             <?php  echo $article->Next->Title;  ?>
                                        </a>
										<?php }else{  ?> 没有了 <?php } ?> 
                                    </div>
                                </div>
                            </div>
                            
                         <?php if (!$article->IsLock) { ?>
						 <?php  include $this->GetTemplate('comments');  ?>
						 <?php } ?>
					   </div>