<?php
function cvd_assets(){
    wp_enqueue_style('cvd-style', get_template_directory_uri() . "./css/style.css", microtime());
    wp_enqueue_style('cvd-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
    wp_enqueue_script('barba-script', "https://unpkg.com/@barba/core", "1.0", [], true );
    wp_enqueue_script('gsap-script', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js", "1.0", [], true );
    wp_enqueue_script('cvd-script', get_template_directory_uri() . "./script/script.js", microtime(), [], true );
}
add_action('wp_enqueue_scripts', 'cvd_assets');