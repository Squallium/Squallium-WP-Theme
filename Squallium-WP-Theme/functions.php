<?php

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

?>
