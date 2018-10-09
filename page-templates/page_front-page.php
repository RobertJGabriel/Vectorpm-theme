<?php
/*
Template Name: Front Page
*/

get_header(); ?>
   <div class=" col-md-offset-2 col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="entry-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
