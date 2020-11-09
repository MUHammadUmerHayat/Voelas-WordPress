<?php
/**
 * Testimonials item template
 */
$settings = $this->get_settings();
$stars = $this->render_stars( $item );

?>
<div class="jw-testimonials__item">
	<div class="jw-testimonials__item-inner">
		<div class="jw-testimonials__content"><?php
			printf('%s', $this->__loop_item( array( 'item_icon' ), '<div class="jw-testimonials__icon"><div class="jw-testimonials__icon-inner"><i class="%s"></i></div></div>' ) );
			printf('%s', $this->__loop_item( array( 'item_title' ), '<h5 class="jw-testimonials__title">%s</h5>' ) );
			printf('%s', $this->__loop_item( array( 'item_comment' ), '<p class="jw-testimonials__comment"><span>%s</span></p>' ) );
			printf('%s', $this->__loop_item( array( 'item_name' ), '<div class="jw-testimonials__name"><span>%s</span></div>' ) );
			printf('%s', $this->__loop_item( array( 'item_position' ), '<div class="jw-testimonials__position"><span>%s</span></div>' ) );
			printf('%s', $this->__loop_item( array( 'item_date' ), '<div class="jw-testimonials__date"><span>%s</span></div>' ) );
			printf('%s', $this->__loop_item( array( 'item_rating' ), '<div class="jw-testimonials__rating">' . $stars . '</div>' ) );
		?></div>
	</div>
</div>

