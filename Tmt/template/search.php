{template:header}
<div id="content-wrap">
                    <div id="content-main">
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
								{if $article.Content}
                                <span class="pauthor">
                                    搜索内容如下：
                                </span>
								{else}
								<span class="pauthor">
                                很抱歉，什么也没搜到，请重新搜索。。。
                                </span>
								{/if}
                            </div>
                            <div class="post-content">
                                {$article.Content}
                            </div>
					   </div> 
                    </div>
                    <div id="sidebar">
					{template:sidebar}
                    </div>
                </div>
 {template:footer} 