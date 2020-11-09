<?php
/**
 * Sidebars configuration.
 *
 * @package Rvdx Theme
 */

add_action( 'after_setup_theme', 'rvdx_theme_register_sidebars', 5 );
function rvdx_theme_register_sidebars() {

	rvdx_theme_widget_area()->widgets_settings = apply_filters( 'rvdx-theme/widget_area/default_settings', array(
		'sidebar' => array(
			'name'           => esc_html__( 'Sidebar', 'voelas' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h5 class="widget-title">',
			'after_title'    => '</h5>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		)
	) );
}
