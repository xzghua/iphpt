<?php  include $this->GetTemplate('header');  ?>
    <div id="content-wrap"> 
     <div id="content-list"> 
      <?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>
      <div class="pagination"> 
       <?php  include $this->GetTemplate('pagebar');  ?>
      </div> 
     </div> 
	 <div id="sidebar"> 
     <?php  include $this->GetTemplate('sidebar');  ?>
	 </div> 
	 </div> 
 <?php  include $this->GetTemplate('footer');  ?>   