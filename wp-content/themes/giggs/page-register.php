<?php get_header();?>

	<div id="content" class="site-content clearfix registerPage">
		<header class="page-header">
			<?php
				$idContact = get_page_id_by_slug('contact');
				$contact = get_post($idContact);
				$bigTitle = get_post_meta($idContact,'tt_page_introduce',true);
				$smalltext = get_post_meta($idContact,'tt_page_smalltext',true);
				//print_r($contact->post_content);
			?>
			<h1 class="page-title">
				<?php echo $bigTitle;?>		</h1><!-- end .page-title -->
	
						<div class="page-description">
					<?php echo $smalltext;?>		</			</div><!-- end .page-description -->
			
		</header>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<article id="post-150" class="post-150 page type-page status-publish hentry">
			
				<section class="entry-content">
					<div class="form-wrapper">
 
					<h2 class="register-heading"><?php _e( 'Sign Up', 'debate' ); ?></h2>
					 
					<div id="error-message"></div>
					
				        <!--display error/success message-->
					<div id="message">
						
					</div>
				 
					<form method="post" class="form-register">
						<input name="action" type="hidden" class="action" value="sub_register"/>
						<h3>Don't have an account?<br /> Create one now.</h3>
						<p><label>Last Name</label></p>
						<p><input type="text" value="" name="last_name" id="last_name" class="requiredField" /></p>
						<p><label>First Name</label></p>
						<p><input type="text" value="" name="first_name" id="first_name" class="requiredField" /></p>
						<p><label>Email</label></p>
						<p><input type="text" value="" name="email" id="email" class="email requiredField" /></p>
						<p><label>Username</label></p>
						<p><input type="text" value="" name="username" id="username" class="requiredField" /></p>
						<p><label>Password</label></p>
						<p><input type="password" value="" name="pwd1" id="pwd1" class="requiredField" /></p>
						<p><label>Password again</label></p>
						<p><input type="password" value="" name="pwd2" id="pwd2" class="requiredField" /></p>
						<div class="alignleft">
							<div class="loading" style="display: none;"><img style="width: 16px;height:16px;" src="assets/images/ajax-loader.gif" alt=""/></div>
						</div>
						<button type="submit" name="btnregister" class="button" >Submit</button>
						<input name="ajaxurl" type="hidden" class="ajaxurl" value="<?php echo bloginfo('home').'/wp-admin/admin-ajax.php'; ?>"/>
                      	<input name="security" type="hidden" class="action" value="<?php echo wp_create_nonce('security')?>"/>
						<input type="hidden" name="task" value="register" />
					</form>
				 
				</div>
					 
					</div>

				</section>
			
			</article><!-- end #post-## -->
			
		</main><!-- end #main -->
	</div><!-- end #primary -->

<style>
	input[type="text"].inputError,input[type="password"].inputError{
		border: 1px solid red;
	}
</style>
		<?php get_sidebar('contact')?>
	</div><!-- end #content -->
<?php get_footer();?>