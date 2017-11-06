<?php /* Template Name: Home1 Template */ get_header(); ?>
<style>
p.cta-sub-title {
  font-size: 18px;
}
h1{
    font-weight:600;
}
h1, h2, h3, h4, h5, h6{
    font-family: 'Open Sans',sans-serif;
}
.navbar-inverse .navbar-brand{font-size:36px; margin-top:6px;line-height:43px;color:#fff;}
</style>

	<!--BANNER START-->
	<div id="banner" class="section-padding" style="background: rgba(0, 0, 0, 0) url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat scroll 0 0 / cover;
    float: left;
    min-height: 500px;
    width: 100%;">
		<div class="container">
			<div class="row">
				<div class="jumbotron" style="background:none;">
				  <h1 class="small"><span class="bold">Welcome to Our Website</span></h1>
				  <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.</p>
				  <a href="#" class="btn btn-banner">Learn More<i class="fa fa-send"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--BANNER END-->

	<!--CTA1 START-->
	<div class="cta-1">
		<div class="container">
			<div class="row text-center white">
				<h1 class="cta-title">We are Creative</h1>
				<p class="cta-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. </p>
			</div>
		</div>
	</div>
	<!--CTA1 END-->

	<!--SERVICE START-->
	<div id="service" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1 style="color: #c52d2f;">Our Service</h1>
					<p><?php echo get_field('our_service_description');?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
					<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' => 6);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();
		$id = get_the_ID();	 
		?>
				<div class="col-md-4">
					<div class="service-box">
						<div class="service-icon">
						<img class="img-responsive" alt="<?php the_title();?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="service-text">
							<h3><?php the_title();?></h3>
							<p> <?php the_content();?></p>
							<a href="<?php echo  get_post_permalink($id );?>"><button class="btn btn-red" style="border-radius: 80px;">Read More</button></a>
						</div>
					</div>
				</div>
			  <?php endwhile; 
  wp_reset_postdata();
    ?>	
				
			</div>
		</div>
	</div>
	<!--SERVICE END-->
<div class="cta2">
		<div class="container">
			<div class="row white text-center">
				<h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
				<p class="cta-sub-title"></p>
				<a class="btn btn-default" href="#">Request A Quote</a>
			</div>
		</div>
	</div>
	
	<div class="container">
	<?php
	$args = array( 'post_type' => 'post', 'posts_per_page' => 1,'orderby'   => 'date',
        'order' => 'DESC',);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();
		$id = get_the_ID();	 
		?>
	<div class="row service">
	<div class="col-md-8">
	<p><?php the_content();?></p>
<a href="<?php echo  get_post_permalink($id );?>"> <button class="btn btn-red">Read More</button></a>
	</div>
	
	<div class="col-md-4 ser">
	<img src="<?php echo get_the_post_thumbnail_url(); ?>">
	</div>
	</div>
				  <?php endwhile; 
  wp_reset_postdata();
    ?>	
	</div>
<?php get_footer('home1'); ?>