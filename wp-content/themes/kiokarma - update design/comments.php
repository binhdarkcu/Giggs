<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">
	
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php wp_list_comments('type=comment&callback=display_custom_comments'); ?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>
	
	<?php
		function display_custom_comments($comment, $args, $depth) {
		    $isByAuthor = false;
		
		    if($comment->comment_author_email == get_the_author_meta('email')) {
		        $isByAuthor = true;
		    }
		
		   $GLOBALS['comment'] = $comment; ?>
		
		   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		   	 <article id="div-comment-<?php comment_ID(); ?>" class="comment-body"> 
		   	 	<footer class="comment-meta">
		   	 		<div class="comment-author vcard"> 
		   	 			<?php echo get_avatar( $comment->comment_author_email, 42 ); ?> 
		   	 			<b class="fn"><?php printf(__('%s'), get_comment_author()) ?></b> 
		   	 			<span class="says">says:</span>
		   	 		</div>
		   	 		<div class="comment-metadata"> 
		   	 			<a href="http://demo.themerain.com/skills/meet-skills-a-focused-grid-theme/#comment-6"> 
		   	 				<time datetime="<?php comment_date('n-j-Y'); ?>"> <?php comment_date('n-j-Y'); ?></time> 
		   	 			</a>
		   	 		</div>
		   	 	</footer>
		   	 	<div class="comment-content">
		   	 		<p><?php comment_text() ?></p>
		   	 	</div>
		   	 	<div class="reply">
		   	 		<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		   	 	</div> 
		   	 </article>
		   	
		   	
		   	
		     
		    </li>
		<?php
		}
		/*<li class="comment byuser comment-author-paul bypostauthor even thread-even depth-1" id="comment-7">
	
		<div class="the-comment clearfix">

			<div class="comment-header">
				<img alt="" src="http://0.gravatar.com/avatar/01a58b7b53bb6abff793423defb3332f?s=50&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G" class="avatar avatar-50 photo" height="50" width="50">			</div><!-- end .comment-header -->
			
			<div class="comment-core">
			
				<div class="comment-author">
					<strong>Paul</strong> said on					June 9, 2014 at 5:06 pm: <a class="comment-reply-link" href="/giggs/2014/06/09/standard-post-with-all-the-trimmings/?replytocom=7#respond" onclick="return addComment.moveForm(&quot;-7&quot;, &quot;7&quot;, &quot;respond&quot;, &quot;105&quot;)">Reply</a>				</div><!-- end .comment-author .meta -->
				
				<div class="comment-text">
										<p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam.</p>
				</div><!-- end .comment-text -->
			
			</div><!-- end .comment-core -->
			
		</div><!-- end .the-comment -->

</li>*/
	?>
	<style>
		.comment-header .ac-comment-edit a{
			margin-right: 10px;
		}
		ol.comment-list ul.children{
			margin-left: 11%;
		}
	</style>
</div><!-- end #comments -->
