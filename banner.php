<div id="header" class="fix container-fluid">
	<div id="wrapper"><!-- Header wrapper -->
				<div class="content fix span3 borderbox">

					<div class="headline">
						<?php if(lebenswelt('custom_header')):?>
							<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name');?>"><img src="<?php echo lebenswelt('custom_header');?>" alt="<?php bloginfo('name');?>" /></a>
						<?php else:?>
						<h1 class="site-title"><a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php bloginfo('name');?></a></h1>
						<h6 class="site-description"><?php bloginfo('description');?></h6>
						<?php endif;?>
					</div>

				</div><!-- end span -->

				<div class="span9 borderbox hidden-phone">
					<ul class="hugenav hidden-phone" style="float:right;">
						<li><a href="/websites">Build</a></li>
						<li><a href="/portfolio/ethika-politika">Strategy</a></li>
						<li><a href="/quotes">Quote</a></li>
					</ul>
				</div>
				<!--
				<div class="hidden-small hidden-tablet hidden-phone content fix span8">
					<ul class="ch-grid">
						<li></li>
						<li></li>
						<li>
							<div class="ch-item"> 
								<div class="ch-info">
									<h3>Websites</h3>
									<p><a href="/websites">Need One?</a></p>
								</div>
							<div class="ch-thumb ch-img-1"></div>
							</div>
						</li>
						<li>
							<div class="ch-item"> 
								<div class="ch-info">
									<h3>Hosting</h3>
									<p><a href="/hosting">Turnkey Simple</a></p>
								</div>
							<div class="ch-thumb ch-img-3"></div>
							</div>
						</li>
						<li>
							<div class="ch-item"> 
								<div class="ch-info">
									<h3>Quotes</h3>
									<p><a href="/quotes">They're Free</a></p>
								</div>
							<div class="ch-thumb ch-img-2"></div>
							</div>
						</li>
					</ul>
				</div>
				-->

			</div><!-- end container -->
			<!-- end header -->
	</div><!-- end header wrapper -->