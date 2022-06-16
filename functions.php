<?php 

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate


add_action("wp_enqueue_scripts","site_scripts");

function site_scripts(){
  $version = '0.0.0.0';
  wp_deregister_script( 'wp-embed' );
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap',array(),$version);

    wp_enqueue_script('animeJs',"<?php print_r(get_template_directory_uri()); ?>/anime.min.js",array(),$version,true); 
    wp_enqueue_script('mainJs','<?php print_r(get_template_directory_uri()); ?>/script.js',array(),$version,true);

}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields','register_carbon_fields' );

function register_carbon_fields(){
    require_once( 'includes/carbon-fields-options/theme-options.php' );
    require_once( 'includes/carbon-fields-options/post-meta.php' );
}

?>