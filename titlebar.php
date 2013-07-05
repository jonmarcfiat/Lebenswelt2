<?php

// Titlebars

?>

	<?php if ( is_front_page() ) :?>
	<div id="titlebar-alt">
		<div class="container grad2">
			<center><h2 class="whiteout" style="padding-bottom: 0;">Welcome to the Homepage</h2>
			<p class="lead blackout">We're glad you're here!</p></center>
		</div>
	</div>
	<? endif;?>
	
	<?php if ( is_home() ) :?>
	<div id="titlebar">
		<div id="wrapper">
			<center><h2 class="blackout">Our Blog</h2></center>
		</div>
	</div>
	<? endif;?>

	<?php if ( is_page('x') ) :?>
	<div id="titlebar">
		<div id="wrapper">
			<center><h2 class="blackout">Headline Here!</h2></center>
		</div>
	</div>
	<? endif;?>
