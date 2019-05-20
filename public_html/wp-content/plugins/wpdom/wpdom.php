<?php
/*
Plugin Name: WPDOM
Plugin URI: http://www.toscani.nl
Description: Allows you to manipulate the DOM. Use this as a last resort, when there is no better alternative.
Author: Patrick vd Pols
Version: 1
Author URI: http://www.toscani.nl
*/

#start the output buffer
ob_start();
add_action('shutdown', function(){
    $output = '';
    for ($i = 0; $i < ob_get_level(); $i++) {
        $output .= ob_get_clean();
    }

    echo apply_filters('wpdom_output', $output);
},0);
#apply filters in output
add_filter('wpdom_output', function($output){
    global $post;
    if(!is_admin() && $post){
        $output = apply_filters('wpdom_output_'.$post->ID, $output); // fire post specific hook.
    }
    return $output;
},0);
