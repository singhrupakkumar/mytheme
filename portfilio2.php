<?php /* Template Name: Portfolio 2 */ get_header(); ?>
<style type="text/css">
@media only screen and (max-width: 479px)
{
body > section {
  padding: 10px 0;
}
}
.portfolio-item {
  display: table-cell;
  vertical-align: middle;
  float: left;
}
.img-responsive[src="images/port1.jpg"] {
  height: 232px;
}
.img-responsive[src="images/port12.jpg"] {
  height: 271px;
}
.portfolio-items, .portfolio-filter {
  list-style: outside none none;
  margin: 0 0 0;
  padding: 0;
}
.img-responsive.port14 {
  height: 242px;
}
.img-responsive.port2 {
  height: 232px;
}
.img-responsive.port1 {
  height: 242px;
}
.recent-work-inner > p {
  padding-left: 0;
  width: 94%;
}

#portfolio {
    margin-top: 0 !important;
}
body>section {
    padding: 0px 0 !important;
}
</style>

<section id="portfolio">

<div class="center">
<h2>Portfolio</h2>
<div class="lead"><?php echo get_field('description');?></div>
</div>


<div class="portfolio-items">
<div class="container">
<div class="row"> 
	<?php
	$i = 1;
	//$j = 3;
//$k =10;

	$args = array( 'post_type' => 'works', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	 	$id = get_the_ID();
$category = get_the_terms( $id, 'works_taxo' );		 
		?>

<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-4">
<div class="recent-work-wrap">
<img class="img-responsive port14" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
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

$i++ ;
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