<?php /* Template Name: Services */ get_header(); ?>
<style>
    .ser_icon{
        width:110px;
        height:110px;
        float:left;
        margin-right:15px;
        display:inline-block;
        border-radius:50%;
        line-height:110px;
        overflow:hidden;
    }
    .ser_icon img{
        width:100%;
        height:100%;
    }
</style>
<section id="feature" class="transparent-bg" style="margin-top:85px !important;">
<div class="container">
<div class="center wow fadeInDown">
<h2>Our Services</h2>
<div class="lead page-title"><p><?php echo get_field('our_service_description');?></p></div>
</div>
<div class="row">
<div class="features">
	<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	 	$id = get_the_ID();
$category = get_the_terms( $id, 'services_taxo' );
if (is_array($category) || is_object($category))
{		 
foreach ( $category as $cat){
	if($cat->name=='with small image'){ 
		?>
<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="feature-wrap">
    <div class="ser_icon">
        <img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
    </div>
<h2><?php the_title();?></h2>
<h3><?php the_content();?></h3>
</div>
</div> 

   <?php
	}
}
}
   endwhile; 
  wp_reset_postdata();
    ?>

</div> 
</div> 
</div>

<div class="get-started center wow fadeInDown">
<h2>Ready to get started</h2>
<div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
<div class="request">
<h4><a href="#">Request a free Quote</a></h4>
</div>
</div>

<div class="container"> 
<div class="clients-area center wow fadeInDown">
<h2>What our client says</h2>
<div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</div>
</div>
<div class="row">
		  	<?php
	$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
<div class="col-md-4 wow fadeInDown">
<div class="clients-comments text-center">
<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-circle" alt="<?php echo get_field('author');?>">
<h3><?php the_content(); ?></h3>
<h4><span>-<?php echo get_field('author');?></span></h4>
</div>
</div>
		 <?php endwhile; 
  wp_reset_postdata();
    ?> 

</div>
</div> 
</section> 
	<?php get_footer(); ?>