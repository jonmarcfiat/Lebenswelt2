<div id="wrapper"><!-- Navbar wrapper -->
	

<!-- ####### -- Navbar (Standard) -- ####### -->

<div class="hidden-phone navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!--
			<a class="brand" href="#">
			<img src="../wp-content/uploads/logos/fiat-logo-small.png" height="20px">
			</a>
			-->
			<ul class="nav">
				<li class="divider-vertical"></li>
				<li><a href="/"><i class="icon-home icon-white" style="margin: 3px 8px;"></i></a></li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-user icon-white" style="margin: 3px 8px;"></i> Team
					</a>
						<ul class="dropdown-menu">
							<li><a href="/team/philosophy">Philosophy</a></li>
							<li><a href="/team/people">People</a></li>
							<li><a href="/team/partners">Partners</a></li>
						</ul>
				</li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-fire icon-white" style="margin: 3px 8px;"></i> Solutions
					</a>
						<ul class="dropdown-menu">
							<li><a href="/websites">Websites</a></li>
							<li><a href="/branding">Branding</a></li>	
							<li><a href="/hosting">Hosting</a></li>
							<li><a href="/portfolio/ethika-politika">Strategy</a></li>								
						</ul>
				</li>
				<li class="divider-vertical"></li>
				<li><a href="/?page_id=77"><i class="icon-bookmark icon-white" style="margin: 3px 8px;"></i> Portfolio</a></li>
				<li class="divider-vertical"></li>
				<li><a href="/?page_id=840"><i class="icon-list icon-white" style="margin: 3px 8px;"></i> Blog</a></li>
				<li class="divider-vertical"></li>
				<li><a href="/?page_id=540" style="background: #ECBE13; color: #fff;"><i class="icon-share icon-white" style="margin: 3px 10px;"></i> Get a Quote</a></li>
				<li class="divider-vertical"></li>
			</ul>
			<img src="http://fiatinsight.com/wp-content/uploads/logos/fiat-circle-logo.png" style="float:right; margin-top: 5px; opacity: .7;" height="28px">
			<a href="/clients"><button class="btn btn-primary" style="float:right; margin-right: 30px;">Clients</button></a>
		</div>
	</div>
</div>

<!-- end navbar (standard) -->

<!-- ####### -- Navbar (Mobile) -- ####### -->

<div class="hidden-phone hidden-tablet hidden-small hidden-desktop navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="/"><i class="icon-home icon-white" style="margin: 3px 8px;"></i> Home</a></li>
					<li><a href="/?page_id=155"><i class="icon-user icon-white" style="margin: 3px 8px;"></i> Our Team</a></li>
					<li><a href="/websites"><i class="icon-fire icon-white" style="margin: 3px 8px;"></i> Websites</a></li>
					<li><a href="/blogs"><i class="icon-comment icon-white" style="margin: 3px 8px;"></i> Blogs</a></li>
					<li><a href="/portfolio"><i class="icon-bookmark icon-white" style="margin: 3px 8px;"></i> Portfolio</a></li>
					<li><a href="/quotes"><i class="icon-share icon-white" style="margin: 3px 8px;"></i> Quotes</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- end navbar (mobile) -->

<!-- ####### -- Navbar (WordPress) -- ####### -->

<!--
<?php function nav_fallback() {?>
	<ul id="menu-nav" class="<?php if(pagelines('enable_drop_down')) echo 'mnav dropdown fix'; else echo 'mnav fix';?>">
		<?php wp_list_pages( 'title_li=&sort_column=menu_order&depth=3'); ?>
	</ul>
		<?php	}  if(function_exists('wp_nav_menu')):?>
			<?php wp_nav_menu( array('menu_class'  => 'nav', 'container' => null, 'container_class' => '', 'depth' => 3, 'theme_location'=>'primary', 'fallback_cb'=>'nav_fallback') );?>
		<?php else:?>
			<?php nav_fallback();?>
		<?php endif;?>
-->

<!-- end navbar (wordpress) -->

</div><!-- end navbar wrapper -->