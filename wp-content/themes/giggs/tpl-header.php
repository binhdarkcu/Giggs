
	<header id="header" class="site-header" role="banner">
		<div class="clearfix">

			<div id="header-primary" class="clearfix">

				<section class="site-branding">
					<a href="<?php bloginfo('home');?>">
						<img src="assets/images/logo.png" alt="Home" />
					</a>
				</section><!-- end .site-branding -->	

			</div><!-- end #header-primary -->

			<div id="header-secondary">
				
				
				<a class="simple-menu" href="javascript:void(0);"></a>

				<div id="sidr-containr">

					<div id="sidr" class="sidr right">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php get_template_part('tpl','menu');?>
						
						</nav><!-- end #site-navigation -->	
					</div><!-- end #sidr -->

				</div>

			</div><!-- end #header-secondary -->

		</div><!-- end .clearfix -->
	</header><!-- end #header -->