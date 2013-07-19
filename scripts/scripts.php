<?php ?>	

	<!-- jQuery -->
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


	<!-- Call Bootstrap Javascript -->

		<script src="/wp-content/themes/Lebenswelt2/js/modernizr.js"></script>
		<script src="/wp-content/themes/Lebenswelt2/js/bootstrap.js"></script>


	<!-- Bootstrap Carousel Slider Initilization -->

		<script type="text/javascript">
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
