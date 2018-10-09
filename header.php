<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rocked
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="preloader">
		<div class="preloader-inner">
			<?php $preloader = get_theme_mod('preloader_text', __('Loading&hellip;','rocked')); ?>
			<?php echo esc_html($preloader); ?>
		</div>
	</div>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'rocked' ); ?></a>

		<header id="header" class="header">
			<div class="header-wrap">
				<div class="container">
					<div class="row">
						<div class="site-branding col-md-1 col-sm-1 col-xs-1">
							<?php rocked_branding(); ?>
						</div><!-- /.col-md-2 -->
						<div class="menu-wrapper col-md-10 col-sm-10 col-xs-10">
							<div class="btn-menu"><i class="fa fa-bars"></i></div>
							<nav id="mainnav" class="mainnav">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</nav><!-- #site-navigation -->
						</div><!-- /.col-md-10 -->
					</div><!-- /.row -->
				</div><!-- /container -->
			</div>
		</header>

		<?php if ( get_header_image() && ( get_theme_mod('front_header_type' ,'image') == 'image' && is_front_page() || get_theme_mod('site_header_type', 'image') == 'image' && !is_front_page() ) ) : ?>
		<div class="header-image parallax">
			<div class="header-info">
				<h2 class="header-title">
					<?php  
				if(is_front_page() || is_404()){
					echo 'Welcome to VectorPm Weddings';
				}
				elseif (is_single()){
					echo get_the_title( $post_id );
				}
				elseif(is_category()){
					echo single_cat_title();
				}
				else{
					$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
				}
				// Get the page slug
				$slug = $current_page->post_name; 
				echo ucwords($slug);  
				?>
				</h2>
				<div class="header-text">
				<?php
					$yoast_meta = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
					if ($yoast_meta) { //check if the variable(with meta value) isn't empty
						echo $yoast_meta;
					}elseif(is_single() || is_category()){
						echo the_excerpt( $post_id );
					}
					else{
						echo 'Oops! That page can’t be found.';
					}
				?>
				</div>
				<a href="https://vectorpm.net/contact/" class="roll-button">Contact us today</a>
			</div>
			<!-- <?php rocked_header_text(); ?>		 -->
		</div>
		<?php endif; ?>

		<div class="main-content">
			<div class="container">
				<div class="row">