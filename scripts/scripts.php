<?php ?>	

	<!-- Call Bootstrap Javascript -->

		<script src="/wp-content/themes/Lebenswelt2/js/bootstrap.js"></script>
		<script src="/wp-content/themes/Lebenswelt2/js/modernizr.js"></script>
	
	<!-- Bootstrap Carousel Slider Initilization -->

		<script>
		$(function(){
 		 $('#myCarousel').carousel();
		});
		</script>

	<!-- Javascript modifications for WordPress-powered menus in Bootstrap -->

	<script>  
		$(document).ready(function() {
			$('.dropdown > a').addClass('dropdown-toggle').attr("data-toggle", "dropdown").append(' <b class="caret"></b>').dropdown();
			$('.dropdown .sub-menu').addClass('dropdown-menu');
			$('.dropdown-submenu > ul').addClass('dropdown-menu');
			$('.dropdown-submenu > a').removeClass('dropdown-toggle');
			$('.dropdown-menu > li').removeClass('dropdown');
		});
	</script>


	<!-- Google Analytics -->

		<?php get_template_part ('scripts/analytics');?>
