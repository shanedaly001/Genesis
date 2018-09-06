//* Reposition the Genesis Simple Share buttons
add_action( 'genesis_entry_content', 'bg_reposition_simple_share', 11 );
function bg_reposition_simple_share() {
	if( 'post' === get_post_type() ) {
		genesis_share_icon_output( 'before_entry_header', array(  'twitter', 'facebook', 'googlePlus', 'linkedin', 'pinterest' ) );
	}
}