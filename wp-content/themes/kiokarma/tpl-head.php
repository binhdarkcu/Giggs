<!DOCTYPE html>
<html lang="en-US" class="">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/favicon.ico?v=3">
<title><?php echo get_bloginfo('name')?> | <?php echo get_bloginfo('description')?></title>
<?php
	//contact
	require_once 'inc/clsMobileDetect.php'; 
	require_once 'inc/application_top.php';
	
?>
<base href="<?php bloginfo('template_url')?>/"></base>
<?php echo $iMobile == TRUE ? '<meta name="viewport" content="width=600" />':'' ?>
<?php echo $iPad == TRUE ? '<meta name="viewport" content="width=device-width, initial-scale=1">':'' ?>
<link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|PT+Serif:400italic,700italic&amp;subset=latin,latin-ext" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700,400' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/custom.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/fresco.js"></script>
<script type="text/javascript" src="js/class.siteMain.js"></script>

<link rel="stylesheet" type="text/css" href="css/fresco.css" media="all">

<script type="text/javascript">
	var LANG = "<?php echo $lang ?>";
	var ROOT = "<?php echo ROOT_WS_NAME ?>";
	var iMobile = <?php echo $iMobile == TRUE ? 'true':'false' ?>;
	var iPad = <?php echo $iPad == TRUE ? 'true':'false' ?>;
	var iTablet = <?php echo $iTablet == TRUE ? 'true':'false' ?>;
	var isDesktop = <?php echo $isDesktop == TRUE ? 'true':'false' ?>;
	var iSingle = <?php echo (is_single()) ? 'true':'false';?>;
</script>
</head>