<?php
	
/* This is the slider entity (for Strategy)

*/

?>

<div class="container">
	
	<script>
	  $(document).ready(function(){
	    $('.carousel').carousel({
	      interval: 5000
	    });
	  });
	</script>

<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="/wp-content/uploads/slider/slideWelcome.png" /></a></div>
    <div class="item"><img src="../wp-content/uploads/slide2.jpg" /></div>
    <div class="item"><img src="../wp-content/uploads/slide3.jpg" /></div>
    <!--<div class="item"><img src="../wp-content/uploads/slide3.jpg" /><div class="carousel-caption"><h4>Optional Caption</h4></div></div>-->
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

</div><!-- end container -->
