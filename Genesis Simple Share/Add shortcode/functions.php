// Adds a [social-icons] shortcode to output Genesis Simple Share icons in posts

add_shortcode( 'social-icons', 'gss_shortcode' );

function gss_shortcode() {
	global $Genesis_Simple_Share;

	$icons = '';
	
	if ( function_exists( 'genesis_share_get_icon_output' ) ) {
		$icons = genesis_share_get_icon_output( 'gss-shortcode', $Genesis_Simple_Share->icons );
	}
	
	return $icons;
}