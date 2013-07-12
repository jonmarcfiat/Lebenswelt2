<?php if(is_home() || is_single() || lebenswelt('welcomeall')):?>		
	<?php if(lebenswelt('greeting') || lebenswelt('welcomemessage')):?>
		<div id="welcome" class="fix">
			<div class="welcometext">
				<?php if(lebenswelt('greeting')):?><h3 class="greeting"><?php echo lebenswelt('greeting');?></h3><?php endif;?>
				<?php if(lebenswelt('welcomemessage')):?><div class="welcomemessage"><?php echo lebenswelt('welcomemessage');?></div><?php endif;?>
				<?php get_template_part ('library/_twittermessages'); ?>
				<div class="clear"></div>
			</div>
		</div>
	<?php endif;?>			
<?php endif;?>