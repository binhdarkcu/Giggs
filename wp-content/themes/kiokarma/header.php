<?php get_template_part('tpl','head');?>

<?php if(is_page('contact') || is_single() ){?>
<body class="page page-id-8 page-template page-template-template-contact page-template-template-contact-php">	
<?php } else if(is_page('blog')){?>
<body class="blog">
<?php } else{ ?>
<body class="home page page-id-12 page-template page-template-template-portfolio page-template-template-portfolio-php">	
<?php }?>
<div id="loader" class="loader"><div class="loader-mark"></div></div>

