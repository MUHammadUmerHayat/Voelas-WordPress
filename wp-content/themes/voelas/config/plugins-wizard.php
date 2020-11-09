<?php
/**
 * Jet Plugins Wizard configuration.
 *
 * @package Storycle
 */
$license = array(
	'enabled' => false,
);

/**
 * Plugins configuration
 *
 * @var array
 */
$plugins = array(
	'jet-data-importer' => array(
		'name'    => esc_html__( 'Jet Data Importer', 'voelas' ),
		'source'  => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'    => 'https://danfisher-bucket-2.s3.eu-west-3.amazonaws.com/voelas/plugins/pHxcN34R/jet-data-importer.zip',
		'access'  => 'base',
		'version' => '1.2.0'
	),

	'elementor' => array(
		'name'   => esc_html__( 'Elementor Page Builder', 'voelas' ),
		'access' => 'base',
	),

	'header-footer-elementor' => array(
		'name'   => esc_html__( 'Header Footer Elementor', 'voelas' ),
		'access' => 'base',
	),

	'jetwidgets-for-elementor' => array(
		'name'   => esc_html__( 'JetWidgets For Elementor', 'voelas' ),
		'access' => 'base',
	),

	'rx-theme-assistant' => array(
		'name'    => esc_html__( 'Rx Theme Assistant', 'voelas' ),
		'source'  => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'    => 'https://danfisher-bucket-2.s3.eu-west-3.amazonaws.com/voelas/plugins/pHxcN34R/rx-theme-assistant.zip',
		'access'  => 'base',
		'version' => '1.6.0'
	),

	'cherry-ld-mods-switcher' => array(
		'name'   => esc_html__( 'Сherry ld mods', 'voelas' ),
		'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'   => 'https://danfisher-bucket-2.s3.eu-west-3.amazonaws.com/voelas/plugins/pHxcN34R/cherry-ld-mods-switcher.zip',
		'access' => 'base',
		'version' => '1.0'
	),

	'essential-addons-for-elementor-lite' => array(
		'name'   => esc_html__( 'Essential Addons for Elementor', 'voelas' ),
		'access' => 'base',
	),

	'revslider' => array(
		'name'    => esc_html__( 'Slider Revolution', 'voelas' ),
		'source'  => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'    => 'https://danfisher-bucket-2.s3.eu-west-3.amazonaws.com/voelas/plugins/pHxcN34R/revslider.zip',
		'access'  => 'base',
		'version' => '6.2.23'
	),

	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'voelas' ),
		'access' => 'base',
	),

	'custom-post-type-ui' => array(
		'name'   => esc_html__( 'Custom Post Type UI', 'voelas' ),
		'access' => 'base',
	),

	'advanced-custom-fields' => array(
		'name'   => esc_html__( 'Advanced Custom Fields', 'voelas' ),
		'access' => 'base',
	),

	'acf-repeater' => array(
		'name'    => esc_html__( 'Advanced Custom Fields: Repeater Field', 'voelas' ),
		'source'  => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'    => 'https://danfisher-bucket-2.s3.eu-west-3.amazonaws.com/voelas/plugins/pHxcN34R/acf-repeater.zip',
		'access'  => 'base',
		'version' => '2.1.0'
	),

	'megamenu' => array(
		'name'   => esc_html__( 'Max Mega Menu', 'voelas' ),
		'access' => 'base',
	),

	'wp-gdpr-compliance' => array(
		'name'   => esc_html__( 'WP GDPR Compliance', 'voelas' ),
		'access' => 'skins',
	),

	'wordpress-seo' => array(
		'name'   => esc_html__( 'Yoast SEO', 'voelas' ),
		'access' => 'skins',
	),

	'phastpress' => array(
		'name'   => esc_html__( 'Phast Press - plugin for optimizing asset loading (css, js and others)', 'voelas' ),
		'access' => 'skins',
	),

	'rocket-lazy-load' => array(
		'name'   => esc_html__( 'Lazy Load - plugin for optimal image loading', 'voelas' ),
		'access' => 'skins',
	),
);

/**
 * Skins configuration
 *
 * @var array
 */
$theme = wp_get_theme();
$theme_slag = get_template();
$skins = array(
	'base' => array(
		'jet-data-importer',
		'elementor',
		'jetwidgets-for-elementor',
		'revslider',
		'advanced-custom-fields',
		'custom-post-type-ui',
		'essential-addons-for-elementor-lite',
		'rx-theme-assistant',
		'contact-form-7',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'cherry-ld-mods-switcher',
				'wp-gdpr-compliance',
				'gutenberg',
				'block-builder',
			),
			'lite'            => false,
			'demo'            => 'http://voelas-wp.dan-fisher.com/',
			'thumb'           => get_theme_file_uri( 'screenshot.png' ),
			'name'            => $theme->get( 'Name' ),
			'additional_info' => array(
				'title'       => sprintf( '%1$s %2$s %3$s', $theme->get( 'Name' ), esc_html__( 'Theme', 'voelas' ), $theme->get( 'Version' ) ),
				'description' => $theme->get( 'Description' ),
				'social_links' => array(
					'facebook' => array(
						'icon' => '#',
						'link' => '#',
					)
				),
				'info_blocks' => array(
					'documentation' => array(
						'thumb'       => 'https://plugins.rovadex.com/rx-theme-wizard/documentation-thumb.png',
						'title'       => esc_html__( 'Documentation', 'voelas' ),
						'description' => esc_html__( 'Detailed documentation which explains in easy way how to setup and customize our theme. Your site customisations will be easy and fast!', 'voelas' ),
						'link_text'   => esc_html__( 'Read', 'voelas' ),
						'link'        => 'http://docs.dan-fisher.com/docs/voelas-wp/',
					),
					'support' => array(
						'thumb'       => 'https://plugins.rovadex.com/rx-theme-wizard/support-thumb.png',
						'title'       => esc_html__( 'Support', 'voelas' ),
						'description' => esc_html__( 'We always care about our customers, our loyal support team are always ready to help', 'voelas' ),
						'link_text'   => esc_html__( 'Submit Ticket', 'voelas' ),
						'link'        => 'https://danfisher.ticksy.com/',
					),
					'author' => array(
						'thumb'       => get_theme_file_uri( 'assets/img/author-logo.png' ),
						'title'       => esc_html__( 'Dan Fisher', 'voelas' ),
						'description' => esc_html__( 'Hello! I’m Dan Fisher, passioned web designer and web developer. I create clean and unique templates and I hope you like them. I’m open for new projects, so don’t hesitate and shoot me a message.', 'voelas' ),
						'link_text'   => esc_html__( 'Author Site', 'voelas' ),
						'link'        => 'http://dan-fisher.com/',
					),
				),
			)
		),
	),
);

$texts = array(
	'theme-name' => $theme->get( 'Name' ),
);

$config = array(
	'license' => $license,
	'plugins' => $plugins,
	'skins'   => $skins,
	'texts'   => $texts,
);
