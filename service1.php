<?php /* Template Name: Services 1*/ get_header(); ?>
<style type="text/css">
@media only screen and (max-width: 479px)
{
body > section {
  padding: 10px 0;
}
}

.center {
  background: #f5f5f5 none repeat scroll 0 0;
  padding-bottom: 55px;
  padding-top: 50px;
  text-align: center;
}

.center h2 {
  font-size: 36px;
  margin-bottom: 20px;
  margin-top: 0;
  text-transform: uppercase;
}

body > section {
  padding: 0px 0;
}

.recent-work-wrap .recent-work-inner h3 {
  color: black;
  font-size: 25px;
  font-weight: bold;
  margin: 10px 0;
  padding-bottom: 10px;
  padding-left: 39px;
}

.recent-work-inner > h2 {
  background: #cd2e2f none repeat scroll 0 0;
  border-radius: 5px;
  margin-left: 40px;
  margin-top: 20px;
  padding: 7px;
  text-align: center;
  width: 23%;
}
.recent-work-inner > p{
    padding-left: 40px;
    width: 94%;
}
</style>
<section id="portfolio">
<div class="center">
<h2>Services</h2>
<div class="lead page-title"><p><?php echo get_field('our_service_description');?></p></div>
</div>

	<?php
	$even = 0;
	$args = array( 'post_type' => 'services', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	$id = get_the_ID();
$category = get_the_terms( $id, 'services_taxo' );
if (is_array($category) || is_object($category))
{		 
foreach ( $category as $cat){
	if($cat->name=='with big image'){ 
		?>
<div class="">
<?php if($even %2 ==0){ ?>
<div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-6">
<div class="recent-work-wrap">
<div class="recent-work-inner">
<h3><?php the_title();?></h3>
<?php the_content();?>
<h2><a href="<?php echo  get_post_permalink($id );?>">READ MORE</a></h2>
</div>
</div>
</div>
<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6">
<div class="recent-work-wrap">
<img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
</div>
</div>
<?php }elseif($even %2 ==1){ ?>
<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6">
<div class="recent-work-wrap">
<img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
</div>
</div>
<div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-6">
<div class="recent-work-wrap">
<div class="recent-work-inner">
<h3><?php the_title();?></h3>
<?php the_content();?>
<h2><a href="<?php echo  get_post_permalink($id );?>">READ MORE</a></h2>
</div>
</div>
</div>
<?php } ?>
 </div>
   <?php
	}
}  
} 
   $even++; 
   endwhile; 
  wp_reset_postdata();
    ?>



</section> 
	<?php get_footer(); ?>