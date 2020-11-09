<?php
/**
 * Pagination template
 */
?>
<?php
	$args[ 'prev_text' ] = '<span class="screen-reader-text"></span><i class="fa fa-angle-left" aria-hidden="true"></i>';
	$args[ 'next_text' ] = '<span class="screen-reader-text"></span><i class="fa fa-angle-right" aria-hidden="true"></i>';

	the_posts_pagination( $args );
?>
