// Deregister stylesheet Genesis Simple Share
add_action( 'wp_enqueue_scripts', 'wpstudio_deregister_styles' );
function wpstudio_deregister_styles() {
  wp_deregister_style( 'genesis-simple-share-plugin-css' );
}