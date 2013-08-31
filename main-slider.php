<!-- ####### -- Parallax Slider -- ####### -->
	
	<?php if( is_page(array('#')) ) :?>
		<div id="slider" class="css-slideshow span12"><!-- IMPORTANT: Set Span8 for Nav or Span12 for Navhor -->
			<input id="button-1" type="radio" name="radio-set" class="css-selector-1" checked="checked" />
			<label for="button-1" class="button-label-1"></label>				
			<input id="button-2" type="radio" name="radio-set" class="css-selector-2" />
			<label for="button-2" class="button-label-2"></label>
			<input id="button-3" type="radio" name="radio-set" class="css-selector-3" />
			<label for="button-3" class="button-label-3"></label>
			<input id="button-4" type="radio" name="radio-set" class="css-selector-4" />
			<label for="button-4" class="button-label-4"></label>
			<input id="button-5" type="radio" name="radio-set" class="css-selector-5" />
			<label for="button-5" class="button-label-5"></label>
				
			<label for="button-1" class="css-arrow css-a1"></label>
			<label for="button-2" class="css-arrow css-a2"></label>
			<label for="button-3" class="css-arrow css-a3"></label>
			<label for="button-4" class="css-arrow css-a4"></label>
			<label for="button-5" class="css-arrow css-a5"></label>
				
			<div class="css-content">
				<div class="css-parallax-bg"></div>
				<ul class="css-slider clearfix">
					<li><img src="../wp-content/uploads/2013/08/slideFisherMore.png" alt="image01" /></li>
					<li><img src="../wp-content/uploads/2013/08/wmidtbsslide.png" alt="image02" /></li>
					<li><img src="../wp-content/uploads/2013/08/pbslide-756x2501.png" alt="image03" /></li>
					<li><img src="../wp-content/uploads/2013/08/hffeature1-756x250-11.png" alt="image04" /></li>
					<li><img src="../wp-content/uploads/2013/08/pbslide-756x2501.png" alt="image05" /></li>
				</ul>
			</div><!-- css-content -->
				
		<div class="clear fix"></div>
		<div id="shadow"></div>

		</div><!-- css-slideshow -->
		
	<?php endif;?>

<!-- end Parallax Slider -->


<!-- ####### -- Auto Slider -- ####### -->

<?php if( is_page(array('Home')) ) :?>
	<div class="container">
	
		<div id="myCarousel" class="carousel slide span12">
  		<!-- Carousel items -->
			<div class="carousel-inner">
			    <div class="active item"><img src="../wp-content/uploads/2013/08/jhslide.jpg" /></div>
			    <div class="item"><img src="../wp-content/uploads/2013/08/wmidtbsslide1.jpg" /></div>
			    <div class="item"><img src="../wp-content/uploads/2013/08/wmidtbsslide.jpg" /></div>
		    	    <!--<div class="item"><img src="../wp-content/uploads/slide3.jpg" /><div class="carousel-caption"><h4>Optional Caption</h4></div></div>-->
			</div>
 		 <!-- Carousel nav -->
 		 <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		 <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	
	
	<!-- end container -->
<?php endif;?>

<!-- end Auto Slider -->
