<?php
function add_files(){
    // reset css
    wp_enqueue_style('reset-style','https://unpkg.com/destyle.css@2.0.2/destyle.css');
//flexslider
    wp_enqueue_style('flexslider',get_theme_file_uri().'/css/flexslider.css');
 //main css
 wp_enqueue_style('main-style',get_stylesheet_uri());

//my is
 wp_enqueue_script(
    'jq-script',
    'https://code.jquery.com/jquery-2.2.4.min.js',
    array(),
    '',
    true
);
//jquery.flexslider-min.js
wp_enqueue_script('sab-flexslider',get_theme_file_uri().'/js/jquery.flexslider-min.js',
array('jq-script'),
'',
true);

 wp_enqueue_script(
    'main-script',
    get_theme_file_uri().'/js/script.js',
    array('jq-script'),
    '',
    true
);
}//add_files
//add_filesの呼び出し
add_action('wp_enqueue_scripts','add_files');

function theme_setup(){
    //title
    add_theme_support('title-tag');
     //eyecatch
     add_theme_support('post-thumbnails');
    //menu
    register_nav_menus(
        array(
            'main-menu'=>'メインメニュー',
        )
    );
}//theme_setup
add_action('after_setup_theme','theme_setup');


