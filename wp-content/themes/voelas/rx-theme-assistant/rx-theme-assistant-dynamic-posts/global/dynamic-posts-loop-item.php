<?php
/**
 * Images list item template
 */
?>
<?php
	$event_class = '';

	if ( class_exists( 'ACF' ) ) {
		$event_type = get_field( 'event_type', false );
		$event_class = $event_type ? 'rxta-event-type__' . strtolower( $event_type ) : '' ;
	}
?>
<article class="rxta-dynamic-posts__item <?php echo esc_attr( $item_class ); echo esc_attr( $event_class ); ?>">
	<div class="rxta-dynamic-posts__inner">
		<?php
			$template_content = rx_theme_assistant_tools()->elementor()->frontend->get_builder_content_for_display( $items_template );

			if ( ! empty( $template_content ) ) {
				printf( '%s', $template_content );
			}else {
				esc_html_e( 'Elementor template not found!', 'voelas');
			}
		?>
	</div>
</article>
