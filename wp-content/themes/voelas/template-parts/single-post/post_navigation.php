<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rvdx Theme
 */

the_post_navigation( array(
	'prev_text' => sprintf( '
		<div class="screen-reader-text">%1$s</div>
		<div class="nav-text">%1$s</div>
		<h4 class="post-title">%2$s</h4>',
		esc_html__( 'Previous post', 'voelas' ),
		'%title'
	),
	'next_text' => sprintf( '
		<div class="screen-reader-text">%1$s</div>
		<div class="nav-text">%1$s</div>
		<h4 class="post-title">%2$s</h4>',
		esc_html__( 'Next post', 'voelas' ),
		'%title'
	),
) );
