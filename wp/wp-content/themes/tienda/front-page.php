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

<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider/sliderTacones.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">Nueva temporada</h2>
                        <p class="tag-text mb-5">No te pierdas nuestras últimas novedades</p>
                        <a href="#" class="btn btn-main btn-white">shop-now</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider/sliderZapas.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right">
                        <h2 class="text-white">La comodidad <br>es importante</h2>
                        <p class="tag-text">Disponemos de calzado para cualquier ocasión.</p>
                        <a href="<?php echo get_page_link(get_page_by_title('About')) ?>" class="btn btn-main btn-white">about</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider/sliderNike.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2">El mejor servicio</h2>
                        <p class="tag-text mb-5">Accede a nuestra tienda para ver nuestro catálogo</p>
                        <a href="#" class="btn btn-main btn-white">Tienda</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa fa-phone"></i>
                        <h2>Atención al cliente</h2>
                        <a href="#">958827381</a>
                        <p>Contacte con nosotros para cualquier incidencia</p>
                    </div>
                    
                    <div class="working-time item">
                        <i class="fa fa-hourglass-o"></i>
                        <h2>Horario de apertura</h2>
                        <ul class="w-hours">
                            <li>Lun - Vi  - <span>8:00 - 17:00</span></li>
                            <li>Sab - Dom  - <span>8:00 - 17:00</span></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->

<!--End about us area-->

<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Nuestras
                <span>Marcas</span>
            </h3>
            <p>Trabajamos unicamente con marcas de confianza que ofrezcan a nuestros clientes la máxima calidad</p>
        </div>
        <div class="row items-container clearfix">
            <!--empieza el loop-->
            <div class="item">
                <div class="inner-box">
                    
                    
                    <div class="image-content text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/gallery/Nike.jpg" alt="images" class="img-responsive">
                        <span>               </span>
                        <a href="service.html">
                            <h6>Nike</h6>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <!--fin loop-->
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/gallery/nikekids.jpg" alt="images" class="img-responsive">
                        <span>                </span>
                        <a href="service.html">
                            <h6>Nike Kids</h6>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/gallery/ugg.jpg" alt="images" class="img-responsive">
                        <span></span>
                        <a href="service.html">
                            <h6>UGG</h6>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/gallery/Clarks.jpg" alt="images" class="img-responsive">
                        <span></span>
                        <a href="service.html">
                            <h6>Clarks</h6>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/gallery/nb.jpg" alt="images" class="img-responsive">
                        <span></span>
                        <a href="service.html">
                            <h6>New Balance</h6>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/gallery/brooks.jpg" alt="images" class="img-responsive">
                        <span></span>
                        <a href="service.html">
                            <h6>Brooks</h6>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section-->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Visita nuestro blog
            </h3>
            
        </div>
        <div class="row">
            <?php 
            $args = array('posts_per_page' => 3); 
            $custom_query = new WP_Query($args);
            if ( $custom_query->have_posts() ): while ($custom_query->have_posts()): $custom_query->the_post(); 
            ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <div class="contents text-center">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo excerpt('26'); ?></p>
                        <a href="<?php the_permalink();?>" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <?php // El loop finaliza
                endwhile; endif;
                wp_reset_query();
            ?>
            
        </div>
    </div>
</section>
<!--End team section-->

<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>¿Qué piensan
                <span>nuestros clientes?</span>
            </h3>
        </div>
        <div class="testimonial-carousel">
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/2.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Sansa Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/3.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/5.jpg" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/4.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/5.jpg" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/images/testimonials/4.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
        </div>
    </div>
</section>


 
  
<?php
    get_footer();
?>	

 