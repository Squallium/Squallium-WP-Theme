<?php

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// No utilizo get_template_directory_uri() porque tengo un theme child, tengo que usar get_stylesheet_directory_uri()
// http://codex.wordpress.org/Function_Reference/get_template_directory_uri
function add_my_script() {
wp_enqueue_script(
    'squallium', // name your script so that you can attach other scripts and de-register, etc.
    get_stylesheet_directory_uri() . '/js/squallium.js', // this is the location of your script file
    array('jquery') // this array lists the scripts upon which your script depends
);
}

add_action( 'wp_head', 'add_my_script' );

?>
