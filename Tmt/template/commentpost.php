<div id="respond_box">
<div id="respond" class="respond">
    <h3>
        发表评论
    </h3>
    <form method="post" id="comment_form" class="bl_form" target="_self" action="{$article.CommentPostUrl}">
	 <input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />



    <input type="hidden" name="inpRevID" id="inpRevID" value="0" />
        <div id="input-box">
            <div id="real-avatar">
            </div>
            <div id="author-input">
                <p id="welcome">
                    <a rel="nofollow" id="cancel-comment-reply-link" href="#divCommentPost"
                    style="display:none;">
                        [取消回复]
                    </a>
                </p>
                <p id="author-info">
                    <label for="author">
                        昵称
                    </label>
                    <input type="text" name="inpName" id="inpName" class="label_better replytext text" value="{$user.Name}"
                    size="28" tabindex="1"  data-new-placeholder="能选个好听的名字不" placeholder="nickname" required />
                    <label for="email">
                        邮箱
                    </label>
                    <input type="text" name="inpEmail" id="inpEmail" class="label_better replytext text" value="{$user.Email}"
                    size="28" tabindex="2" data-new-placeholder="邮箱哦..别看我,填邮箱" placeholder="name@example.com"  />
                    <span id="Get_Gravatar">
                    </span>
                    <label for="url">
                        网址
                    </label>
                    <input type="text" name="inpHomePage" id="inpHomePage" class="label_better replytext text" value="{$user.HomePage}" size="28"
                    tabindex="3" data-new-placeholder="网址哦..别看我,填网址" placeholder="www.iphpt.com" pattern="((http|https)://|)+([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?"
                    />
                </p>
            </div>
        </div>
        <div class="comment-box">
            <textarea name="txaArticle" class="textarea text" id="txaArticle" tabindex="5" cols="45"
            rows="4" placeholder="肯定有有人想用脚本测试了,没用的,还不如回复点有用的~" required></textarea>
        </div>
        <div class="comment-btns">
            <input name="btnSumbit" type="submit" id="submit" tabindex="6" value="发表评论/快捷回复:Ctrl+Enter"
            onclick="JavaScript:return VerifyMessage()"/>
            <input name="reset" type="reset" id="reset" tabindex="6" value="清除" />
            
        </div>
    </form>
</div>
</div>