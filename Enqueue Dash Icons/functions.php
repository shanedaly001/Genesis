//* Enqueue Dashicons
add_action( 'wp_enqueue_scripts', 'enqueue_dashicons' );
function enqueue_dashicons() {
	wp_enqueue_style( 'dashicons' );
}