<?php
/* The section right below the header */
?>
<div class="container-fluid" style="color:#666666;margin:0!important;padding-right: 0!important;padding-left: 0!important;">
			
                
				<div id="web_menu_top_title" style="margin: 22px 0!important;" class="row-fluid p14">
				<div class="span3 lightGray"> 
                    <?php echo get_post_meta($post->ID,'top_left_heading',true); ?>
                </div>
                
            <div class="span3 p14 pull-right">
                <a class="lightGray" class="pull-right" href="#"><?php echo get_post_meta($post->ID,'topRightTitle1', true); ?> </a>&nbsp;<span class="lightGray">|</span>&nbsp;
                
                <a class="lightGray" class="pull-right" href="#"><?php echo strtoupper($pagename); ?></a>
            </div>
             </div>
    
        
             <div class="row-fluid">
                 <img alt="D_Bubble" class="pull-right" style="padding-right: 15px;" width="35" height="35" src="<?php bloginfo( 'template_url' ); ?>/imgs/demo button/D_bubble.png" />
             </div>    
    
             <div class="row-fluid"  style="margin-bottom:30px;">
                <div class="span4 offset1"><p class="p18 lightGray" style="margin-left: 20px;"><?php echo get_post_meta($post->ID,'page_sub_heading', true); ?></p></div>
             </div>                         

</div>