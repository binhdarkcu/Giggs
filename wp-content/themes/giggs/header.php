
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo get_bloginfo('name')?> | <?php echo get_bloginfo('description')?></title>

<base href="<?php bloginfo('template_url')?>/"></base>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://demo.pau1winslow.com/giggs/xmlrpc.php">
<link rel="shortcut icon" href="favicon.ico"/>

<link rel='stylesheet' id='checkpoint-style-css'  href='style.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='sidr-css'  href='assets/css/sidr.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='line-icons-css'  href='assets/css/et-line.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href='assets/css/flexslider.css?ver=4.0' type='text/css' media='all' />

<link rel='stylesheet' href='css/all.css' type='text/css'/>

<link rel='stylesheet' id='checkpoint-montserrat-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='checkpoint-rokkitt-css'  href='http://fonts.googleapis.com/css?family=Rokkitt%3A400%2C700&#038;ver=4.0' type='text/css' media='all' />
<meta name="generator" content="WordPress 4.0" />
	<?php
		$bgHome = get_option('theme_wptuts_options');
	?>
    <style type='text/css'>
		<?php if(is_home()){?>
		body #home-primary {
			background: url( <?php echo $bgHome['banner']?> );
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: right 88px;
			background-size: cover;
		}
		<?php }	?>
	</style>
</head>

<body class="home page page-id-231 page-template page-template-page-templateshomepage-php custom-background">

<div id="page" class="hfeed site">

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
				
				
				<a class="simple-menu" href="#sidr">Menu</a>

				<div id="sidr-containr">

					<div id="sidr">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php get_template_part('tpl','menu');?>
						
						</nav><!-- end #site-navigation -->	
					</div><!-- end #sidr -->

				</div>

			</div><!-- end #header-secondary -->

		</div><!-- end .clearfix -->
	</header><!-- end #header -->