<?php


add_theme_support('post-thumbnails');


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
   
   wp_register_script('waypoints', get_template_directory_uri() . '/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw', array('jquery'), null, true);
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
    
    wp_register_script('bootstrap1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap1');
    
     wp_register_script('bootstrap2', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap2');
    
     wp_register_script('bootstrap3', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap3');
   


}

add_action('wp_enqueue_scripts', 'my_theme_script');



function custom_comments($comment, $args, $depth){
    if ($depth > 1) {
        echo '<div class="space-40"></div>';
    }
    ?>
    <div class="media">
        <div class="media-left">
            <a >
                <?= get_avatar($comment, 70, '', 'Commenter avatar', array('class' => ' rounded-circle')); ?>
            </a>
        </div>
        <div class="media-body">
            <h3 class="media-heading"><?php comment_author(); ?>
           
            <?php
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below'=>$add_below,
                            'depth'=>$depth,
                            'max_depth'=>$args['max_depth'],
                        )
                    )
                );
            ?>
        
            </h3>
            <p class="comment-date">
                Posted on <?php comment_date(); ?> at <?php comment_time(); ?>
            </p>
            <div class="comment-p">
                <?php comment_text(); ?>
            </div>
        </div>
    </div>
    <?php
}


function custom_comments_fields($fields) {
    unset($fields['url']);
    $commenter = wp_get_current_commenter();
    $fields['author'] = '<div class="form-group">
                            <input name="author" type="text" placeholder="Name" class="form-control" value="' . esc_attr($commenter['comment_author']) . '" required>
                        </div> ';
    $fields['email'] = '<div class="form-group">
                            <input name="email" type="text" placeholder="Email" class="form-control" value="' . esc_attr($commenter['comment_author_email']) . '" required>
                        </div> ';
    return $fields;
}
add_filter('comment_form_default_fields', 'custom_comments_fields');

function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
	function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
      } else {
      $excerpt = implode(" ",$excerpt);
      }
      $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
      return $excerpt;
    }
	
	


?>