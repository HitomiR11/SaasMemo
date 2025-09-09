<?php 

function scripts()
{
    // css file from dist folder
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all'); // []<- agguement, 1<- version, all<- media type
    wp_enqueue_style('style');

    // jquery automarically added by wordpress
    wp_enqueue_script('jquery');

    // js file from dist folder
    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true); // []<- agguement, 1<- version, true<- in footer
    wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts', 'scripts');

?>