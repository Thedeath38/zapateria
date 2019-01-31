<?php





function my_theme_script() {
    
    
    wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery.js', null, null, false);
    wp_enqueue_script('jquery');
    
    wp_register_script('modernizr', get_template_directory_uri() . '/plugins/bootstrap.min.js', array('jquery'), null, false);
    wp_enqueue_script('modernizr');
    
    wp_register_script('respond', get_template_directory_uri() . '/plugins/bootstrap-select.min.js', array('jquery'), null, false);
    wp_enqueue_script('respond');
    
    
    
    wp_register_script('easing', get_template_directory_uri() . '/plugins/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing');
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap');
   
   wp_register_script('waypoints', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw', array('jquery'), null, true);
    wp_enqueue_script('waypoints');
    
    wp_register_script('stellar', get_template_directory_uri() . '/plugins/google-map/gmap.js', array('jquery'), null, true);
    wp_enqueue_script('stellar');
    
    wp_register_script('YTPlayer', get_template_directory_uri() . '/plugins/validate.js', array('jquery'), null, true);
    wp_enqueue_script('YTPlayer');
    
    wp_register_script('carousel', get_template_directory_uri() . '/plugins/wow.js', array('jquery'), null, true);
    wp_enqueue_script('carousel');
    
    wp_register_script('magnific', get_template_directory_uri() . '/plugins/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('magnific');
    
    wp_register_script('popup', get_template_directory_uri() . '/plugins/timePicker.js', array('jquery'), null, true);
    wp_enqueue_script('popup');
    
    wp_register_script('main', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('main');
   
  
}

add_action('wp_enqueue_scripts', 'my_theme_script');


?>