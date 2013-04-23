<?php global $pagelines_ID; ?>
		


<!--full width bottom widget -->
<?php if(m_pagelines('full_width_widget', $pagelines_ID) && VPRO):?>
<div class="contentshadow">
	<div class="content">
		<div id="fullwidth_bottom_widgets" class="">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Full-Width Bottom Sidebar')) : ?>
			<div class="widget pad_big">
			<p class="subtle"><?php _e('Full width widgets selected but no widgets have been added.',TDOMAIN);?></p>
			</div>
		<?php endif;?>
		</div>

	</div>
</div>
<div class="clear"></div>
<?php endif;?>
<!--END full width bottom widget -->



		<div class="clear"></div>
		<?php 
		
			global $bbpress_forum;
			if(($bbpress_forum && pagelinesforum('hide_bottom_sidebars')) || !pagelines('bottom_sidebars') || !VPRO) $hide_footer = true;
			else $hide_footer = false;		
		?>
		<?php if(!$hide_footer):?>
	
			<div class="contentshadow">
				<div class="content">
				
			<?php get_template_part ('library/_morefoot'); ?>
				
			</div><!-- end container -->
			</div><!-- end contentshadow -->

		<?php endif; ?>



<div class="clearfix"></div>

</div><!-- end site wrapper -->
</div><!-- end site -->

<div  id="footer" class="">
	<div id="wrapper">

	<div class="effect span12">
		<div class="content span12">
			<?php if(pagelines('twitfooter') && pagelines('twittername')):?>
				<div id="footer_topline"><?php get_template_part ('library/_twittermessages'); ?></div>
			<?php endif;?>
			<div id="fcolumns_container" class="fix" style="float:left;">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Columns') ) : ?>
					<div class="fcol">
						<div class="fcol_pad">
							<?php if(pagelines('footer_logo') && VPRO):?>
								<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>">
									<img src="<?php echo pagelines('footer_logo');?>" alt="<?php bloginfo('name');?>" />
								</a>
							<?php else:?>
								<h3 class="footer-site-title"><a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php bloginfo('name');?></a></h3>
							<?php endif;?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<h3><?php _e('Pages',TDOMAIN);?></h3>
								<?php wp_nav_menu( array( 'container_class' => '', 'container' => null, 'menu_class' => 'footer_nav','theme_location' => 'footer_nav' ) ); ?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<h3><?php _e('Stay In Touch',TDOMAIN);?></h3>
								<?php wp_nav_menu( array( 'container_class' => '', 'container' => null, 'menu_class' => 'footer_nav','theme_location' => 'footer_social' ) ); ?>
							
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<h3><?php _e('More',TDOMAIN);?></h3>
							<?php if(pagelines('welcomemessage')):?><div class="welcomemessage"><?php echo pagelines('welcomemessage');?></div><?php endif;?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<span class="terms">
								<?php e_pagelines('terms');?>
							</span>
						</div>
					</div>
				<?php endif; ?>
			</div>
	
		
			<div class="clear"></div>
		</div>	

	</div>

	</div>
</div>
	<div class="clear"></div>

  </div><!--/wrapper -->
</div> <!-- end #site -->


<!-- Footer Scripts Go Here -->
	<?php if (pagelines('footerscripts')) echo pagelines('footerscripts');?>
	<script src="/wp-content/themes/LebensweltCore/js/main.js"></script>
	<script src="/wp-content/themes/LebensweltCore/js/modernizr.custom.28468.js"></script>

<!-- End Footer scripts -->
<?php wp_footer(); ?>
</body>
</html>