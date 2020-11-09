<?php
/**
 * Testimonials item template
 */
?>
<?php
	printf('%s', $this->__loop_item( array( 'item_image', 'url' ), '<figure class="jw-testimonials__figure"><img class="jw-testimonials__tag-img" src="%s" alt=" '.esc_html__( 'testimonial image', 'voelas' ).' "></figure>' ) );
?>
