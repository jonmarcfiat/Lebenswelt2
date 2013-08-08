<?php ?>

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
