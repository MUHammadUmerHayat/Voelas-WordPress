<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rvdx Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'rvdx-theme/site/page-start' ); ?>
<?php rvdx_theme_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'voelas' ); ?></a>
	<header id="masthead" <?php echo rvdx_theme_get_container_classes( 'site-header' ); ?>>
		<?php rvdx_theme()->do_location( 'header', 'template-parts/header' ); ?>
	</header><!-- #masthead -->
	<?php if( rvdx_theme()->customizer->get_value( 'breadcrumbs_visibillity' ) || rvdx_theme()->customizer->get_value( 'page_title_visibility' ) ){ ?>
		<div class="page-header">
			<div class="container">
				<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
				<?php rvdx_theme_the_title(); ?>
			</div>
		</div><!-- .page-header -->
	<?php } ?>
	<div id="content" <?php echo rvdx_theme_get_container_classes( 'site-content' ); ?>>
