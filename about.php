<?php /* Template Name: About */ get_header(); ?>
<style type="text/css">
	.team .col-md-4:nth-child(4){
		position:absolute;
		left:0px;
		top:420px;
	}
	.team-bar{
		width:100%;
		float:left;
	}
</style>
<section id="about-us">
<div class="container">
<div class="center wow fadeInDown">
<h2>About</h2>
<div class="lead"><?php echo get_field('page_description');?></div>
</div></div></section>
 
<div id="about-slider">
<div id="carousel-slider" class="carousel slide" data-ride="carousel">
 
<div class="carousel-inner">
 <?php if( have_rows('slider_image') ): ?>

	<?php 
	$ii = 0;
	while( have_rows('slider_image') ): the_row();
		$image = get_sub_field('image');
$ii++;
		?>
<div class="item <?php if($ii == 1){ echo "active"; } ?>">
<img src="<?php echo $image; ?>" class="img-responsive" alt="">
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>
<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
		<div class="container">
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Our Skill</h2>
					<div class="lead"><?php echo get_field('our_skill_description');?></div>
				</div>
				
				<div class="row">
				 <?php if( have_rows('our_skill') ): ?>

	<?php while( have_rows('our_skill') ): the_row();

		// vars
		$name = get_sub_field('name');
		$image = get_sub_field('image');
		$value = get_sub_field('value');
		?>
					<div class="col-sm-3 text-center">
						<img src="<?php echo $image; ?>">
					<p><em><?php echo $value; ?>%</em></p>
								<p><?php echo $name; ?></p>
					</div>
					<?php endwhile; ?>
               <?php endif; ?>
				
					
				</div>
	
            </div><!--/.our-skill-->
			

			<!-- our-team -->
			<div class="team" style="height: 895px;">
				<div class="center wow fadeInDown">
					<h2>Our Team</h2>
					<div class="lead"><?php echo get_field('our_team_description');?></div>
				</div>
				

				<div class="row clearfix" style="position:relative;">
					<?php

			$row = '<div class="team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> ';

					
		$j = 0;
		$count = 1 ;
	$args = array( 'post_type' => 'team', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
	 $count_posts = $loop->post_count;
     while ( $loop->have_posts() ) : $loop->the_post(); 
	
	 $j++;
		?>
				
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
								</div>
								<div class="media-body">
									<h4><?php the_title(); ?></h4>
									<h5><?php the_excerpt(); ?></h5>
									<ul class="tag clearfix">
										<?php if( have_rows('skill') ):
											while( have_rows('skill') ): the_row();
											$name = get_sub_field('name');
											?>
										<li class="btn"><a href="#"><?php echo $name ;?></a></li>
									<?php endwhile; ?>
										<?php endif; ?>
									</ul>
									
									<ul class="social_icons">
										<li><a href="<?php echo get_field('facebook_link');?>"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?php echo get_field('twitter');?>"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="<?php echo get_field('google');?>"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p><?php the_content(); ?></p>
						</div>
					</div><!--/.col-lg-4 -->
				
					
					 <?php
						if($count % 3 ==1 && $count !=1){
						echo $row;	
							
						}
						$count++;
					 endwhile;
					   wp_reset_postdata();
					  
					 ?> 
				</div> <!--/.row -->
			<!--skill_border-->       

				
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
<?php 
get_footer();	
?>	
