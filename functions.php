<?php

// adding the CSS and JS files

function ep_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap');
    wp_enqueue_style('fontawesome',  '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'ep_setup');



// Adding Theme Support

function ep_init() {
   add_theme_support('post-thumbnails');
   add_theme_support('title-tag');
   add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')    
    );
}

add_action('after_setup_theme', 'ep_init');

// Activities Post Type

function ep_custom_post_type() {
   register_post_type('activity',
        array(
            'rewrite' => array('slug' => 'activities'),
            'labels' => array(
                'name' => 'Activities',
                'singular_name' => 'Activity',
                'add_new_item' => 'Add New Activity',
                'edit_item' => 'Edit Activity'
            ),
            'menu_icon' => 'dashicons-games',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    ); 
}

add_action('init', 'ep_custom_post_type');

// Sidebar

function ep_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
    }

add_action('widgets_init', 'ep_widgets');

//search filter
/*
function search_filter($query) {
    if($query->is_search()) {
        $query->set('post_type', array('post', 'activity'));
    }
}

add_filter('pre_get_posts', 'search_filter')

*/