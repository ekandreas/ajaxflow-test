<?php

// include_once WP_PLUGIN_DIR . '/ajaxflow/ajaxflow.php';

add_action( 'ajaxflow_fast', 'php_says_hello' );
add_action( 'ajaxflow_standard', 'php_says_hello' );
add_action( 'wp_ajax_traditional', 'php_says_hello' );

add_action( 'ajaxflow_nopriv_fast', 'php_says_hello' );
add_action( 'ajaxflow_nopriv_standard', 'php_says_hello' );
add_action( 'wp_ajax_nopriv_traditional', 'php_says_hello' );

function php_says_hello(){
	?>
	<div class="alert alert-info alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		You have called for action with message '<?php echo $_REQUEST[ 'message' ]; ?>'.<br/>
		PHP time is <?php echo date( 'Y-m-d H:i:s' ); ?>
	</div>
	<?php
	exit;
}