<?php
/*
Template Name: Contacto
*/
?>
<!DOCTYPE html>
<html>

<?php
    get_header();
?>


<body>


  


<?php get_template_part('templates/nav', 'front'); ?>
<!--Main Header-->




<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="section-title">
        <h3>Nuestra sede<br><br>
        </h3>
    </div>
             <section class="map">
                  
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d794.7680830330814!2d-3.6017380708251587!3d37.174751967329506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fcbe23fc3b21%3A0x55eef4bb2a1a87c4!2sCalle+Alh%C3%B3ndiga%2C+20%2C+18001+Granada!5e0!3m2!1ses!2ses!4v1551919066131" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </section>
                
                

            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
    <div class="section-title">
        <h3>Contacta
            <span>con nosotros</span>
        </h3>
    </div>
    <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
               
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">submit now</button>
                </div>
            </div>
        </div>
    </form>
</div>                        
            </div>
        </div>                    
    </div>
</section>

<?php
    get_footer();
?>
