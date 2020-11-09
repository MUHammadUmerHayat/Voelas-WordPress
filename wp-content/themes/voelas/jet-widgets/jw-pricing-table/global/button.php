<?php
/**
 * Pricing table action button
 */

$this->add_render_attribute( 'button', array(
	'class' => array(
		'elementor-button',
		'elementor-size-md',
		'pricing-table-button',
		'button-' . $this->get_settings( 'button_size' ) . '-size',
	),
	'href' => $this->get_settings( 'button_url' ),
) );

?>
<a <?php printf('%s', $this->get_render_attribute_string( 'button' ) ); ?>><?php

	$position = $this->get_settings( 'button_icon_position' );
	$icon     = $this->get_settings( 'add_button_icon' );

	if ( $icon && 'left' === $position ) {
		printf('%s', $this->__html( 'button_icon', '<i class="button-icon %s"></i>' ) );
	}

	printf('%s', $this->__html( 'button_text', '<span>%s</span>' ) );

	if ( $icon && 'right' === $position ) {
		printf('%s', $this->__html( 'button_icon', '<i class="button-icon %s"></i>' ) );
	}

?></a>
