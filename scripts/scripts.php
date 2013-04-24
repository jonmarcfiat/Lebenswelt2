<?php ?>	

	<!-- CSlider Javascript -->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="/wp-content/themes/LebensweltCore/js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					interval    : 6000,
					bgincrement	: 450
				});
			
			});
		</script>


	<!-- Call Bootstrap Javascript -->

		<script src="/wp-content/themes/Lebenswelt2/js/bootstrap.js"></script>
		<script src="/wp-content/themes/Lebenswelt2/js/modernizr.js"></script>



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
