<?php ?>

<!-- Facebook script -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=304418233011542";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<!-- Calling theme scripts (Deprecated??) -->
	<?php if (lebenswelt('footerscripts')) echo lebenswelt('footerscripts');?>

<!-- Calling Javascript -->
	<script src="/wp-content/themes/Lebenswelt2/js/main.js"></script>
	<script src="/wp-content/themes/Lebenswelt2/js/modernizr.custom.28468.js"></script>

<!-- Browser Update Notification -->

	<script type="text/javascript"> 
	var $buoop = {vs:{i:8,f:3.6,o:10.6,s:4,n:9}, text: "Your browser is <strong>out of date</strong>, has known <strong>security flaws</strong> and will <strong>not display all features</strong> of this website. <strong>Please click this bar to upgrade your browser</strong>.", newwindow: true} 
	$buoop.ol = window.onload; 
	window.onload=function(){ 
	 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
	 var e = document.createElement("script"); 
	 e.setAttribute("type", "text/javascript"); 
	 e.setAttribute("src", "http://browser-update.org/update.js"); 
	 document.body.appendChild(e); 
	} 
	</script> 
