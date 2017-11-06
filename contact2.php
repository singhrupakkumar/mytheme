<?php /* Template Name: Contact2 Template */ get_header(); ?>

<style type="text/css">
	div#main-contact-form {
  padding-bottom: 80px;
  padding-top: 80px;
  width: 70%;
  margin: -172px auto;
}
.collapse.navbar-collapse.navbar-right.active1 {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
}
#contact-page{
    width:100%;
    float:left;
}
</style>


<section id="contact-page">
<div class="map">
<h1 style="text-align:center; color: black; margin-top: 40px;">Contact Us</h1>
<?php echo get_field('google');?>
</div>



<div class="col-sm-4">
<div class="sidebar">
<i class="fa fa-envelope-o fa-2x text-center" aria-hidden="true" style="float: left; text-align: center; width: 100%; color: white;"></i>
<span style="color: #ffffff; width:100%; text-align: center; float: left; font-size: 18px; padding-top: 7px;">EMAIL</span>
<p style="text-align: center; color: white;">info@gmail.com</p><br><br>

<i class="fa fa-phone fa-2x text-center" aria-hidden="true" style="float: left; text-align: center; width: 100%; color: white;"></i>
<span style="color: #ffffff; width:100%; text-align: center; float: left; font-size: 18px; padding-top: 7px;">Phone</span>
<p style="text-align: center; color: white;">+0123 456 70 90</p><br><br>

<i class="fa fa-map-marker fa-2x text-center" aria-hidden="true" style="float: left; text-align: center; width: 100%; color: white;"></i>
<span style="color: #ffffff; width:100%; text-align: center; float: left; font-size: 18px; padding-top: 7px;">Address</span>
<p style="text-align: center; color: white;">123 Street</p>
</div>
</div>

<div class="col-sm-8">
<div class="contact-wrap">
<div class="status alert alert-success" style="display: none"></div>

<div id="main-contact-form" class="contact-form">
<div class="row">
<?php echo do_shortcode( '[contact-form-7 id="284" title="Contact Form 2"]' ); ?>
</div>
</div>
<!--form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
<?php  // echo do_shortcode( '[contact-form-7 id="284" title="Contact Form 2"]' ); ?>
</form-->
</div> 
</div> 
</div>

</section> 

<?php get_footer();	?>