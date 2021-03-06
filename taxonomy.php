<?php 

// REDIRECT USERS TO JOIN PAGE::
if ( get_theme_mod( 'streamium_enable_splash_join_redirect', false )) {

	if ( !is_user_logged_in() ) {

		wp_redirect( site_url( '/join' ) );
	  	exit;

	}

}

get_header(); ?>

	<?php 
		if ( get_theme_mod( 'streamium_enable_loader' )) {
			
			get_template_part('templates/content', 'loader');

		} 
	?>

	<main class="cd-main-content">

		<section class="categories">

			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 video-header-archive">
						<h3><?php printf( __( 'Viewing: %s', 'streamium' ), single_cat_title( '', false ) ); ?></h3>

						<div class="streamium-drop-dropdown-wrapper open-to-left">
							<a class="streamium-drop-dropdown-trigger" href="#0"><?php _e( 'FILTER', 'streamium' ); ?></a>
							<nav class="streamium-drop-dropdown">
								<ul class="streamium-drop-dropdown-content">
									<li><a class="tax-search-filter" data-type="all" href="?sort=all"><?php _e( 'View All', 'streamium' ); ?></a></li>
								    <li><a class="tax-search-filter" data-type="reviewed" href="?sort=reviewed"><?php _e( 'Most Reviews', 'streamium' ); ?></a></li>
								    <li><a class="tax-search-filter" data-type="newest" href="?sort=newest"><?php _e( 'Recently Added', 'streamium' ); ?></a></li>
								    <li><a class="tax-search-filter" data-type="oldest" href="?sort=oldest"><?php _e( 'Oldest First', 'streamium' ); ?></a></li>
								</ul> <!-- .cd-dropdown-content -->
							</nav> <!-- .cd-dropdown -->
						</div> <!-- .cd-dropdown-wrapper -->
		
					</div><!--/.col-sm-12-->
				</div><!--/.row-->
			</div><!--/.container-->

			<div id="tax-watched"></div>

		</section><!--/.videos-->

	</main><!--/.main content-->

<?php get_footer(); ?>