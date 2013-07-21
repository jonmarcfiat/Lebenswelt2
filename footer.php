<?php global $lebenswelt_ID; ?>
		


<!--full width bottom widget -->
<?php if(m_lebenswelt('full_width_widget', $lebenswelt_ID) && VPRO):?>
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
			if(($bbpress_forum && lebensweltforum('hide_bottom_sidebars')) || !lebenswelt('bottom_sidebars') || !VPRO) $hide_footer = true;
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
			<?php if(lebenswelt('twitfooter') && lebenswelt('twittername')):?>
				<div id="footer_topline"><?php get_template_part ('library/_twittermessages'); ?></div>
			<?php endif;?>
			<div id="fcolumns_container" class="fix" style="float:left;">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Columns') ) : ?>
					<div class="fcol">
						<div class="fcol_pad">
							<?php if(lebenswelt('footer_logo') && VPRO):?>
								<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>">
									<img src="<?php echo lebenswelt('footer_logo');?>" alt="<?php bloginfo('name');?>" />
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
							<?php if(lebenswelt('welcomemessage')):?><div class="welcomemessage"><?php echo lebenswelt('welcomemessage');?></div><?php endif;?>
						</div>
					</div>
					<div class="fcol">
						<div class="fcol_pad">
							<span class="terms">
								<?php e_lebenswelt('terms');?>
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

	<!-- Facebook script -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=304418233011542";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<?php if (lebenswelt('footerscripts')) echo lebenswelt('footerscripts');?>


	<script src="/wp-content/themes/Lebenswelt2/js/main.js"></script>
	<script src="/wp-content/themes/Lebenswelt2/js/modernizr.custom.28468.js"></script>

<!-- End Footer scripts -->
<?php wp_footer(); ?>
</body>
</html>
