<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-styles', get_theme_file_uri('assets/build/index.css'));
    wp_enqueue_script('theme-scripts', get_theme_file_uri('assets/build/index.js'), array(), false, true);
});
