<?php 

/* Template Name: Home Template */ 

get_header(); 

?>

<style>
.recent-work-inner > p {
	padding-left: 0;
	width: 94%;
}
#feature {
    background: #f2f2f2 none repeat scroll 0 0;
    margin-top: -112px !important;
    padding-bottom: 40px;
}
#content .img_wrp{
	width:210px;
	height:190px;
	float:left;
}
#content .img_wrp img{
	width:100%;
}
.ser_icon{
    height:65px;
    width:65px;
    float:left;
    line-height:65px;
    border-radius:50%;
    overflow:hidden;
}
.ser_icon img{
    width:100%;
    height:100%;
}
</style>
<section id="main-slider" class="no-margin">
  <div class="carousel slide">
  <ol class="carousel-indicators">
  <?php	
		$k = 0;
	$args = array( 'post_type' => 'masterslider', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	
		?>
    
      <li data-target="#main-slider" data-slide-to="<?php echo $k; ?>" class="<?php if($k==0){echo "active";}?>"></li>

	 <?php 
	  $k++;
	 endwhile;
	   wp_reset_postdata();
	 ?>
    </ol>	 
    <div class="carousel-inner">
	<?php	
		$j = 0;
	$args = array( 'post_type' => 'masterslider', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 $j++;
		?>
      <div class="item <?php if($j==1){echo "active";}?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-6">
              <div class="carousel-content">
                <h1 class="animation animated-item-1"><?php the_title(); ?></h1>
                <h2 class="animation animated-item-2"><?php the_title(); ?></h2>
                <a class="btn-slide animation animated-item-3" href="<?php bloginfo('url'); ?>">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
	 <?php endwhile;
	   wp_reset_postdata();
	 ?> 
  
    </div>
  </div>
  <a class="prev hidden-xs" href="#main-slider" data-slide="prev"><i class="fa fa-chevron-left"></i></a><a class="next hidden-xs" href="#main-slider" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </section>
<section id="feature">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Features</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
        et dolore magna aliqua. Ut enim ad minim veniam</p>
    </div>
    <div class="row">
      <div class="features"> 
 <?php if( have_rows('banner_below_section') ): ?>

	<?php while( have_rows('banner_below_section') ): the_row();

		// vars
		$icon = get_sub_field('icon');
		$title = get_sub_field('title');
		$desc = get_sub_field('description');
		?>
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"><?php echo $icon; ?>
            <h2><?php echo $title; ?></h2>
            <h3><?php echo $desc; ?></h3>
          </div>
        </div>
<?php endwhile; ?>
<?php endif; ?>
       
      </div>
    </div>
  </div>
</section>
<section id="recent-works">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Recent Works</h2>
      <div class="lead"><?php echo get_field('recent_works_description_');?></div>
    </div>
    <div class="row">

	<?php
	$args = array( 'post_type' => 'works', 'posts_per_page' => 6);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();
$id = get_the_ID();	 
		?>	
      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="<?php echo  get_post_permalink($id );?>"><?php the_title(); ?></a> </h3>
			<?php the_content(); ?>
              
              <a href="<?php echo  get_post_permalink($id );?>"><i class="fa fa-eye"></i> View</a></div>
          </div>
        </div>
      </div>
	  		 <?php endwhile; 
  wp_reset_postdata();
    ?>

     
    </div>
  </div>
</section>
<section id="services" class="service-item">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Our Service</h2>
      <div class="lead"><?php echo get_field('our_service_description');?></div>
    </div>
    <div class="row">
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

      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
              <div class="ser_icon">
                  <img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
              </div>
            </div>
          <div class="media-body">
            <h3 class="media-heading"><?php the_title();?></h3>
            <p><?php the_content();?></p>
          </div>
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
</section>
<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 wow fadeInDown">
        <div class="skill">
          <h2>Our Skills</h2>
          <p><?php echo get_field('our_skills_description');?></p>
<?php if( have_rows('skills_values') ): ?>

	<?php
	$i =0;
	while( have_rows('skills_values') ): the_row();

		// vars
		$i++;
		$title = get_sub_field('title');
		$value = get_sub_field('value');
		?>
          <div class="progress-wrap">
            <h3><?php echo $title; ?></h3>
            <div class="progress">
              <div class="progress-bar color<?php echo $i; ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value; ?>%"><span class="bar-width"><?php echo $value; ?>%</span></div>
            </div>
          </div>
	<?php endwhile;
endif;
	?>	  
  
        </div>
      </div>
      <div class="col-sm-6 wow fadeInDown">
        <div class="accordion">
          <h2>Why People like us?</h2>
          <div class="panel-group" id="accordion1">
		  <?php if( have_rows('why_people_like_us') ): ?>

	<?php
	$i =0;
	while( have_rows('why_people_like_us') ): the_row();

		// vars
		$i++;
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$desc = get_sub_field('description');
		?>
            <div class="panel panel-default">
              <div class="panel-heading <?php if($i==1){ echo "active";}?>">
                <h3 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne<?php echo $i; ?>"><?php echo $title; ?><i class="fa fa-angle-right pull-right"></i></a></h3>
              </div>
              <div id="collapseOne<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==1){ echo "in";}?>">
                <div class="panel-body">
                  <div class="media accordion-inner">
                    <div class="pull-left"><div class="why-img"><img class="img-responsive" src="<?php echo $image; ?>"></div></div>
                    <div class="media-body">
                      <h4><?php echo $title; ?></h4>
                      <p><?php echo $desc; ?></p>
                    </div>
                  </div>
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
  </div>
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 wow fadeInDown">
        <div class="tab-wrap">
          <div class="media">
            <div class="parrent pull-left">
              <ul class="nav nav-tabs nav-stacked">
                <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
              </ul>
            </div>
            <div class="parrent media-body">
              <div class="tab-content">
                <div class="tab-pane fade" id="tab1">
                  <div class="media">
                    <div class="pull-left">
						<div class="img_wrp">
							<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/images/tab2.jpg">
						</div>
					</div>
                    <div class="media-body">
                      <h2>Adipisicing elit</h2>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade active in" id="tab2">
                  <div class="media">
                    <div class="pull-left">
						<div class="img_wrp">
							<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/images/tab1.jpg">
						</div>
					</div>
                    <div class="media-body">
                      <h2>Adipisicing elit</h2>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab3">
                  <div class="media">
                    <div class="pull-left">
						<div class="img_wrp">
							<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/images/tab2.jpg">
						</div>
					</div>
                    <div class="media-body">
                      <h2>Adipisicing elit</h2>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab4">
                  <div class="media">
                    <div class="pull-left">
						<div class="img_wrp">
							<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/images/tab1.jpg">
						</div>
					</div>
                    <div class="media-body">
                      <h2>Adipisicing elit</h2>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                    </div>
                  </div>
                </div>
				<div class="tab-pane fade" id="tab5">
                  <div class="media">
                    <div class="pull-left">
						<div class="img_wrp">
							<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/images/tab2.jpg">
						</div>
					</div>
                    <div class="media-body">
                      <h2>Adipisicing elit</h2>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 wow fadeInDown">
        <div class="testimonial">
          <h2>Testimonials</h2>
		  	<?php
	$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
          <div class="media testimonial-inner">
            <div class="pull-left">
			<div class="testimonial-icon">
			<img class="img-responsive img-circle" src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
			</div>
            <div class="media-body">
		
              <p><?php the_content(); ?></p>
              <span><strong>-<?php echo get_field('author');?></strong></span></div>
          </div>
		 <?php endwhile; 
  wp_reset_postdata();
    ?>  
      
        </div>
      </div>
    </div>
  </div>
</section>
<section id="partner">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Our Partners</h2>
      <div class="lead"><?php echo get_field('our_partners_description');?></div>
    </div>
    <div class="partners">
      <ul>
        <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo get_template_directory_uri(); ?>/images/partner1.png"></a></li>
        <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php echo get_template_directory_uri(); ?>/images/partner2.png"></a></li>
        <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php echo get_template_directory_uri(); ?>/images/partner3.png"></a></li>
        <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php echo get_template_directory_uri(); ?>/images/partner4.png"></a></li>
        <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php echo get_template_directory_uri(); ?>/images/partner5.png"></a></li>
      </ul>
    </div>
  </div>
</section>
<section id="conatcat-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 contact-left">
        <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="pull-left"><i class="fa fa-phone"></i></div>
          <div class="media-body">
            <h2>Have a question or need a custom quote?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 contact-right"><img src="<?php echo get_template_directory_uri(); ?>/images/contact.png"></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>