<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rvdx Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-default'); ?>>

	<?php rvdx_theme_post_thumbnail( 'rvdx-theme-thumb-l' ); ?>

	<div class="entry-header">
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
		<h3 class="entry-title">
			<?php
				rvdx_theme_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?>
		</h3>
	</div><!-- .entry-header -->

	<?php rvdx_theme_post_excerpt(); ?>

	<div class="entry-footer">
		<?php rvdx_theme_post_link(); ?>
		<?php rvdx_theme_edit_link(); ?>
	</div><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
