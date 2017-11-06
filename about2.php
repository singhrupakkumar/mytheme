<?php /* Template Name: About 2 */ get_header(); ?>
<style>
.featured-item-img > img {
  max-width: 100%;
}
.featured-item .icon {
  float: left;
  height: 60px;
  width: 60px;
}
.featured-item .meta-text {
  margin-left: 80px;
}
.featured-item h3 {
  color: black;
  font-weight: 400;
  margin-bottom: 20px;
  margin-top: 10px;
}
.featured-item p {
  letter-spacing: 0.5px;
  margin-bottom: 50px;
}

.featured-item .icon-style {
  border: 1px solid #c52d2f;
  border-radius: 100%;
  height: 60px;
  padding: 15px 0;
  text-align: center;
  transition: all 0.5s ease 0s;
  width: 60px;
}
.icon i {
  color: #c52d2f;
}

.header > h2 {
    font-size: 30px;
    margin-bottom: 15px;
}
.accordion > img {
    max-width: 100%;
}
.accordion > p {
    padding-top: 20px;
}

.header {
  margin-bottom: 46px;
  margin-top: 110px;
}
</style>
<section id="features">
      <div class="features section-padding">
        <div class="container">

          <div class="header">
            <h2>About us</h2>
            <p><?php echo get_field('page_description');?></p>

          </div> <!-- end .container> .header -->

          <div class="row">
            <div class="col-md-4">
              <div class="featured-item-img">
                <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/about-us.jpg">
              </div>
            </div>
            <div class="col-md-8 feature-list">
              <div class="row">
<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' => 6);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();
$id = get_the_ID();	 
?>
                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon service-icon">
                      <img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (1st item) -->
				<?php endwhile; 
  wp_reset_postdata();
?>

             

              </div> <!-- end .feature-list> .row -->
            </div> <!-- end .feature-list -->
          </div> <!-- end .container> .row -->

        </div> <!-- end .container -->
      </div> <!-- end .features -->
    </section>

<section id="middle">
<div class="container">
<div class="row">
<div class="col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
<div class="accordion">
<img src="<?php echo get_the_post_thumbnail_url(); ?>">
<p>
<?php echo get_field('page_description');?>
</p>
</div>
</div>
<div class="col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
<div class="skill">
<h2>Our Skills</h2>
<p><?php echo get_field('our_skill_description');?></p>

<?php if( have_rows('our_skill') ): ?>

	<?php
	$i =0;
	while( have_rows('our_skill') ): the_row();

		// vars
		$i++;
		$name = get_sub_field('name');
		$value = get_sub_field('value');
		?>
<div class="progress-wrap">
<h3><?php echo $name;  ?></h3>
<div class="progress">
<div style="width: <?php echo $value; ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar  color<?php echo $i;  ?>" style="background:yellow;">
<span class="bar-width"><?php echo $value;  ?>%</span>
</div>
</div>
</div>

<?php endwhile;
endif;
	?>


</div>
</div> 
</div> 
</div> 
</section>
<?php 
get_footer();	
?>