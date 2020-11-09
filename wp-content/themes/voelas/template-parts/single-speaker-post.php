<?php
/**
 * Single Post template (fallback for single location)
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		rvdx_theme()->do_location( 'single-post-content', 'template-parts/content-post' );
	?>
</article>