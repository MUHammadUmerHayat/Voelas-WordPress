<?php
/**
 * Template Name: Full Width Content Layout
 * Template Post Type: post, page, event
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Rvdx Theme
 */

get_header();

	do_action( 'rvdx-theme/site/site-content-before', 'single' ); ?>

	<div <?php rvdx_theme_content_class() ?>>
		<div class="row">

			<?php do_action( 'rvdx-theme/site/primary-before', 'single' ); ?>

			<div id="primary" <?php rvdx_theme_get_full_layout_classes(); ?>>

				<?php do_action( 'rvdx-theme/site/main-before', 'single' ); ?>

				<main id="main" class="site-main"><?php
					while ( have_posts() ) : the_post();

						rvdx_theme()->do_location( 'single', 'template-parts/single-post' );

					endwhile; // End of the loop.
				?></main><!-- #main -->

				<?php do_action( 'rvdx-theme/site/main-after', 'single' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'rvdx-theme/site/primary-after', 'single' ); ?>

		</div>
	</div>

	<?php do_action( 'rvdx-theme/site/site-content-after', 'single' );

get_footer();
