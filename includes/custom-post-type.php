<?php

function cvd_custom_post(){
    $project_label = array(
        'name'     => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'    => __('Add Project', 'textdomain'),
        'edit_item'   => __('Edit Project', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'all_items'   => __('Projects', 'textdomain'),
    );
    $project = array(
        'labels' => $project_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('projects', $project);

    $service_label = array(
        'name'     => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'    => __('Add Service', 'textdomain'),
        'edit_item'   => __('Edit Service', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'all_items'   => __('Services', 'textdomain'),
    );
    $service = array(
        'labels' => $service_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('services', $service);
    
    $trend_label = array(
        'name'     => __('Trends', 'textdomain'),
        'singular_name' => __('Trend', 'textdomain'),
        'add_new'    => __('Add Trend', 'textdomain'),
        'edit_item'   => __('Edit Trend', 'textdomain'),
        'add_new_item' => __('Add New Trend', 'textdomain'),
        'all_items'   => __('Trends', 'textdomain'),
    );
    $trend = array(
        'labels' => $trend_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt')
    );
    register_post_type('trends', $trend);

    $latest_label = array(
        'name'     => __('Latests', 'textdomain'),
        'singular_name' => __('Latest', 'textdomain'),
        'add_new'    => __('Add Latest', 'textdomain'),
        'edit_item'   => __('Edit Latest', 'textdomain'),
        'add_new_item' => __('Add New Latest', 'textdomain'),
        'all_items'   => __('Latests', 'textdomain'),
    );
    $latest = array(
        'labels' => $latest_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt')
    );
    register_post_type('latests', $latest);
}
add_action('init', 'cvd_custom_post');