
<li class="widget <?php  echo $module->HtmlID;  ?>">
                                <?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
                                <header><h3><?php  echo $module->Name;  ?></h3></header>
								<?php }else{  ?>
								 <header style="display:none;"></header>
								 <?php } ?>
								 
                                <div class="main">
                                    
	                                   <ul class="menu">
									   <?php  echo $module->Content;  ?>
									   </ul>
                                   
                                </div>
</li>