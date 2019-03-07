<?php
    get_header();
?>

<body>
  <div class="page-wrapper">
   

  

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
                    
                         <div class="content-text">
                             <h1><?php the_title(); ?></h1>
                        </div> 
                        <div class="image-box">
                          <a  href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        </div>
                        <div class="content-text">
                            
                            <?php the_excerpt(); ?>
                        </div>
                        
                        
                      
                      <?php // El loop finaliza 
                        endwhile;
                      ?>
                    
                    </div>
                    
                    
                </div>
                <div class="styled-pagination">
                <?php wpex_pagination(); ?>
                </div>
                
                <?php endif; ?>
                
            </div>
            <?php
                get_sidebar();
            ?>
        </div> 
        
        

    </div>
</section>
<!-- End Contact Section -->
  
  <?php
    get_footer();
?>	
