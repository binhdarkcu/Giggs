<?php
	if ( !empty($_POST) && wp_verify_nonce($_POST['login'],'login') ){
		$current_user = wp_get_current_user();
	    if($current_user->user_login)
	    {
	        $link = get_site_url().'/wp-admin/';
	        echo "<script>window.location.href = '$link';</script>";
	    }
	
	/*
	    echo 'Username: ' . $current_user->user_login . '<br />';
	    echo 'User email: ' . $current_user->user_email . '<br />';
	    echo 'User first name: ' . $current_user->user_firstname . '<br />';
	    echo 'User last name: ' . $current_user->user_lastname . '<br />';
	    echo 'User display name: ' . $current_user->display_name . '<br />';
	    echo 'User ID: ' . $current_user->ID . '<br />';
	*/   
	    $status = "0";
	    $message = "";
	    if(isset($_POST['username']))
	    {
	        $username = $_POST['username']; 
	        $password = $_POST['password'];
	        $user = get_user_by( 'login', $username );
	        if ( $user && wp_check_password( $password, $user->data->user_pass, $user->ID) )
	        {
	            wp_set_current_user( $user->ID, $user->user_login );
	            wp_set_auth_cookie( $user->ID );
	            $status = 1;
	            $message = "Login success";
	            $link = get_site_url().'/client/';
	            echo "<script>setTimeout(function(){window.location.href = '$link';},1000);</script>";
	        }
	        else
	        {
	            $message = "Login failed";
	        }
	    }
}
