
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo get_bloginfo('name')?> | <?php echo get_bloginfo('description')?></title>
<?php
	//contact
	require_once 'inc/clsMobileDetect.php'; 
	require_once 'inc/application_top.php';
	
?>
<base href="<?php bloginfo('template_url')?>/"></base>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://demo.pau1winslow.com/giggs/xmlrpc.php">
<link rel="shortcut icon" href="favicon.ico?v=2"/>
<?php echo $iMobile == TRUE ? '<meta name="viewport" content="width=600" />':'' ?>
<?php echo $iPad == TRUE ? '<meta name="viewport" content="width=device-width, initial-scale=1">':'' ?>
<link rel='stylesheet' id='checkpoint-style-css'  href='style.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='sidr-css'  href='assets/css/sidr.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='line-icons-css'  href='assets/css/et-line.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href='assets/css/flexslider.css?ver=4.0' type='text/css' media='all' />

<link rel='stylesheet' href='css/all.css' type='text/css'/>
<script type='text/javascript' src='assets/js/jquery-1.11.1.min.js'></script>
<script src="js/fresco.js"></script>

<link rel='stylesheet' id='checkpoint-montserrat-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=4.0' type='text/css' media='all' />
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
<meta name="generator" content="WordPress 4.0" />
	<?php
		$bgHome = get_option('theme_wptuts_options');
	?>
    <style type='text/css'>
		<?php if(is_home()){?>
		body #home-primary .bg-home{
			background: url(images/cards.jpg) no-repeat;
			background-repeat: no-repeat;
			background-position: -55px -36px;
			background-attachment: scroll;
		}
		<?php }	?>
	</style>
	
	<script type="text/javascript">
		var LANG = "<?php echo $lang ?>";
		var ROOT = "<?php echo ROOT_WS_NAME ?>";
		var iMobile = <?php echo $iMobile == TRUE ? 'true':'false' ?>;
		var iPad = <?php echo $iPad == TRUE ? 'true':'false' ?>;
		var iTablet = <?php echo $iTablet == TRUE ? 'true':'false' ?>;
		var isDesktop = <?php echo $isDesktop == TRUE ? 'true':'false' ?>;
		var iSingle = <?php echo (is_single()) ? 'true':'false';?>;
	</script>
<?php //wp_head();?>
</head>

<body id="skrollr-body" class="home page page-id-231 page-template page-template-page-templateshomepage-php custom-background <?php if($iTablet == true) echo 'tablet';?> <?php if($iPad == true) echo 'ipad';?> <?php if($iMobile == true) echo 'mobile';?> <?php if($isDesktop == true) echo 'desktop';?>">

<div id="page" class="hfeed site">
<?php get_template_part('tpl','header');?>
	