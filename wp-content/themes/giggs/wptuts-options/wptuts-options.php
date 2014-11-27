<?php
	function wptuts_get_default_options() {
	    $options = array(
	        'banner' => ''
	    );
	    return $options;
	}
	function wptuts_options_init() {
    	$wptuts_options = get_option( 'theme_wptuts_options' );
	 
	    // Are our options saved in the DB?
	    if ( false === $wptuts_options ) {
	        // If not, we'll save our default options
	        $wptuts_options = wptuts_get_default_options();
	        add_option( 'theme_wptuts_options', $wptuts_options );
	    }
	 
	    // In other case we don't need to update the DB
	}
	// Initialize Theme options
	add_action( 'after_setup_theme', 'wptuts_options_init' );
	
	// Add "WPTuts Options" link to the "Appearance" menu
	function wptuts_menu_options() {
	    // add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function);
	    add_theme_page('Customize options', 'Customize options', 'edit_theme_options', 'wptuts-settings', 'wptuts_admin_options_page');
	}
	// Load the Admin Options page
	add_action('admin_menu', 'wptuts_menu_options');
	 
	function wptuts_admin_options_page() {
	    ?>
	        <!-- 'wrap','submit','icon32','button-primary' and 'button-secondary' are classes
	        for a good WP Admin Panel viewing and are predefined by WP CSS -->
	 
	        <div class="wrap">
	 
	            <div id="icon-themes" class="icon32"><br /></div>
	 
	            
	 
	            <!-- If we have any error by submiting the form, they will appear here -->
	            <?php settings_errors( 'wptuts-settings-errors' ); ?>
	 
	            <form id="form-wptuts-options" action="options.php" method="post" enctype="multipart/form-data">
	 
	                <?php
	                    settings_fields('theme_wptuts_options');
	                    do_settings_sections('wptuts');
	                ?>
	 
	                <p class="submit">
	                    <input name="theme_wptuts_options[submit]" id="submit_options_form" type="submit" class="button-primary" value="<?php esc_attr_e('Save Settings', 'wptuts'); ?>" />
	                    
	                </p>
	 
	            </form>
	 			<?php screen_icon(); ?>
	        <h3>Options for Homepage</h3>
            <!-- Update footer -->
            <?php
              if ( !empty($_POST) && wp_verify_nonce($_POST['home_option'],'home_option') )
              {
                  	
              		update_option( 'text_for_homepage',($_POST['text_for_homepage']));
              		

            ?>
              		<div id="index_message" name="index_message" class="updated">Update successful!</div><br/>
              		<?php
              }
            ?>
			
			
			 
 		<ul class="tabs">
    	<li><a href="#tab1">Homepage</a></li>
    	
	</ul>     
 
    <div class="tab_container">
    	<!--Footer-->
       <div id="tab1" class="tab_content">
       		<form action="" method="post" id="theme_option_search">
       			 <!--title fr-->
              	   <label for="text_for_homepage">Text for Homepage</label><br/>
                   <textarea name="text_for_homepage" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1"><?php echo esc_attr( get_option('text_for_homepage')); ?></textarea><br /><br />
                
                   <input type="submit" name="footer_submit" value="Update" style="" class="button-primary"/>
                   
            
                  <?php wp_nonce_field('home_option','home_option'); ?>
             </form>
      </div>
      
     
    </div>
    
    <h3 style="float:left;width:100%;margin-top:20px;">Contact</h3>
   <?php
      if ( !empty($_POST) && wp_verify_nonce($_POST['social_option'],'social_option') )
      {
      	
          	update_option( 'url_address',($_POST['url_address']));
			update_option( 'url_phone',($_POST['url_phone']));
			update_option( 'url_email',($_POST['url_email']));
			update_option( 'url_vine',($_POST['url_vine']));
      		update_option( 'url_be',($_POST['url_be']));
      		update_option( 'url_linkin',($_POST['url_linkin']));
      		update_option( 'url_flickr',($_POST['url_flickr']));
			update_option( 'url_skype',($_POST['url_skype']));
			
    ?>
      		<div id="index_message" name="index_message" class="updated" style="display:table;width: 100%;margin-bottom: 0;">Update successful!</div><br/>
      		<?php
      }
    ?>
     <div class="tab_container">
	    	<!--Footer-->
	       <div class="tab_content tab_social" style="display:block;">
	       		<form action="" method="post" id="theme_option_search">
	       			 <label for="url_address">Address</label><br/>
	                   <input name="url_address" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_address') ); ?>"/><br /><br />
	       			 <!--title fr-->
	       			 <label for="url_phone">Phone</label><br/>
	                   <input name="url_phone" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_phone') ); ?>"/><br /><br />
	       			  <!--title fr-->
	       			 <label for="url_email">Email</label><br/>
	                   <input name="url_email" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_email') ); ?>"/><br /><br />
	       			 <!--title fr-->
	       			 
	       			 <label for="url_vine">Vine social</label><br/>
	                   <input name="url_vine" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_vine') ); ?>"/><br /><br />
	       			 
	              	   <label for="url_be">Be social</label><br/>
	                   <input name="url_be" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_be') ); ?>"/><br /><br />
	                
	                 <!--Summary fr-->
	                   <label for="url_linkin">Linkin</label><br/>
	                   <input name="url_linkin" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_linkin') ); ?>"/><br /><br />
	                   
	                 <!--Summary fr-->
	                   <label for="url_flickr">Flickr social</label><br/>
	                   <input name="url_flickr" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_flickr') ); ?>"/><br /><br />	
	                    <!--Summary fr-->
	                <!--Summary fr-->
	                   <label for="url_skype">Skype</label><br/>
	                   <input name="url_skype" size="65" style="border-style:inset;border-width: 2px;color: #000;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_skype') ); ?>"/><br /><br />	
	                    <!--Summary fr-->
	                   <input type="submit" name="footer_submit" value="Update" style="" class="button-primary"/>
	                   
	            
	                  <?php wp_nonce_field('social_option','social_option'); ?>
	             </form>
	      </div>
	 </div>
    <style>
       <style>
#id-support .support-class{
	padding:10px;
    border:1px solid #ddd;
}
textarea{width: 551px;
height: 100px;}

ul.tabs {
    margin: 0;
    padding: 0;
    float: left;
    list-style: none;
    height: 32px; /*--Set height of tabs--*/
    border-bottom: 1px solid #999;
    border-left: 1px solid #999;
    width: 100%;
}
ul.tabs li {
    float: left;
    margin: 0;
    padding: 0;
    height: 31px; /*--Subtract 1px from the height of the unordered list--*/
    line-height: 31px; /*--Vertically aligns the text within the tab--*/
    border: 1px solid #999;
    border-left: none;
    margin-bottom: -1px; /*--Pull the list item down 1px--*/
    overflow: hidden;
    position: relative;
    background: #e0e0e0;
}
ul.tabs li a {
    text-decoration: none;
    color: #000;
    display: block;
    font-size: 1.2em;
    padding: 0 20px;
    border: 1px solid #fff; /*--Gives the bevel look with a 1px white border inside the list item--*/
    outline: none;
}
ul.tabs li a:hover {
    background: #ccc;
}
html ul.tabs li.active, html ul.tabs li.active a:hover  { /*--Makes sure that the active tab does not listen to the hover properties--*/
    background: #fff;
    border-bottom: 1px solid #fff; /*--Makes the active tab look like it's connected with its content--*/
}
.tab_container {
    border: 1px solid #999;
    border-top: none;
    overflow: hidden;
    clear: both;
    float: left; width: 100%;
    background: #fff;
}
.tab_content {
    padding: 20px;
    font-size: 1.2em;
}


       </style> 
       <script type="text/javascript">
       
       jQuery(document).ready(function($) {
          
   	    //When page loads...
   	     
   	    $(".tab_content").hide(); //Hide all content
   	    $(".tab_content.tab_social").show(); 
   	    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
   	    $(".tab_content:first").show(); //Show first tab content

   	    //On Click Event
   	    $("ul.tabs li").click(function() {

   	        $("ul.tabs li").removeClass("active"); //Remove any "active" class
   	        $(this).addClass("active"); //Add "active" class to selected tab
   	        $(".tab_content").hide(); //Hide all tab content
			$(".tab_content.tab_social").show();
			 
   	        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
   	        $(activeTab).fadeIn(); //Fade in the active ID content
   	        return false;
   	    });

           $(".add-support").click(function(){
        	   var count=$('#id-support .support-class').length-1;
                count++;
             var html='<div class="support-class" style="border:1px solid #ddd;padding:10px;margin-bottom:10px;" >'+
                 '<label for="support"><strong>Support Name:&nbsp;&nbsp;</strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+
                 '<label for="support"><strong>Support Phone: </strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+
                 '<label for="support"><strong>Support Yahoo: </strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+
                 '<label for="support"><strong>Support Skype:&nbsp;</strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+ 
                 '</div>';
               //  alert(count);
               $('.insert').append(html);
                return false;


               });
   	    

   	});
       
       </script>
	        </div>
	    <?php
	}
	function wptuts_options_settings_init() {
	    register_setting( 'theme_wptuts_options', 'theme_wptuts_options', 'wptuts_options_validate' );
	 
	    // Add a form section for the banner
	    add_settings_section('wptuts_settings_header', __( 'Background Homepage', 'wptuts' ), 'wptuts_settings_header_text', 'wptuts');
	 
	    // Add banner uploader
	    add_settings_field('wptuts_setting_banner',  __( 'URL or upload file', 'wptuts' ), 'wptuts_setting_banner', 'wptuts', 'wptuts_settings_header');
	}
	add_action( 'admin_init', 'wptuts_options_settings_init' );
	 
	function wptuts_settings_header_text() {
	    ?>
	        <p><?php _e( 'Upload background images.', 'wptuts' ); ?></p>
	    <?php
	}
	 
	function wptuts_setting_banner() {
	    $wptuts_options = get_option( 'theme_wptuts_options' );
	    ?>
	    	<img src="<?php echo esc_url( $wptuts_options['banner'] ); ?>" id="banner_preview"/>
	        <input type="text" id="banner_url" name="theme_wptuts_options[banner]" value="<?php echo esc_url( $wptuts_options['banner'] ); ?>" style="width: 515px;"/>
	        <input id="upload_banner_button" type="button" class="button" value="<?php _e( 'Upload banner', 'wptuts' ); ?>" />
	        <span class="description"><?php _e('Upload an image for the background.', 'wptuts' ); ?></span>
	    <?php
	}
	function wptuts_options_validate( $input ) {
		
	    $default_options = wptuts_get_default_options();
	    $valid_input = $default_options;
	 
	    $submit = ! empty($input['submit']) ? true : false;
	    $reset = ! empty($input['reset']) ? true : false;
	 
	    if ( $submit )
	        $valid_input['banner'] = $input['banner'];
	    elseif ( $reset )
	        $valid_input['banner'] = $default_options['banner'];
	 
	    return $valid_input;
	}
	function wptuts_options_enqueue_scripts() {
	    wp_register_script( 'wptuts-upload', get_template_directory_uri() .'/wptuts-options/js/wptuts-upload.js', array('jquery','media-upload','thickbox') );
	 	
	    if ( 'appearance_page_wptuts-settings' == get_current_screen() -> id ) {
	        wp_enqueue_script('jquery');
	 
	        wp_enqueue_script('thickbox');
	        wp_enqueue_style('thickbox');
	 
	        wp_enqueue_script('media-upload');
	        wp_enqueue_script('wptuts-upload');
	 
	    }
	 
	}
	add_action('admin_enqueue_scripts', 'wptuts_options_enqueue_scripts');
	
	
	
	/*Footer*/