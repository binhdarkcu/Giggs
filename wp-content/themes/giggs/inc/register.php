<?php
add_action( 'wp_ajax_sub_register', 'tt_ajax_sub_register' );
add_action( 'wp_ajax_nopriv_sub_register', 'tt_ajax_sub_register' );

function tt_ajax_sub_register(){
	$err = '';
	$success = '';
 	
	global $wpdb, $PasswordHash, $current_user, $user_ID;
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
			do_action('sub_register', $user_id);
			
			$success = 'You\'re successfully register';
		}
		
	}
}
