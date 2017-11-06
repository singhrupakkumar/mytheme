<?php /* Template Name: Portfolio 1 */ get_header(); ?>
<style type="text/css">
@media only screen and (max-width: 479px)
{
body > section {
  padding: 10px 0;
}
}
.portfolio-item {
  display: table-cell;
  float: left;
  vertical-align: middle;
}

.recent-work-inner > p {
  padding-left: 0;
  width: 94%;
}
</style>

<section id="portfolio">

<div class="center">
<h2>Portfolio</h2>
<div class="lead"><?php echo get_field('description');?></div>
</div>
	<?php
	$args = array( 'post_type' => 'works', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	 	$id = get_the_ID();

		?>
<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6">
<div class="recent-work-wrap">
<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
<div class="overlay">
<div class="recent-work-inner">
<h3><a href="#"><?php the_title(); ?></a></h3>
<?php the_content(); ?>
<a href="<?php echo  get_post_permalink($id );?>"><i class="fa fa-eye"></i> View</a>
</div>
</div>
</div>
</div>

   <?php
   endwhile; 
  wp_reset_postdata();
    ?>

</section> 
<?php 
get_footer();	
?>