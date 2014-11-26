<?php get_header();?>

	<div id="content" class="site-content clearfix">
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
					<div class="col-lg-8 col-lg-offset-2">
			           
			            <form id="defaultForm" method="post" class="form-horizontal" action="">
			            <?php
			                if($message != "")
			                {
			                    $alert = $status == 1 ? "alert-success" : "alert-danger";
			                    echo '<div class="alert '.$alert.'">'.$message.'</div>';
			                }
			                    
			            ?>
			              <div class="form-group">
			                <label class="col-lg-3 control-label">Username</label>
			                <div class="col-lg-5">
			                  <input type="text" class="form-control" name="username" />
			                </div>
			              </div>
			              <div class="form-group">
			                <label class="col-lg-3 control-label">Password</label>
			                <div class="col-lg-5">
			                  <input type="password" class="form-control" name="password" />
			                </div>
			              </div>
			              <div class="form-group">
			                <div class="col-lg-9 col-lg-offset-3">
			                  <button type="submit" class="btn btn-primary">Login</button>
			                  <?php  wp_nonce_field('login','login')?> 
			                </div>
			              </div>
			            </form>
			          </div>
				</section><!-- end .entry-content -->
			
			</article><!-- end #post-## -->
			
		</main><!-- end #main -->
	</div><!-- end #primary -->


		<?php get_sidebar('contact')?>
	</div><!-- end #content -->
<?php get_footer();?>