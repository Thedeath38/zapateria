<?php
    get_header();
?>

<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <img src="images/logo.png" alt="" width="130">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>info@medic.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="#" class="btn-style-one">Appoinment</a>
                  </div>
            </div>
      </div>
</section>
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
                    <a href="index.html">home &nbsp;/</a>
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
                        if (have_posts() ): while (have_posts()): the_post(); //Devuelve true si hay post, aquí podemos acceder a sus propiedades
                      ?>
                    
                          <h3><?php the_title(); ?></h3>
                        <div >
                          <?php the_post_thumbnail();?>
                        </div>
                        <p class="text-muted"><?php the_excerpt(); ?></p>
                        
                      
                      <?php // El loop finaliza y la query se resetea aquí para que toda la zona dinámica entre en el loop
                        endwhile; endif;
                      ?>
                    
                    </div>
                    
                    <!--<div class="item-holder">-->
                    <!--    <div class="image-box">-->
                    <!--        <figure>-->
                    <!--            <a href="single-blog.html"><img src="images/blog/5.jpg" alt=""></a>-->
                    <!--        </figure>-->
                    <!--    </div>-->
                    <!--    <div class="content-text">-->
                    <!--        <a href="single-blog.html"><h6>A LESSON IN SURGERY PREPAREDNESS - FROM HURRICANE SEASON</h6></a>-->
                    <!--        <span>By Donult Trum / 02 January 2018</span>-->
                    <!--        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam-->
                    <!--        id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>-->
                    <!--        <div class="link-btn">-->
                    <!--            <a href="single-blog.html" class="btn-style-one">read more</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="item-holder">-->
                    <!--    <div class="image-box">-->
                    <!--        <figure>-->
                    <!--            <a href="single-blog.html"><img src="images/blog/6.jpg" alt=""></a>-->
                    <!--        </figure>-->
                    <!--    </div>-->
                    <!--    <div class="content-text">-->
                    <!--        <a href="single-blog.html"><h6>PATIENT ENGAGEMENT AND THE IMPROVEMENT OF CARE AND RECOVERY</h6></a>-->
                    <!--        <span>By James Anderson / 08 January 2018</span>-->
                    <!--        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan-->
                    <!--        tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>-->
                    <!--        <div class="link-btn">-->
                    <!--            <a href="single-blog.html" class="btn-style-one">read more</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="item-holder">-->
                    <!--    <div class="image-box">-->
                    <!--        <figure>-->
                    <!--            <a href="single-blog.html"><img src="images/blog/7.jpg" alt=""></a>-->
                    <!--        </figure>-->
                    <!--    </div>-->
                    <!--    <div class="content-text">-->
                    <!--        <a href="single-blog.html"><h6>HOW TO MAKE YOUR MEDICAL TRAINING EVENT OVER THE TOP</h6></a>-->
                    <!--        <span>By Garry Moe / 12 January 2018</span>-->
                    <!--        <p>Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium-->
                    <!--        ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>-->
                    <!--        <div class="link-btn">-->
                    <!--            <a href="single-blog.html" class="btn-style-one">read more</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="item-holder">-->
                    <!--    <div class="image-box">-->
                    <!--        <figure>-->
                    <!--            <a href="single-blog.html"><img src="images/blog/8.jpg" alt=""></a>-->
                    <!--        </figure>-->
                    <!--    </div>-->
                    <!--    <div class="content-text">-->
                    <!--        <a href="single-blog.html"><h6>WHAT DOES THE FLEXDEX BRING TO LAPAROSCOPY?</h6></a>-->
                    <!--        <span>By Luis Morris / 25 January 2018</span>-->
                    <!--        <p>Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis-->
                    <!--        a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.</p>-->
                    <!--        <div class="link-btn">-->
                    <!--            <a href="single-blog.html" class="btn-style-one">read more</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <?php
                get_sidebar();
            ?>
        </div>                
        <div class="styled-pagination">
            <ul>
                <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
            </ul>
        </div>                  
    </div>
</section>
<!-- End Contact Section -->
  
  <?php
    get_footer();
?>	
