<?php
function littlemiami_enqueue_assets() {
    wp_enqueue_style('tailwind', 'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'littlemiami_enqueue_assets');
?>
