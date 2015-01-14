<html lang="en-US" class="">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/favicon.ico">
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

<link rel="stylesheet" type="text/css" href="css/custom.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<?php if(is_page('contact')){?>
<body class="page page-id-8 page-template page-template-template-contact page-template-template-contact-php">	
<?php } else {?>
<body class="home page page-id-12 page-template page-template-template-portfolio page-template-template-portfolio-php">
<?php }?>