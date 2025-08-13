<?php
function disabilityservices_enqueue_styles() {
    // Tailwind CDN (for quick setup) — use compiled CSS for production
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

    // Your custom CSS (optional)
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'disabilityservices_enqueue_styles');
function disabilityservices_setup() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'disabilityservices')
    ]);
}
add_action('after_setup_theme', 'disabilityservices_setup');
