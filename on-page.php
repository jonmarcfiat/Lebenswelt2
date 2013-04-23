<?php

/*
	This file controls content in the on-page section, which
	is drawn from the WordPress editor accessible to site
	administrators. Page templates in the WP page editor are
	used to determine the width of this section, inclusion of
	a widget sidebar, and any other on-page options
	available through custom files.

	Page templates are stored in the theme root. They
	contain their own HTML markup for purposes of layout
	and responsive design.
*/

	global $pagelines_ID; 
	
	if(is_page_template('page-fullwidth.php')) $full_width_page = true;
	else $full_width_page = false;

?>
	
	
<div id="contentcontainer" class="container-fluid fix <?php if(m_pagelines('sidebar_layout', $post->ID) == 'left') echo 'sidebar_left';?>"> 

	<div id="maincontent" <?php if($full_width_page):?>class="fullwidth span12"<?php endif;?> class="span7">
		<?php
		
			if (!is_page())
				get_template_part ('content/posts');
			else
				get_template_part ('content/pages');
		
		?>
	</div>
		
		<?php if(!$full_width_page) get_sidebar();?>

	<div class="clear"></div>

</div>