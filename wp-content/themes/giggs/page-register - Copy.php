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
					 
					
					
				        <!--display error/success message-->
				<?php
					$err = '';
					$success = '';
				 
					global $wpdb, $PasswordHash, $current_user, $user_ID;
				 
					if(isset($_POST['task']) && $_POST['task'] == 'register' ) {
				 
						
						$pwd1 = $wpdb->escape(trim($_POST['pwd1']));
						$pwd2 = $wpdb->escape(trim($_POST['pwd2']));
						$first_name = $wpdb->escape(trim($_POST['first_name']));
						$last_name = $wpdb->escape(trim($_POST['last_name']));
						$email = $wpdb->escape(trim($_POST['email']));
						$username = $wpdb->escape(trim($_POST['username']));
						
						if( $email == "" || $pwd1 == "" || $pwd2 == "" || $username == "" || $first_name == "" || $last_name == "") {
							$err = 'Please don\'t leave the required fields.';
						} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$err = 'Invalid email address.';
						} else if(email_exists($email) ) {
							$err = 'Email already exist.';
						} else if($pwd1 <> $pwd2 ){
							$err = 'Password do not match.';		
						} else {
				 
							$user_id = wp_insert_user( array ('first_name' => apply_filters('pre_user_first_name', $first_name), 'last_name' => apply_filters('pre_user_last_name', $last_name), 'user_pass' => apply_filters('pre_user_user_pass', $pwd1), 'user_login' => apply_filters('pre_user_user_login', $username), 'user_email' => apply_filters('pre_user_user_email', $email), 'role' => 'subscriber' ) );
							if( is_wp_error($user_id) ) {
								$err = 'Error on user creation.';
							} else {
								do_action('user_register', $user_id);
								
								$success = 'You\'re successfully register';
							}
							
						}
						
					}
				?>
				<div id="error-message"></div>
				 <div id="message">
					<?php 
						if(! empty($err) ) :
							echo '<p class="error">'.$err.'';
						endif;
					?>
					
					<?php 
						if(! empty($success) ) :
							echo '<p class="error">'.$success.'';
						endif;
					?>
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
								<div class="alignleft"><p><?php if($sucess != "") { echo $sucess; } ?> <?php if($err != "") { echo $err; } ?></p></div>
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