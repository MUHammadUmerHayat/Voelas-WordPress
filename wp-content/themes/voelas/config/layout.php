<?php
/**
 * Layout configuration.
 *
 * @package Rvdx Theme
 */

add_action( 'after_setup_theme', 'rvdx_theme_set_layout', 5 );
function rvdx_theme_set_layout() {

	rvdx_theme()->layout = array(
		'one-right-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-lg-7', 'col-xl-8' ),
				'sidebar' => array( 'col-xs-12', 'col-lg-5', 'col-xl-4' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-lg-8', 'col-xl-9' ),
				'sidebar' => array( 'col-xs-12', 'col-lg-4', 'col-xl-3' ),
			),
		),
		'one-left-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-lg-7', 'col-xl-8', 'col-lg-push-5', 'col-xl-push-4' ),
				'sidebar' => array( 'col-xs-12', 'col-lg-5', 'col-xl-4', 'col-lg-pull-7', 'col-xl-pull-8' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-lg-8', 'col-xl-9', 'col-lg-push-4', 'col-xl-push-3' ),
				'sidebar' => array( 'col-xs-12', 'col-lg-4', 'col-xl-3', 'col-lg-pull-8', 'col-xl-pull-9' ),
			),
		),
		'fullwidth' => array(
			array(
				'content' => array( 'col-xs-12' ),
			),
		),
		'single-post-fullwidth' => array(
			array(
				'content' => array( 'col-xs-12', 'col-lg-8', 'col-lg-push-2' ),
			),
		),
	);
}
