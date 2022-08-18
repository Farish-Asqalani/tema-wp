<?php
// function - function untuk menjalankan beberapa fungsi untuk development,
// seperti halnya mengconneksikan css dan javascript

// load script
// yang berguna untuk mengkoneksikan file .css atau .js
// function loadFile(){
//     wp_enqueue_style('style', get_stylesheet_uri());
// }

// add_action('wp_enqueue_scripts','loadFile' );
// function EnqueueMyStyles() {
//     wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/css/my-custom-style.css', false, '20150320');

//     wp_enqueue_style('my-google-fonts', '//fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic', false, '20150320');

//     wp_enqueue_style('my-main-style', get_stylesheet_uri(), false, '20150320');
//     }

// add_action('wp_enqueue_scripts', 'EnqueueMyStyles');

// register_nav_menu( array(
//     'main_menu' => 'Menu Utama'
// ))

// if (function_exists('register_nav_menu')) {
//         register_nav_menu('main-menu', 'Menu Utama');
// }

// if (function_exists('register_nav_menu'))
// {
//     register_nav_menu('main_menu', 'Menu Utama');
// }

// menambahkan menu ke navbar dan footer
register_nav_menus( array(
    'main-menu' => 'Menu Utama',
    'footer-menu' => 'Menu Footer'
));


// mengambil panjang angka dan kata
function get_length(){
    return 40;
}

// menukar bacaannya
function return_text(){
    return"...";
}

add_filter('excerpt_more', 'return_text');
add_filter('excerpt_length', 'get_length');

function widget_setup(){
    register_sidebar(array(
        'name' => 'sidebar1',
    ));
}

add_action('widgets_init', 'widget_setup');


?>