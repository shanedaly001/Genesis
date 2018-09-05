add_action( 'wp_enqueue_scripts', 'add_font_awesome_icons' );
function add_font_awesome_icons() {
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}