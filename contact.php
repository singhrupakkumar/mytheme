<?php /* Template Name: Contact Template */ 
get_header();
?>

<style type="text/css">
div#main-contact-form {
  margin: 0 auto;
  width: 70%;
}
.collapse.navbar-collapse.navbar-right.active1 {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
}	
div#main-contact-form .form-group.text-center{
	width:100%;
	display:table;
}
#contact-info{
    margin-top:-33px;
    padding:70px 0px;
}
</style>

<main role="main">
<section id="contact-info">
<div class="center">
<h2>How to Reach Us?</h2>
<div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
</div>
<div class="gmap-area">
<div class="container">
<div class="row">
<div class="col-sm-5 text-center">
<div class="gmap">

<?php echo get_field('google');?>



</div>
</div>

<div class="col-sm-7 map-content">
<ul class="row">
<li class="col-sm-12">
<address>
<h5>Head Office</h5>

<p>Phone:<?php echo get_option('nt_phone');?> <br/>
Email Address: <?php echo get_option('nt_email');?> <br/>
Address: <?php echo get_option('nt_address');?>
</p>
</address>
<address>

<div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
</address>
</li>

</ul>
</div>
</div>
</div>
</div>
</section>  
<section id="contact-page">
<div class="container">
<div class="center contact-main">
<h2>Drop Your Message</h2>
<div class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
</div>
<div class="row contact-wrap">
<div class="status alert alert-success" style="display: none"></div>
<div id="main-contact-form" class="contact-form">
<?php echo do_shortcode( '[contact-form-7 id="285" title="Contact Page"]' ); ?>
</div>

</div> 
</div> 
</section> 

</main>

<?php get_footer();	?>