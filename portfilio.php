<?php /* Template Name: Portfolio */ get_header(); ?>
<style type="text/css">
@media only screen and (max-width: 479px)
{
body > section {
  padding: 10px 0;
}
}
.recent-work-inner > p {
  padding-left: 0;
  width: 94%;
}
.portfolio-items{overflow: visible !important;}
</style>

<section id="portfolio">
<div class="container">
<div class="center">
<h2>Portfolio</h2>
<div class="lead"><?php echo get_field('description');?></div>
</div>
<ul class="portfolio-filter text-center">
<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
<?php
$taxonomy = 'works_taxo';
$terms = get_terms(array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
) ); // Get all terms of a taxonomy
if ( $terms && !is_wp_error( $terms ) ) {		 
foreach ( $terms as $cat){
?>
<li><a class="btn btn-default" href="#" data-filter=".<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>
<?php
}
}
 ?>

</ul> 
<div class="row">
<div class="portfolio-items">

	<?php
	$args = array( 'post_type' => 'works', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	 	$id = get_the_ID();
$category = get_the_terms( $id, 'works_taxo' );
if (is_array($category) || is_object($category))
{		 
foreach ( $category as $cat){

		?>
<div class="portfolio-item apps <?php echo $cat->name; ?> col-xs-12 col-sm-4 col-md-3">
<div class="recent-work-wrap">
<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
<div class="overlay">
<div class="recent-work-inner">
<h3><a href="<?php echo  get_post_permalink($id );?>"><?php the_title(); ?></a></h3> 
<?php the_content(); ?>
<a href="<?php echo  get_post_permalink($id );?>"><i class="fa fa-eye"></i> View</a>
</div>
</div>
</div>
</div> 
   <?php
}
}
   endwhile; 
  wp_reset_postdata();
    ?>


</div>
</div>

</div>
</section> 
<?php 
get_footer();	
?>