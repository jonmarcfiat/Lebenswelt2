<?php if(function_exists('twitter_messages') && lebenswelt('twittername')):?>
<span class="twitter">
	 "<?php twitter_messages(lebenswelt('twittername'), 1, false, false, '', false, false, false); ?>" &mdash;&nbsp;<a class="twitteraccount" href="http://www.twitter.com/<?php echo lebenswelt('twittername');?>"><?php echo lebenswelt('twittername');?></a>
</span>
<?php endif;?>