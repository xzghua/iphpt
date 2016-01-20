
<?php if ($pagebar) { ?>
                            <span class="pages">
                                <?php  echo $pagebar->PageNow;  ?>/<?php  echo $pagebar->PageAll;  ?>
                            </span>
                            <?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
  <?php if ($pagebar->PageNow==$k) { ?>
	<span class="current"><?php  echo $k;  ?></span>
  <?php }else{  ?>
	<a href="<?php  echo $v;  ?>" title="<?php  echo $k;  ?>"><span class="page" ><?php  echo $k;  ?></span></a>
  <?php } ?>
<?php }   ?>
<?php } ?>
<div class="clear">
                            </div>
