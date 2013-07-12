<?php

// This file has all the common html used in the sidebars

function lebenswelt_main_sidebar_selector(){?>
	
		<?php if(VPRO) include(CORE_TEMPLATES . '/widget_grandchildnav.php');?>
		
		<?php if(m_lebenswelt('the_sidebar', $post->ID) == 'secondary'):?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Secondary Sidebar') ) : ?>
				<?php _e('The secondary sidebar has been selected but doesn\'t have any widgets. Add some widgets to your secondary sidebar in the admin under appearance > widgets.',TDOMAIN);?>
			<?php endif; ?>
		<?php elseif(m_lebenswelt('the_sidebar', $post->ID) == 'short'):?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Short Sidebar') ) : ?>
				<?php _e('The short sidebar has been selected but doesn\'t have any widgets. Add some widgets to your short sidebar in the admin under appearance > widgets.',TDOMAIN);?>
			<?php endif; ?>
		<?php else:?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<?php if(!lebenswelt('sidebar_no_default')) include(THEME_LIB.'/_defaultsidebar.php');?>
			<?php endif; ?>
		<?php endif;?>
	
<?php }

function lebenswelt_content_sidebar(){?>		
<?php if(lebenswelt('content_sidebar',$post->ID)):?>
	<div id="content_sidebar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Content Sidebar') ) : ?>
			<div class="nowidgets">
				<?php _e('The content sidebar has been activated on this page/post but doesn\'t have any widgets added to it. Add some widgets to this sidebar in appearance &gt; widgets in the admin.',TDOMAIN);?>
			</div>
		<?php endif; ?>
	</div>
<?php endif;?>
<?php } 

function lebenswelt_fullwidthbottom_sidebar(){?>		
<?php if(lebenswelt_pro('full_width_widget', $post->ID)):?>
	<div id="fullwidth_bottom_widgets" class="content">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Full-Width Bottom Sidebar')) : ?>
		<p class="subtle nofullwidthbottom"><?php _e('Full width widgets selected but no widgets have been added.',TDOMAIN);?></p>
	<?php endif;?>
	</div>
<?php endif;?>
<?php } 

function lebenswelt_morefoot_sidebars(){?>		
	<?php 

		global $bbpress_forum;
		if(($bbpress_forum && lebensweltforum('hide_bottom_sidebars')) || !lebenswelt('bottom_sidebars') || !VPRO || m_lebenswelt('hide_bottom_sidebars', $post->ID)) $hide_footer = true;
		else $hide_footer = false;		
	?>
	<?php if(!$hide_footer):?>

		<div class="morefoot_back fix">
			<div id="morefootbg" class="fix">
				<div class="wcontain fix">	
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>
					<div class="widget">
						<?php if(!lebenswelt('sidebar_no_default')):?>
							<h3 class="wtitle"><?php _e('Looking for something?',TDOMAIN);?></h3>
							<p><?php _e('Use the form below to search the site:',TDOMAIN);?></p>
							<?php lebenswelt_searchform(); ?>
							<br class="clear"/>
							<p><?php _e('Still not finding what you\'re looking for? Drop a comment on a post or contact us so we can take care of it!',TDOMAIN);?></p>

						<?php endif;?>
					</div>
					<?php endif; ?>
				</div>
				<div class="wcontain">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Middle') ) : ?>
					<div class="widget">
						<?php if(!lebenswelt('sidebar_no_default')):?>
						
							<h3 class="wtitle"><?php _e('Visit our friends!',TDOMAIN);?></h3><p><?php _e('A few highly recommended friends...',TDOMAIN);?></p><ul><?php wp_list_bookmarks('title_li=&categorize=0'); ?></ul>
						
						<?php endif;?>
					</div>
					<?php endif; ?>
				</div>
				<div class="wcontain">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>
						<div class="widget">
						<?php if(!lebenswelt('sidebar_no_default')):?>
						
							<h3 class="wtitle"><?php _e('Archives', TDOMAIN);?></h3><p><?php _e('All entries, chronologically...',TDOMAIN);?></p><ul><?php wp_get_archives('type=monthly&limit=12'); ?> </ul>
					
						<?php endif;?>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	<?php endif; ?>
<?php } 

function lebenswelt_footcol_sidebar(){?>		
	<div id="fcolumns_container" class="fix">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Columns') ) : ?>
			<div class="fcol">
				<div class="fcol_pad">
					<?php if(lebenswelt_pro('footer_logo','')):?>
						<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>">
							<img src="<?php echo lebenswelt('footer_logo');?>" alt="<?php bloginfo('name');?>" />
						</a>
					<?php else:?>
						<h1 class="site-title">
							<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>">
								<?php bloginfo('name');?>
							</a>
						</h1>
					<?php endif;?>
				</div>
			</div>
			<div class="fcol">
				<div class="fcol_pad">
					<h3 class="wtitle"><?php _e('Pages',TDOMAIN);?></h3>
					<?php lebenswelt_nav('footnav');?>
				</div>
			</div>
			<div class="fcol">
				<div class="fcol_pad">
					<h3 class="wtitle"><?php _e('Stay In Touch',TDOMAIN);?></h3>
						<ul>

						<?php if(lebenswelt('rsslink')):?>
							<li><a href="<?php echo RSSURL;?>" class="rsslink"><?php _e('RSS Feed', TDOMAIN);?></a></li>
						<?php endif;?>
						<?php if(VPRO):?>
							<?php if(lebenswelt('twitterlink')):?>
								<li><a href="<?php echo lebenswelt('twitterlink');?>" class="twitterlink">Twitter</a></li>
							<?php endif;?>
							<?php if(lebenswelt('facebooklink')):?>
								<li><a href="<?php echo lebenswelt('facebooklink');?>" class="facebooklink">Facebook</a></li>
							<?php endif;?>
							<?php if(lebenswelt('linkedinlink')):?>
								<li><a href="<?php echo lebenswelt('linkedinlink');?>" class="linkedinlink">LinkedIn</a></li>
							<?php endif;?>
						<?php endif;?>
						</ul>

				</div>
			</div>
			<div class="fcol">
				<div class="fcol_pad">
					<h3 class="wtitle"><?php _e('More',TDOMAIN);?></h3>
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
<?php }