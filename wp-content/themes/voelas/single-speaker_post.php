<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rvdx Theme
 */

get_header();

do_action( 'rvdx-theme/site/site-content-before', 'single' ); ?>

<div <?php rvdx_theme_content_class() ?>>
	<div class="row">

		<?php do_action( 'rvdx-theme/site/primary-before', 'single' ); ?>

		<div id="primary" <?php rvdx_theme_primary_content_class(); ?>>

			<?php do_action( 'rvdx-theme/site/main-before', 'single' ); ?>

			<main id="main" class="site-main">
				<?php while ( have_posts() ) : the_post();
					rvdx_theme()->do_location( 'single', 'template-parts/single-speaker-post' );
				endwhile; ?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div>
</div>

<?php get_footer();
