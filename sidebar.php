<div id="sidebar" role="complementary" class="span5">
	
	<?php
	global $lebenswelt_ID;
	global $sidesearch;
	if($sidesearch):?>
		<div id="sidesearch" class="fix">
				<?php get_template_part ('library/_searchform'); ?>	
		</div>
	<?php endif;?>
	
	<div id="widgets">
	
		<?php if( lebenswelt('the_sidebar', $lebenswelt_ID ) == 'secondary'):?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Secondary Sidebar') ) : ?>
				<?php _e('The secondary sidebar has been selected but doesn\'t have any widgets. Add some widgets to your secondary sidebar in the admin under appearance > widgets.',TDOMAIN);?>
			<?php endif; ?>
		<?php elseif( lebenswelt('the_sidebar', $lebenswelt_ID ) == 'short'):?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Short Sidebar') ) : ?>
				<?php _e('The short sidebar has been selected but doesn\'t have any widgets. Add some widgets to your short sidebar in the admin under appearance > widgets.',TDOMAIN);?>
			<?php endif; ?>
		<?php else:?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<?php if(!lebenswelt('sidebar_no_default')) get_template_part('library/_defaultsidebar');?>
			<?php endif; ?>
		<?php endif;?>
		
	</div>
</div>
