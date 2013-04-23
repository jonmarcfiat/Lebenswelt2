<?php

	global $pagelines_ID; 
	
	if(is_page_template('page-fullwidth.php') || is_page_template('page-fullhighlight.php') || is_page_template('page-carousel-full')) $full_width_page = true;
	else $full_width_page = false;
	
	/*
	if(is_page_template('page-carousel.php') || is_page_template('page-carousel-full.php')) $carousel_page = true;
	else $carousel_page = false;
	
	if(VPRO && (is_page_template('page-feature.php') || is_page_template('page-feature-page.php') || (is_home() && pagelines('featureblog')))) $featureslide_template = true;
	else $featureslide_template = false;
	
	if(VPRO && (is_page_template('page-feature.php') || m_pagelines('featureboxes', $pagelines_ID))) $fboxes_template = true;
	else $fboxes_template = false;
	*/

?>
	
	
<div id="contentcontainer" class="container-fluid fix <?php if(m_pagelines('sidebar_layout', $post->ID) == 'left') echo 'sidebar_left';?>"> 


		<?php if(!is_page_template('page-highlight.php') && !is_404()) get_template_part('library/_sub_head');?>
		
		<?php if(is_page_template('page-fullhighlight.php')) get_template_part ('pro/template_highlight'); ?>
		
		<?php if($fboxes_template) get_template_part('pro/template_fboxes');?>

			<div id="maincontent" <?php if($full_width_page):?>class="fullwidth span12"<?php endif;?> class="span7">
				<?php if(is_page_template('page-highlight.php')):?> 
					<?php get_template_part('pro/template_highlight');?>
					<?php get_template_part('library/_sub_head');?>
				<?php endif;?>
				
				<?php get_template_part ('library/_posts'); ?>
			</div>
		
			<?php if(!$full_width_page) get_sidebar();?>
		
		<?php get_template_part ('library/_contentfooter'); ?>
		<div class="clear"></div>

</div>