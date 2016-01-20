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
                                <span class="pview">
                                    <i class="icon-pass">
                                    </i>
                                     {$article.ViewNums}人路过
                                </span>
                                <span class="pcomm">
                                    <i class="icon-chat">
                                    </i>
                                    <a href="{$article.Title}#comments"
                                    rel="nofollow" title="《{$article.Title}》上的评论">
                                        {$article.CommNums}条评论
                                    </a>
                                </span>
                            </div>
                            <div class="post-content">
                                {$article.Content}
                            </div>
                            <div class="post-footer">
                                
                            </div> 
                         {if !$article.IsLock}
						 {template:comments}
						 {/if}
					   </div>