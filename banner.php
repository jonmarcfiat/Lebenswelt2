<div id="header" class="fix container-fluid">
	<div id="wrapper"><!-- Header wrapper -->
				<div class="content fix span4">

					<div class="headline span12">
						<?php if(pagelines('custom_header')):?>
							<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name');?>"><img src="<?php echo pagelines('custom_header');?>" alt="<?php bloginfo('name');?>" /></a>
						<?php else:?>
						<h1 class="site-title"><a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php bloginfo('name');?></a></h1>
						<h6 class="site-description"><?php bloginfo('description');?></h6>
						<?php endif;?>
					</div>

				</div><!-- end span -->

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

			</div><!-- end container -->
			<!-- end header -->
	</div><!-- end header wrapper -->