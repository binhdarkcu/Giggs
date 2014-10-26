
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Giggs | Just another Theme Demos site</title>

<base href="<?php bloginfo('template_url')?>/"></base>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://demo.pau1winslow.com/giggs/xmlrpc.php">
<link rel="shortcut icon" href="http://demo.pau1winslow.com/giggs/wp-content/uploads/sites/8/2014/09/favicon.png
" />

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
		<?php if(!is_page('contact')){?>
		body {
			background-image: url( <?php echo $bgHome['banner']?> );
			background-repeat: no-repeat;
			background-attachment: fixed;
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
					<a href="http://demo.pau1winslow.com/giggs/">
						<img src="http://localhost/PHP/BLISS/Yves/www/BE/wp-content/uploads/sites/8/2014/09/giggs.png" alt="Home" />
					</a>
				</section><!-- end .site-branding -->	

			</div><!-- end #header-primary -->

			<div id="header-secondary">
				<?php
					$madein = get_option('url_madein');
					$phone = get_option('url_phone');
				?>
				<h3 id="header-tagline"> <?php echo $madein.' '.$phone;?></h3>
				
				<a class="simple-menu" href="#sidr"></a>

				<div id="sidr-containr">

					<div id="sidr">

						<?php get_template_part('tpl','menu');?>

					</div><!-- end #sidr -->

				</div>

			</div><!-- end #header-secondary -->

		</div><!-- end .clearfix -->
	</header><!-- end #header -->