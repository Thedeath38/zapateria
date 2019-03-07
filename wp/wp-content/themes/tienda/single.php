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
<?php
    get_template_part('templates/nav','front');
  ?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Blog Details</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo get_page_link(get_page_by_title('Inicio')) ?>">home &nbsp;/</a>
                </li>
                <li>Post</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-four style-five">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                        <!--<div class="image-box">-->
                        <!--    <figure>-->
                        <!--        <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>-->
                        <!--    </figure>-->
                        <!--</div>-->
                        <div class="content-text">
                            <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
                            <span>El <?php the_author();?><?php the_time('d/m/Y');?> a las: <?php the_time('g:i a');?></span>
                            <div>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                                <?php endwhile; endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
               
                    <?php
    					comments_template();
    				?>
    				</div>
            </div>
            <?php 
                 get_sidebar();
            ?>
        </div>                
    </div>
</section>
<!-- End Contact Section -->

<!--footer-main-->
<?php
get_footer();
?>