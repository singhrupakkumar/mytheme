<?php /* Template Name: Contact1 Template */ 
get_header();
?>

<section id="contact-page">
<div class="container">
<h1 style="text-align:center; color: black; margin-bottom: 40px; margin-top: 180px;">Contact Us</h1>
<div class="row contact-wrap">
<div class="status alert alert-success" style="display: none"></div>
<div class="col-sm-12">
<div id="main-contact-form" class="contact-form">
<?php echo do_shortcode( '[contact-form-7 id="236" title="form"]' ); ?>
<!--/div-->
</div> 
</div> 
</div>
</div> 
</section> 

<section class="ques">
<p>GOT A QUESTION? TALK WITH US DIRECT.</p>
<h1>Call. <?php echo get_option('nt_phone');?></h1>
</section>

<div class="container">
<section class="address">
<div class="row">
<div class="col-sm-6">


<?php echo get_field('google');?>
</div>

<div class="col-sm-6 map-content">
<ul class="row">
<li class="col-sm-12">
<address>
<h5>Head Office</h5>

<p>Phone:<?php echo get_option('nt_phone');?> <br>
Email Address:<?php echo get_option('nt_email');?></p>
</address>
<address>

<div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
</address>
</li>

</ul>
</div>
</div>
</section>
</div>
<?php get_footer();	?>