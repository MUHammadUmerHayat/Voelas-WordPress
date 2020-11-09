<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rvdx Theme
 */

?>

<?php rvdx_theme_post_thumbnail( 'rvdx-theme-thumb-l', array( 'link' => false ) ); ?>

<header class="entry-header">
	<div class="entry-meta">
		<?php
			rvdx_theme_posted_by();
			rvdx_theme_posted_on();
			rvdx_theme_post_comments( array(
				'postfix' => esc_html__( 'Comment', 'voelas' ),
				'postfix_plural' => esc_html__( 'Comments', 'voelas' )
			) );
		?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

