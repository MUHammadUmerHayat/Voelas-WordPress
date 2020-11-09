<?php
/**
 * Login messages
 */

$message = wp_cache_get( 'rx-login-messages' );

if ( ! $message ) {
	return;
}

?>
<div class="rx-login-message"><?php
	printf('%s', $message );
?></div>