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
                <!--<div class="comments-area">-->
                <!--    <div class="sec-title">-->
                <!--        <h6>Comments (3)</h6>-->
                <!--    </div>-->
                <!--    <div class="comment">-->
                <!--        <div class="image-holder">-->
                <!--            <figure>-->
                <!--                <img src="images/blog/1.png" alt="">-->
                <!--            </figure>-->
                <!--        </div>-->
                <!--        <div class="image-text">-->
                <!--            <h6>Jacky Chan<span>April 06, 2018</span></h6>-->
                <!--            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>-->
                <!--            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sequi praesentium, veritatis nulla quam at exercitationem? Nesciunt molestiae neque modi.</p>-->
                <!--        </div>                                            -->
                <!--    </div>                            -->
                <!--    <div class="comment reply-comment">-->
                <!--        <div class="image-holder">-->
                <!--            <figure>-->
                <!--                <img src="images/blog/2.png" alt="">-->
                <!--            </figure>-->
                <!--        </div>-->
                <!--        <div class="image-text">-->
                <!--            <h6>Robben Oti<span>April 07, 2018</span></h6>-->
                <!--            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>-->
                <!--            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, a! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, obcaecati!</p>-->
                <!--        </div>                                    -->
                <!--    </div>                            -->
                <!--    <div class="comment">-->
                <!--        <div class="image-holder">-->
                <!--            <figure>-->
                <!--                <img src="images/blog/3.png" alt="">-->
                <!--            </figure>-->
                <!--        </div>-->
                <!--        <div class="image-text">-->
                <!--            <h6>Chang Lingma<span>May 12, 2018</span></h6>-->
                <!--            <h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5>-->
                <!--            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae possimus suscipit esse quia sapiente obcaecati consequuntur dolor sequi adipisci unde!</p>-->
                <!--        </div>                                    -->
                <!--    </div>                    -->
                <!--</div>-->
                <!--<div class="form-area">-->
                <!--    <div class="sec-title">-->
                <!--        <h6>Leave A Comment</h6>-->
                <!--    </div>-->
                <!--    <form id="contact_form" name="contact_form" class="default-form">-->
                <!--        <div class="row clearfix">-->
                <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
                <!--                <div class="form-group">-->
                <!--                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Review"></textarea>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-6 col-sm-6 col-xs-12">-->
                <!--                <div class="form-group">-->
                <!--                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required="">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-6 col-sm-6 col-xs-12">-->
                <!--                <div class="form-group">-->
                <!--                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Email" required="">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
                <!--                <div class="form-group form-bottom">-->
                <!--                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">-->
                <!--                    <button class="btn-style-one" type="submit" data-loading-text="Please wait...">Comment</button>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </form>-->
                <!--</div>-->
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