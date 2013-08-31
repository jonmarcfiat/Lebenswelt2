<div id="header" class="fix container-fluid">
	<div id="wrapper"><!-- Header wrapper -->
				<div class="content fix span6 borderbox">

					<div class="headline">
						<?php if(lebenswelt('custom_header')):?>
							<a class="home" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name');?>"><img src="<?php echo lebenswelt('custom_header');?>" alt="<?php bloginfo('name');?>" /></a>
						<?php else:?>
						<h1 class="site-title"><a class="home" href="<?php echo get_option('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php bloginfo('name');?></a></h1>
						<h6 class="site-description"><?php bloginfo('description');?></h6>
						<?php endif;?>
					</div>

				</div><!-- end span -->

				<div class="span6 borderbox" style="margin:0px auto 0px">
				<div style="padding: 60px 20px 30px;  min-width:257px; text-align:center">
					<p>We are a network of inquirers, converts, and reverts to the Catholic Church, as well as life-long Catholics on a journey of continual conversion to Jesus Christ.   </p>
					 <a class="btn btn-large btn-success dropdown-toggle" data-toggle="dropdown" href="#">
					Explore
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu">
							<!-- dropdown menu links -->
							</ul>
					<a href="#" target="new"><button class="btn btn-large btn-info" style="margin-left:10px"><i class="icon-user icon-white"></i> Join &raquo;</button></a>
					<a href="#" target="new"><button class="btn btn-large btn-info" style="margin-left:10px"><i class="icon-user icon-white"></i> Donate &raquo;</button></a>
					
			</div>
                
					
				</div>
				<!--
				<div class="hidden-small hidden-tablet hidden-phone content fix span8">
                <ul class="hugenav hidden-phone" style="float:right;">
						<li><a href="/join">Join</a></li>
						<li><a href="/donate">Donate</a></li>
					</ul>
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