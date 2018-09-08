add_action( 'genesis_entry_content', 'prefix_entry' );

function prefix_entry() {

    if ( ! function_exists( 'genesis_share_icon_output' ) ) {
		return;
	}
	
	if ( ! is_page(array( '3887','3889' ) ) ) {
	    return;
	}
	
	global $Genesis_Simple_Share;
		 
	echo '<div class="share-box"><p class="share-headline">' . __( 'If you liked this article, tell someone about it', 'yourtextdomain' ) . '</p>';
	genesis_share_icon_output( 'after-entry', $Genesis_Simple_Share->icons );
	echo '</div>';
}