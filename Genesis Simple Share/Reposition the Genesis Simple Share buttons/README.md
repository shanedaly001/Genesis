# Reposition the Genesis Simple Share buttons

Add code to functions.php
Change Genesis hook and priorty according to required needs

Ex
add_action( 'genesis_entry_content', 'bg_reposition_simple_share', 11 );
...

or
add_action( 'genesis_entry_header', 'wpb_reposition_simple_share', 5 );
...


The first argument passed into genesis_share_icon_output is what will be used for the CSS class name and is prepended to share
In this instance the class name will be share-box
