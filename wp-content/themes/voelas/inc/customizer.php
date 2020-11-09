<?php
/**
 * Theme Customizer.
 *
 * @package Rvdx Theme
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */

function rvdx_theme_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'rvdx-theme/customizer/options' , array(
		'prefix'        => 'voelas',
		'path'          => get_theme_file_path( 'framework/modules/customizer/' ),
		'capability'    => 'edit_theme_options',
		'type'          => 'theme_mod',
		'fonts_manager' => new CX_Fonts_Manager(),
		'options'       => array(

			/** `Site Indentity` section */
			'general_settings' => array(
				'title'       => esc_html__( 'General Site settings', 'voelas' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Favicon` section */
			'favicon' => array(
				'title'       => esc_html__( 'Favicon', 'voelas' ),
				'priority'    => 25,
				'panel'       => 'general_settings',
				'type'        => 'section',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'voelas' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'voelas' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'voelas' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title' => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'voelas' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'voelas' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'voelas' ),
					'minified' => esc_html__( 'Minified', 'voelas' ),
				),
				'type'    => 'control',
			),
			'page_title_visibility' => array(
				'title'   => esc_html__( 'Enable Page Title', 'voelas' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout' => array(
				'title'    => esc_html__( 'Page Layout', 'voelas' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'container_type' => array(
				'title'   => esc_html__( 'Container type', 'voelas' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'voelas' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'voelas' ),
				),
				'type' => 'control',
			),
			'sidebar_width' => array(
				'title'   => esc_html__( 'Sidebar width', 'voelas' ),
				'section' => 'page_layout',
				'default' => '1/3',
				'field'   => 'select',
				'choices' => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'voelas' ),
				'description' => esc_html__( 'Configure Color Scheme', 'voelas' ),
				'priority'    => 40,
				'type'        => 'panel',
			),
			'main_color_scheme' => array(
				'title'    => esc_html__( 'Color Scheme', 'voelas' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'color_scheme',
			),

			'accent_color' => array(
				'title'   => esc_html__( 'Accent color', 'voelas' ),
				'section' => 'main_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'primary_color' => array(
				'title'   => esc_html__( 'Primary color', 'voelas' ),
				'section' => 'main_color_scheme',
				'default' => '#d90e90',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'secondary_color' => array(
				'title'   => esc_html__( 'Secondary color', 'voelas' ),
				'section' => 'main_color_scheme',
				'default' => '#f09922',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'third_color' => array(
				'title'   => esc_html__( 'Third color', 'voelas' ),
				'section' => 'main_color_scheme',
				'default' => '#ef7630',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'fourth_color' => array(
				'title'   => esc_html__( 'Fourth color', 'voelas' ),
				'section' => 'main_color_scheme',
				'default' => '#822ea8',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'body_background_color' => array(
				'title'   => esc_html__( 'Background Color', 'voelas' ),
				'section' => 'main_color_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'typography_color_scheme' => array(
				'title'    => esc_html__( 'Typography Color Scheme', 'voelas' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'color_scheme',
			),
			'primary_text_color' => array(
				'title'   => esc_html__( 'Primary Text color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#8b8b9a',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'secondary_text_color' => array(
				'title'   => esc_html__( 'Secondary Text color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#8b8b9a',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Invert Text color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'link_color' => array(
				'title'   => esc_html__( 'Link color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#d90e90',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#26264b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'voelas' ),
				'section' => 'typography_color_scheme',
				'default' => '#f09922',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'voelas' ),
				'description' => esc_html__( 'Configure typography settings', 'voelas' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body text', 'voelas' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'body_typography',
				'default' => 'Barlow, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'body_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'body_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'body_typography',
				'default'     => '1.75',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'       => esc_html__( 'H1 Heading', 'voelas' ),
				'priority'    => 10,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'h1_typography',
				'default' => 'Barlow Condensed, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'h1_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'h1_typography',
				'default'     => '140',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'h1_typography',
				'default'     => '0.92857',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'       => esc_html__( 'H2 Heading', 'voelas' ),
				'priority'    => 15,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'h2_typography',
				'default' => 'Barlow Condensed, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'h2_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'h2_typography',
				'default'     => '70',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'h2_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'       => esc_html__( 'H3 Heading', 'voelas' ),
				'priority'    => 20,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h3_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'h3_typography',
				'default' => 'Barlow Condensed, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'h3_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'h3_typography',
				'default'     => '60',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'h3_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'       => esc_html__( 'H4 Heading', 'voelas' ),
				'priority'    => 25,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'h4_typography',
				'default' => 'Barlow Condensed, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'h4_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'h4_typography',
				'default'     => '30',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'h4_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'       => esc_html__( 'H5 Heading', 'voelas' ),
				'priority'    => 30,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'h5_typography',
				'default' => 'Barlow Condensed, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'h5_typography',
				'default' => '500',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'h5_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'h5_typography',
				'default'     => '1.3',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'       => esc_html__( 'H6 Heading', 'voelas' ),
				'priority'    => 35,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'h6_typography',
				'default' => 'Barlow Condensed, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'h6_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'h6_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'h6_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'h6_typography',
				'default'     => '0.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voelas' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => rvdx_theme_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Logo text` section */
			'logo_typography' => array(
				'title'       => esc_html__( 'Logo text', 'voelas' ),
				'priority'    => 40,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'voelas' ),
				'section'         => 'logo_typography',
				'default'         => 'Playfair Display, serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'voelas' ),
				'section'         => 'logo_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_font_styles(),
				'type'            => 'control',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'voelas' ),
				'section'         => 'logo_typography',
				'default'         => '900',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_font_weight(),
				'type'            => 'control',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'voelas' ),
				'section'         => 'logo_typography',
				'default'         => '22',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'voelas' ),
				'section'         => 'logo_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_character_sets(),
				'type'            => 'control',
			),

			/** `Menu` section */
			'menu_typography' => array(
				'title'       => esc_html__( 'Menu', 'voelas' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'menu_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'voelas' ),
				'section'         => 'menu_typography',
				'default'         => 'Barlow Condensed, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'menu_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'voelas' ),
				'section'         => 'menu_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_font_styles(),
				'type'            => 'control',
			),
			'menu_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'voelas' ),
				'section'         => 'menu_typography',
				'default'         => '600',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_font_weight(),
				'type'            => 'control',
			),
			'menu_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'voelas' ),
				'section'         => 'menu_typography',
				'default'         => '18',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'menu_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'menu_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'menu_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'menu_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'menu_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'voelas' ),
				'section'         => 'menu_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_character_sets(),
				'type'            => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography' => array(
				'title'       => esc_html__( 'Breadcrumbs', 'voelas' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'breadcrumbs_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voelas' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Barlow, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voelas' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voelas' ),
				'section' => 'breadcrumbs_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => rvdx_theme_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voelas' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.7',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'breadcrumbs_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'breadcrumbs_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voelas' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => rvdx_theme_get_character_sets(),
				'type'    => 'control',
			),
			/** `Button` section */
			'button_typography' => array(
				'title'       => esc_html__( 'Button', 'voelas' ),
				'priority'    => 55,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'button_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'voelas' ),
				'section'         => 'button_typography',
				'default'         => 'Barlow Condensed, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'button_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'voelas' ),
				'section'         => 'button_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_font_styles(),
				'type'            => 'control',
			),
			'button_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'voelas' ),
				'section'         => 'button_typography',
				'default'         => '600',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_font_weight(),
				'type'            => 'control',
			),
			'button_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'voelas' ),
				'section'         => 'button_typography',
				'default'         => '18',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'button_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voelas' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voelas' ),
				'section'     => 'button_typography',
				'default'     => '1.25',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'button_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voelas' ),
				'section'     => 'button_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'button_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'voelas' ),
				'section'         => 'button_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => rvdx_theme_get_character_sets(),
				'type'            => 'control',
			),

			/** `Website Preloader` panel */
			'preloader_options' => array(
				'title'       => esc_html__( 'Website Preloader', 'voelas' ),
				'priority'    => 55,
				'type'        => 'section',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'voelas' ),
				'section'  => 'preloader_options',
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'preloader_color' => array(
				'title'           => esc_html__( 'Preloader Color', 'voelas' ),
				'section'         => 'preloader_options',
				'field'           => 'hex_color',
				'default'         => '#d90e90',
				'type'            => 'control',
			),
			'preloader_bg_color' => array(
				'title'           => esc_html__( 'Background Color', 'voelas' ),
				'section'         => 'preloader_options',
				'field'           => 'hex_color',
				'default'         => '#ffffff',
				'type'            => 'control',
			),
			'preloader_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'voelas' ),
				'section' => 'preloader_options',
				'field'   => 'image',
				'type'    => 'control',
				'default' => '',
			),
			'preloader_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'voelas' ),
				'section' => 'preloader_options',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat'  => esc_html__( 'No Repeat', 'voelas' ),
					'repeat'     => esc_html__( 'Tile', 'voelas' ),
					'repeat-x'   => esc_html__( 'Tile Horizontally', 'voelas' ),
					'repeat-y'   => esc_html__( 'Tile Vertically', 'voelas' ),
				),
				'type' => 'control',
			),
			'preloader_bg_position_x' => array(
				'title'   => esc_html__( 'Background Position', 'voelas' ),
				'section' => 'preloader_options',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'voelas' ),
					'center' => esc_html__( 'Center', 'voelas' ),
					'right'  => esc_html__( 'Right', 'voelas' ),
				),
				'type' => 'control',
			),
			'preloader_content' => array(
				'title'   => esc_html__( 'Preloader Page Content', 'voelas' ),
				'section' => 'preloader_options',
				'default' => 'Loading...',
				'field'   => 'textarea',
				'type'    => 'control',
			),

			/** `Header` panel */
			'header_options' => array(
				'title'       => esc_html__( 'Header', 'voelas' ),
				'priority'    => 60,
				'type'        => 'panel',
			),

			/** `Header styles` section */
			'header_styles' => array(
				'title'       => esc_html__( 'Styles', 'voelas' ),
				'priority'    => 5,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_bg_color' => array(
				'title'           => esc_html__( 'Background Color', 'voelas' ),
				'section'         => 'header_styles',
				'field'           => 'hex_color',
				'default'         => '#ccc',
				'type'            => 'control',
			),
			'header_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'voelas' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
				'default' => get_theme_file_uri( 'assets/img/bg-breadcrumbs-01-1894x424.jpg' )
			),
			'header_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'voelas' ),
				'section' => 'header_styles',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat'  => esc_html__( 'No Repeat', 'voelas' ),
					'repeat'     => esc_html__( 'Tile', 'voelas' ),
					'repeat-x'   => esc_html__( 'Tile Horizontally', 'voelas' ),
					'repeat-y'   => esc_html__( 'Tile Vertically', 'voelas' ),
				),
				'type' => 'control',
			),
			'header_bg_position_x' => array(
				'title'   => esc_html__( 'Background Position', 'voelas' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'voelas' ),
					'center' => esc_html__( 'Center', 'voelas' ),
					'right'  => esc_html__( 'Right', 'voelas' ),
				),
				'type' => 'control',
			),
			'header_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'voelas' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'voelas' ),
					'fixed'  => esc_html__( 'Fixed', 'voelas' ),
				),
				'type' => 'control',
			),

			/** 'Mobile Panel' panel */
			'mobile_panel_options' => array(
				'title'       => esc_html__( 'Mobile Panel', 'voelas' ),
				'priority'    => 65,
				'type'        => 'section',
			),
			'mobile_panel_enable' => array(
				'title'   => esc_html__( 'Enable Mobile Panel', 'voelas' ),
				'description' => esc_html__( 'This panel is displayed on mobile devices.', 'voelas' ),
				'section' => 'mobile_panel_options',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'mobile_panel_home_button' => array(
				'title'   => esc_html__( 'Show "Home button" in Mobile Panel', 'voelas' ),
				'section' => 'mobile_panel_options',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'mobile_panel_main_menu' => array(
				'title'   => esc_html__( 'Show "Main Menu" in Mobile Panel', 'voelas' ),
				'section' => 'mobile_panel_options',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			'mobile_panel_sidebar' => array(
				'title'   => esc_html__( 'Show "Blog Sidebar" in Mobile Panel', 'voelas' ),
				'section' => 'mobile_panel_options',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			'mobile_panel_cart' => array(
				'title'   => esc_html__( 'Show "Shop Cart" in Mobile Panel', 'voelas' ),
				'description' => esc_html__( 'The cart will be displayed if the WooCommerce plugin is installed.', 'voelas' ),
				'section' => 'mobile_panel_options',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),


			/** `Footer` panel */
			'footer_options' => array(
				'title'    => esc_html__( 'Footer', 'voelas' ),
				'priority' => 110,
				'type'     => 'section',
			),

			'footer_copyright' => array(
				'title'   => esc_html__( 'Copyright text', 'voelas' ),
				'description' => esc_html__( 'Copyright is displayed in the default footer.', 'voelas' ),
				'section' => 'footer_options',
				'default' => rvdx_theme_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title'       => esc_html__( 'Blog Settings', 'voelas' ),
				'priority'    => 115,
				'type'        => 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title'           => esc_html__( 'Blog', 'voelas' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_sidebar_position' => array(
				'title'    => esc_html__( 'Sidebar', 'voelas' ),
				'section'  => 'blog',
				'default'  => 'one-right-sidebar',
				'field'    => 'select',
				'priority' => 10,
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'voelas' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'voelas' ),
					'none'              => esc_html__( 'No sidebar', 'voelas' ),
				),
				'type' => 'control',
				'active_callback' => 'rvdx_theme_is_blog_sidebar_enabled',
			),
			'blog_navigation_type' => array(
				'title'   => esc_html__( 'Navigation type', 'voelas' ),
				'section' => 'blog',
				'default' => 'pagination',
				'field'   => 'select',
				'choices' => array(
					'navigation' => esc_html__( 'Navigation', 'voelas' ),
					'pagination' => esc_html__( 'Pagination', 'voelas' ),
				),
				'type' => 'control',
			),
			'blog_sticky_type' => array(
				'title'    => esc_html__( 'Sticky label type', 'voelas' ),
				'section'  => 'blog',
				'default'  => 'icon',
				'field'    => 'select',
				'priority' => 15,
				'choices' => array(
					'label' => esc_html__( 'Text Label', 'voelas' ),
					'icon'  => esc_html__( 'Font Icon', 'voelas' ),
					'both'  => esc_html__( 'Text with Icon', 'voelas' ),
				),
				'type' => 'control',
			),
			'blog_sticky_label' => array(
				'title'           => esc_html__( 'Featured Post Label', 'voelas' ),
				'description'     => esc_html__( 'Label for sticky post', 'voelas' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Featured', 'voelas' ),
				'field'           => 'text',
				'priority'        => 20,
				'active_callback' => 'rvdx_theme_is_sticky_text',
				'type'            => 'control',
			),
			'blog_post_author' => array(
				'title'    => esc_html__( 'Show post author', 'voelas' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 25,
				'type'     => 'control',
			),
			'blog_post_publish_date' => array(
				'title'    => esc_html__( 'Show publish date', 'voelas' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 30,
				'type'     => 'control',
			),
			'blog_post_categories' => array(
				'title'    => esc_html__( 'Show categories', 'voelas' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 35,
				'type'     => 'control',
			),
			'blog_post_tags' => array(
				'title'    => esc_html__( 'Show tags', 'voelas' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 40,
				'type'     => 'control',
			),
			'blog_post_comments' => array(
				'title'    => esc_html__( 'Show comments', 'voelas' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 45,
				'type'     => 'control',
			),
			'blog_post_image_size' => array(
				'title'    => esc_html__( 'Post Image Size', 'voelas' ),
				'section'  => 'blog',
				'default'  => 'original',
				'field'    => 'select',
				'priority' => 52,
				'choices' => array(
					'original'      => esc_html__( 'Original Size', 'voelas' ),
					'full-width'      => esc_html__( 'Full Width', 'voelas' ),
					'fill-container' => esc_html__( 'Fill Container', 'voelas' ),
				),
				'type'    => 'control',
			),
			'blog_post_excerpt' => array(
				'title'   => esc_html__( 'Show Excerpt', 'voelas' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'priority' => 50,
				'type'    => 'control'
			),
			'blog_post_excerpt_words_count' => array(
				'title'       => esc_html__( 'Excerpt Words Count', 'voelas' ),
				'section'     => 'blog',
				'default'     => '50',
				'priority'    => 55,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
			),
			'blog_read_more_type' => array(
				'title'    => esc_html__( 'Read more button type', 'voelas' ),
				'section'  => 'blog',
				'default'  => 'text',
				'field'    => 'select',
				'priority' => 60,
				'choices' => array(
					'text'      => esc_html__( 'Text', 'voelas' ),
					'icon'      => esc_html__( 'Icon', 'voelas' ),
					'text_icon' => esc_html__( 'Text & Icon', 'voelas' ),
					'none'      => esc_html__( 'None', 'voelas' ),
				),
				'type'    => 'control',
			),
			'blog_read_more_text' => array(
				'title'           => esc_html__( 'Read more button text', 'voelas' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Read More', 'voelas' ),
				'field'           => 'text',
				'priority'        => 65,
				'type'            => 'control',
				'active_callback' => 'rvdx_theme_is_blog_read_more_btn_text',
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'voelas' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar', 'voelas' ),
				'section' => 'blog_post',
				'default' => 'one-right-sidebar',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'voelas' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'voelas' ),
					'none'              => esc_html__( 'No sidebar', 'voelas' ),
				),
				'type' => 'control',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'voelas' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'voelas' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'voelas' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'voelas' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'voelas' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block' => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'voelas' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Related Posts` section */
			'related_posts' => array(
				'title'           => esc_html__( 'Related posts block', 'voelas' ),
				'panel'           => 'blog_settings',
				'priority'        => 30,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'related_posts_visible' => array(
				'title'   => esc_html__( 'Show related posts block', 'voelas' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_block_title' => array(
				'title'   => esc_html__( 'Related posts block title', 'voelas' ),
				'section' => 'related_posts',
				'default' => esc_html__( 'Related Posts', 'voelas' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'related_posts_count' => array(
				'title'   => esc_html__( 'Number of post', 'voelas' ),
				'section' => 'related_posts',
				'default' => '4',
				'field'   => 'text',
				'type'    => 'control',
			),
			'related_posts_grid' => array(
				'title'   => esc_html__( 'Layout', 'voelas' ),
				'section' => 'related_posts',
				'default' => '2',
				'field'   => 'select',
				'choices' => array(
					'2'        => esc_html__( '2 columns', 'voelas' ),
					'3'        => esc_html__( '3 columns', 'voelas' ),
					'4'        => esc_html__( '4 columns', 'voelas' ),
				),
				'type' => 'control',
			),
			'related_posts_image' => array(
				'title'   => esc_html__( 'Show post image', 'voelas' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_publish_date' => array(
				'title'   => esc_html__( 'Show post publish date', 'voelas' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_author' => array(
				'title'   => esc_html__( 'Show post author', 'voelas' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_title' => array(
				'title'   => esc_html__( 'Show post title', 'voelas' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_excerpt' => array(
				'title'   => esc_html__( 'Display excerpt', 'voelas' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type' => 'control',
			),
		) ) );
}

/**
 * Return true if value of passed setting is not equal with passed value.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function rvdx_theme_is_not_setting( $control, $setting, $value ) {

	if ( $value !== $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;

}

/**
 * Return true if sticky label type set to text or text with icon.
 *
 * @param  object $control
 * @return bool
 */
function rvdx_theme_is_sticky_text( $control ) {
	return rvdx_theme_is_not_setting( $control, 'blog_sticky_type', 'icon' );
}

/**
 * Return true if sticky label type set to icon or text with icon.
 *
 * @param  object $control
 * @return bool
 */
function rvdx_theme_is_sticky_icon( $control ) {
	return rvdx_theme_is_not_setting( $control, 'blog_sticky_type', 'label' );
}


/**
 * Move native `site_icon` control (based on WordPress core) into custom section.
 *
 * @since 1.0.0
 * @param  object $wp_customize
 * @return void
 */
function rvdx_theme_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'voelas_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'voelas' );
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'rvdx_theme_customizer_change_core_controls', 20 );

/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
function rvdx_theme_get_font_styles() {
	return apply_filters( 'rvdx-theme/font/styles', array(
		'normal'  => esc_html__( 'Normal', 'voelas' ),
		'italic'  => esc_html__( 'Italic', 'voelas' ),
		'oblique' => esc_html__( 'Oblique', 'voelas' ),
		'inherit' => esc_html__( 'Inherit', 'voelas' ),
	) );
}

/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
function rvdx_theme_get_character_sets() {
	return apply_filters( 'rvdx-theme/font/character_sets', array(
		'latin'        => esc_html__( 'Latin', 'voelas' ),
		'greek'        => esc_html__( 'Greek', 'voelas' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'voelas' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'voelas' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'voelas' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'voelas' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'voelas' ),
	) );
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
function rvdx_theme_get_text_aligns() {
	return apply_filters( 'rvdx-theme/font/text-aligns', array(
		'inherit' => esc_html__( 'Inherit', 'voelas' ),
		'center'  => esc_html__( 'Center', 'voelas' ),
		'justify' => esc_html__( 'Justify', 'voelas' ),
		'left'    => esc_html__( 'Left', 'voelas' ),
		'right'   => esc_html__( 'Right', 'voelas' ),
	) );
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
function rvdx_theme_get_font_weight() {
	return apply_filters( 'rvdx-theme/font/weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */

function rvdx_theme_get_dynamic_css_options() {
	$parent_handles = array(
		'css' => 'rx-theme-assistant-fronend',
		'js'  => 'rvdx-theme-js',
	);

	if( ! class_exists( 'Rx_Theme_Assistant' ) ){
		$parent_handles['css'] = 'rvdx-theme-style';
	}

	return apply_filters( 'rvdx-theme/dynamic_css/options', array(
		'prefix'        => 'voelas',
		'type'          => 'theme_mod',
		'parent_handles' => $parent_handles,
		'css_files'      => array(
			get_theme_file_path( 'assets/css/dynamic.css' ),
			get_theme_file_path( 'assets/css/dynamic/preloader.css' ),
			get_theme_file_path( 'assets/css/dynamic/header.css' ),
			get_theme_file_path( 'assets/css/dynamic/menus.css' ),
			get_theme_file_path( 'assets/css/dynamic/social.css' ),
			get_theme_file_path( 'assets/css/dynamic/navigation.css' ),
			get_theme_file_path( 'assets/css/dynamic/buttons.css' ),
			get_theme_file_path( 'assets/css/dynamic/forms.css' ),
			get_theme_file_path( 'assets/css/dynamic/post.css' ),
			get_theme_file_path( 'assets/css/dynamic/page.css' ),
			get_theme_file_path( 'assets/css/dynamic/widgets.css' ),
			get_theme_file_path( 'assets/css/dynamic/plugins.css' ),
		),
		'options_cb'     => 'get_theme_mods',
	) );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function rvdx_theme_get_default_footer_copyright() {
	return sprintf( '%s <a href="http://bit.ly/dan-fisher" target="_blank">%s</a>', esc_html__( 'Copyright &copy; %%year%% by', 'voelas' ), esc_html__( 'Dan Fisher', 'voelas' ) );
}

/**
 * Return true if blog sidebar enabled.
 *
 * @return bool
 */
function rvdx_theme_is_blog_sidebar_enabled() {
	return apply_filters( 'rvdx-theme/customizer/blog-sidebar-enabled', true );
}


/**
 * Return true if option Read More button type is text type. Otherwise - return false.
 *
 * @return bool
 */
function rvdx_theme_is_blog_read_more_btn_text() {
	$btn_type = rvdx_theme()->customizer->get_value( 'blog_read_more_type' );
	return 'text' === $btn_type || 'text_icon' === $btn_type ? true : false;
}
