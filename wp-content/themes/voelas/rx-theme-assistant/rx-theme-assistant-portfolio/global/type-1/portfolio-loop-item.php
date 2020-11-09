<?php
/**
 * Images list item template
 */
$settings = $this->get_settings_for_display();
$perPage = $settings['per_page'];
$is_more_button = $settings['view_more_button'];

$item_instance = 'item-instance-' . $this->item_counter;

$more_item = ( $this->item_counter >= $perPage && filter_var( $is_more_button, FILTER_VALIDATE_BOOLEAN ) ) ? true : false;

$this->add_render_attribute( $item_instance, 'class', array(
	'rx-theme-assistant-portfolio__item',
	! $more_item ? 'visible-status' : 'hidden-status',
) );

if ( 'justify' == $settings['layout_type'] ) {
	$this->add_render_attribute( $item_instance, 'class', $this->get_justify_item_layout() );
}

$this->add_render_attribute( $item_instance, 'data-slug', $this->get_item_slug_list() );

$link_instance = 'link-instance-' . $this->item_counter;

$this->add_render_attribute( $link_instance, 'class', array(
	'rx-theme-assistant-images-layout__link',
	// Ocean Theme lightbox compatibility
	class_exists( 'OCEANWP_Theme_Class' ) ? 'no-lightbox' : '',
) );

$item_image_id = $this->__loop_item( array( 'item_image', 'id' ) );
$full_image_url = wp_get_attachment_image_url( $item_image_id, 'full' );
$thumbnail_image_url = wp_get_attachment_image_url( $item_image_id, 'rvdx-theme-thumb-portfolio' );

$this->add_render_attribute( $link_instance, 'href', $full_image_url );
$this->add_render_attribute( $link_instance, 'data-elementor-open-lightbox', 'yes' );
$this->add_render_attribute( $link_instance, 'data-elementor-lightbox-slideshow', $this->get_id() );
?>
<article <?php printf('%s', $this->get_render_attribute_string( $item_instance )); ?>>
	<div class="rx-theme-assistant-portfolio__inner">
		<a <?php printf('%s', $this->get_render_attribute_string( $link_instance )); ?>>
			<div class="rx-theme-assistant-portfolio__image">
				<img class="rx-theme-assistant-portfolio__image-instance" src="<?php echo esc_attr( $thumbnail_image_url ) ?>" alt="<?php echo esc_html__( 'portfolio image', 'voelas' ) ?>">
				<div class="rx-theme-assistant-portfolio__image-loader"><span></span></div>
			</div>
		</a>
		<div class="rx-theme-assistant-portfolio__content">
			<div class="rx-theme-assistant-portfolio__content-inner"><?php
				$title_tag = $this->__get_html( 'title_html_tag', '%s' );
				printf('%s', $this->__loop_item( array( 'item_title' ), '<' . $title_tag . ' class="rx-theme-assistant-portfolio__title">%s</' . $title_tag . '>' ));
				printf('%s', $this->__loop_item( array( 'item_desc' ), '<p class="rx-theme-assistant-portfolio__desc">%s</p>' ));
				printf('%s', $this->__generate_item_button()); ?></div>
		</div>

	</div>
</article><?php

$this->item_counter++;
?>
