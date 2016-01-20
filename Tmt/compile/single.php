<?php  include $this->GetTemplate('header');  ?>
<div id="content-wrap">
                    <div id="content-main">
                    <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
                        <?php  include $this->GetTemplate('post-single');  ?>
                        <?php }else{  ?>
                        <?php  include $this->GetTemplate('post-page');  ?>
                    <?php } ?>  
                    </div>
                    <div id="sidebar">
					<?php  include $this->GetTemplate('sidebar');  ?>
                    </div>
                </div>
 <?php  include $this->GetTemplate('footer');  ?> 