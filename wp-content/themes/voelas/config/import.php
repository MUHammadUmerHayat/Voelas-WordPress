<?php
/**
 * Theme import config file.
 *
 * @var array
 *
 * @package Storycle
 */
$theme = wp_get_theme();
$theme_slag = get_template();
$config = array(
	'xml' => false,
	'advanced_import' => array(
		'default' => array(
			'label'    => $theme->get( 'Name' ),
			'full'     => get_theme_file_uri( 'assets/demo/default.xml' ),
			'lite'     => false,
			'thumb'    => get_theme_file_uri( 'screenshot.png' ),
			'demo_url' => 'http://voelas-wp.dan-fisher.com/',
		),
	),
	'import' => array(
		'chunk_size' => 3,
	),
	'slider' => array(
		'path' => 'https://raw.githubusercontent.com/JetImpex/wizard-slides/master/slides.json',
	),
	'success-links' => array(
		'home' => array(
			'label'  => esc_html__( 'View your site', 'voelas' ),
			'type'   => 'primary',
			'target' => '_blank',
			'icon'   => 'dashicons-welcome-view-site',
			'desc'   => esc_html__( 'Take a look at your site', 'voelas' ),
			'url'    => home_url( '/' ),
		),
		'customize' => array(
			'label'  => esc_html__( 'Customize your theme', 'voelas' ),
			'type'   => 'primary',
			'target' => '_self',
			'icon'   => 'dashicons-admin-generic',
			'desc'   => esc_html__( 'Proceed to customizing your theme', 'voelas' ),
			'url'    => admin_url( 'customize.php' ),
		),
	),
	'export' => array(
		'options' => array(
			'site_icon',
			'elementor_cpt_support',
			'elementor_disable_color_schemes',
			'elementor_disable_typography_schemes',
			'elementor_container_width',
			'elementor_css_print_method',
			'elementor_global_image_lightbox',
			'elementor_page_title_selector',
			'elementor_default_generic_fonts',
			'elementor_space_between_widgets',
			'elementor_stretched_section_container',
			'elementor_viewport_lg',
			'elementor_viewport_md',
			'elementor_global_image_lightbox',
			'elementor_controls_usage',
			'mc4wp',
			'mc4wp_mailchimp_list_ids',
			'theme_mods_rvdx-theme',
			'wpgdprc_integrations_contact-form-7',
			'wpgdprc_integrations_wordpress',
			'wpgdprc_integrations_contact-form-7_form_text',
			'wpgdprc_integrations_contact-form-7_error_message',
			'cptui_post_types',
			'rx-theme-assistant-settings',
			'megamenu_toggle_blocks',
			'megamenu_themes_last_updated',
			'megamenu_themes',
			'megamenu_settings',
			'megamenu_multisite_share_themes',
			'widget_maxmegamenu',
			'cptui_post_types',
			'cptui_taxonomies',
		),
		'tables' => array(
			'wpgdprc_consents',
			'revslider_slides',
			'revslider_css',
			'revslider_layer_animations',
			'revslider_navigations',
			'revslider_sliders',
			'revslider_static_slides',
			'wp_term_taxonomy',
			'wp_postmeta',
			'wp_term_relationships',
			'wp_termmeta',
			'wp_terms',
			'wp_tm_tasks',
			'wp_tm_taskmeta',
			'wp_wpgdprc_consents',
			'wp_ycd_subscribers',
		),
	),
);
