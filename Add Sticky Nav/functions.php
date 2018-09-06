//* Do NOT include the opening php tag shown above. Copy the code shown below.

add_action( 'wp_enqueue_scripts', 'riot_enqueue_script' );
function riot_enqueue_script() {
	wp_enqueue_script( 'sticky-nav', get_bloginfo( 'stylesheet_directory' ) . '/js/sticky-nav.js', array( 'jquery' ), '', true );
}