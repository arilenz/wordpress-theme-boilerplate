<?php

require_once "includes/assets.php";

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('gutenberg', ['wide-images' => true]);
});
