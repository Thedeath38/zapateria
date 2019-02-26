<?php
    get_header();
?>

<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->

<!--Header Upper-->


<!--Main Header-->
<?php get_template_part('templates/nav', 'front'); ?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Blog</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo get_page_link(get_page_by_title('Inicio')) ?>">home &nbsp;/</a>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section style-four section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                     <?php
                        if (have_posts() ): while (have_posts()): the_post(); 
                      ?>
                    
                          <h3><?php the_title(); ?></h3>
                        <div >
                          <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        </div>
                        <p class="text-muted"><?php the_excerpt(); ?></p>
                        
                      
                      <?php // El loop finaliza y la query se resetea aquí para que toda la zona dinámica entre en el loop
                        endwhile; endif;
                      ?>
                    
                    </div>
                    
                    
                </div>
                <?php wpex_pagination(); ?>
            </div>
            <?php
                get_sidebar();
            ?>
        </div> 
        
        
<!--// 					the_posts_pagination(array(-->
<!--// 						'mind_size' => 2,-->
<!--// 						'prev_text' => __('Anterior', 'textdomain'),-->
<!--// 						'next_text' => __('Siguiente', 'textdomain'),-->
<!--// 					) ); -->
		
        <!--<div class="styled-pagination">-->
        <!--    <ul>-->
        <!--        <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>-->
        <!--        <li><a href="#" class="active">1</a></li>-->
        <!--        <li><a href="#">2</a></li>-->
        <!--        <li><a href="#">3</a></li>-->
        <!--        <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>-->
        <!--    </ul>-->
        <!--</div>                  -->
    </div>
</section>
<!-- End Contact Section -->
  
  <?php
    get_footer();
?>	
