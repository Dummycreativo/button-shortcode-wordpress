<?php

// Shortcode Contact Us Button
function button_contact_us( $atts ) {
    if ($g_saved_city){
        echo '
        <div class="center-btn">
        <a class="request-button" href="'.get_home_url().'/'.$g_saved_city.'/#form">Contact Us</a>
        </div>
        ';
    } else {
        echo '
        <div class="center-btn">
        <a class="request-button" href="'.get_home_url().'/about">Contact Us</a>
        </div>';
    }
}
add_shortcode( 'button-contact-us', 'button_contact_us');

?>